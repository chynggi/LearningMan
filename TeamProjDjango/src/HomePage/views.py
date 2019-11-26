from django.shortcuts import render
from django.http import HttpResponse, HttpResponseRedirect
from django.db import connection
from HomePage.forms import *
from HomePage.models import *
from django.urls import reverse
from django.shortcuts import get_object_or_404
# Create your views here.


def index(request):
    return render(request, 'homepage/index.html')


def contact(request):
    return render(request, 'homepage/contact.html')


def about(request):
    return render(request, 'homepage/about.html')


def SSpost(request, no):
    post = Ssboard.objects.get(no=no)
    return render(request, 'homepage/post_server.html', {'post':post})




def SSlist(request):
    posts = Ssboard.objects.all()
    return render(request, 'homepage/write.html', {'posts':posts})

def logout(request):
    request.session['userid'] = None;
    return HttpResponseRedirect(reverse('HomePage:index'))


def loginorReg(request):
    form = None;
    message = None;
    if request.method == 'POST':
        if request.POST.get('name','') == '':
            username = request.POST.get('form-username','')
            password = request.POST.get('form-password','')
            print(username)
            print(password)            
            try:
                if Buser.objects.get(id=username, pw=password):
                    request.session['userid'] = username;
                    return HttpResponseRedirect(reverse('HomePage:index'))
            except Buser.DoesNotExist:    
                    message = "ERROR2"  
                       
        else: 
            form = Form(request.POST)
            if form.is_valid():
                message = None;
                form.save()
                request.session['userid'] = request.POST.get('form-email','');                
                return HttpResponseRedirect(reverse('HomePage:index'))
            else:
                message = "ERROR"        
    else:
        form = Form()
    print(message)
    return render(request, 'homepage/loginorReg.html', {'form':form, 'message':message})


def SSwrite(request):   
    message = None;
    if request.method == 'POST':        
            form = FormSS(request.POST)
            if form.is_valid():                
                print('aaa')
                message = None;
                Ssboardobj = Ssboard()
                cursor = connection.cursor()
                cursor.execute("SELECT %s.nextval FROM DUAL;" % ('SSBOARD_SEQ'))
                row = cursor.fetchone()
                print(row[0])
                Ssboardobj.no = row[0]
                Ssboardobj.title = form.cleaned_data['title']
                Ssboardobj.content = form.cleaned_data['content']
                Ssboardobj.id = form.cleaned_data['id']
                Ssboardobj.save()
                return HttpResponseRedirect(reverse('HomePage:sslist'))        
            else:
                message = "ERROR"        
    else:
        form = FormSS()
    if request.session['userid'] is None:
        return HttpResponseRedirect(reverse('HomePage:index'))
    user = Buser.objects.get(id=request.session['userid'])
    return render(request, 'homepage/list.html', {'user':user,'message':message})

def SSupdate(request,no):   
    message = None;
    post = Ssboard.objects.get(no=no)
    if request.method == 'POST':        
            form = FormSS(request.POST)
            if form.is_valid():                
                print('aaa')
                message = None;
                post.title = form.cleaned_data['title']
                post.content = form.cleaned_data['content']                
                post.save()
                return HttpResponseRedirect(reverse('HomePage:sslist'))        
            else:
                message = "ERROR"        
    else:
        form = FormSS()
    if request.session['userid'] is None:
        return HttpResponseRedirect(reverse('HomePage:index'))
    user = Buser.objects.get(id=request.session['userid'])
    return render(request, 'homepage/list.html', {'user':user,'message':message,'post':post})

def SSdelete(request,no):
    Ssboard.objects.get(no=no).delete()    
    return HttpResponseRedirect(reverse('HomePage:sslist'))
    