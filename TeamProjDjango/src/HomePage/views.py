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

def login(request):
    form = None;
    message = None;
    if request.method == 'POST':
            username = request.POST.get('id','')
            password = request.POST.get('pw','')
            print(username)
            print(password)            
            try:
                if Buser.objects.get(id=username, pw=password):
                    request.session['userid'] = username;
                    return HttpResponseRedirect(reverse('HomePage:index'))
            except Buser.DoesNotExist:    
                    message = "ERROR2"  
    else:
        form = Form()
    print(message)
    return render(request, 'homepage/loginorReg.html', {'form':form, 'message':message})

def register(request):
    form = None;
    message = None;    
    if request.method == 'POST':
        form = Form(request.POST)
        if form.is_valid():
            message = None;
            form.save()
            request.session['userid'] = request.POST.get('id','');                
            return HttpResponseRedirect(reverse('HomePage:index'))
        else:
            message = "ERROR"        
    else:
        form = Form()
    print(message)
    return render(request, 'homepage/Register.html', {'form':form, 'message':message})

def update(request):
    form = None;
    message = None;    
    user = Buser.objects.get(id=request.session['userid'])
    if request.method == 'POST':
        form = Form(request.POST,instance=user)
        if form.is_valid():
            message = None;
            user = Buser.objects.get(id=form.cleaned_data['id'])
            user.pw = form.cleaned_data['pw']
            user.name = form.cleaned_data['name']
            user.phone = form.cleaned_data['phone']
            user.save();  
            return HttpResponseRedirect(reverse('HomePage:index'))
        else:
            print(form.errors)
            message = "ERROR"        
    else:
        form = Form()
    print(message)
    return render(request, 'homepage/memberupdate.html', {'form':form, 'message':message,'user':user})

def delete(request):
    form = None;
    message = None;    
    if request.method == 'POST':
        user = Buser.objects.get(id=request.POST.get('id',''))
        form = Form(request.POST,instance=user)        
        if form.is_valid():
            message = None;    
            user = Buser.objects.get(id=form.cleaned_data['id'],pw=form.cleaned_data['pw'])        
            user.delete();  
            return HttpResponseRedirect(reverse('HomePage:index'))
        else:
            message = "ERROR"        
    else:
        form = Form()
    print(message)
    request.session['userid'] = None;
    return render(request, 'homepage/memberdelete.html', {'form':form, 'message':message})

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













##DABOARD
def DApost(request, no): # 게시글 보기
    post = Daboard.objects.get(no=no)
    return render(request, 'homepage/dapost.html', {'post':post})

def DAlist(request): # 게시판 목록
    posts = Daboard.objects.all()
    return render(request, 'homepage/dalist.html', {'posts':posts})

def DAwrite(request): # 게시글 작성
    message = None;
    if request.method == 'POST':        
            form = FormSS(request.POST)
            if form.is_valid():                
                print('aaa')
                message = None;
                Daboardobj = Daboard()
                cursor = connection.cursor()
                cursor.execute("SELECT %s.nextval FROM DUAL;" % ('DABOARD_SEQ'))
                row = cursor.fetchone()
                print(row[0])
                Daboardobj.no = row[0]
                Daboardobj.title = form.cleaned_data['title']
                Daboardobj.content = form.cleaned_data['content']
                Daboardobj.id = form.cleaned_data['id']
                Daboardobj.save()
                return HttpResponseRedirect(reverse('HomePage:dalist'))        
            else:
                message = "ERROR"        
    else:
        form = FormSS()
    if request.session['userid'] is None:
        return HttpResponseRedirect(reverse('HomePage:index'))
    user = Buser.objects.get(id=request.session['userid'])
    return render(request, 'homepage/dalist.html', {'user':user,'message':message})

def DAupdate(request,no): # 게시글 수정
    message = None;
    post = Daboard.objects.get(no=no)
    if request.method == 'POST':        
            form = FormSS(request.POST)
            if form.is_valid():                
                print('aaa')
                message = None;
                post.title = form.cleaned_data['title']
                post.content = form.cleaned_data['content']                
                post.save()
                return HttpResponseRedirect(reverse('HomePage:dalist'))        
            else:
                message = "ERROR"        
    else:
        form = FormSS()
    if request.session['userid'] is None:
        return HttpResponseRedirect(reverse('HomePage:index'))
    user = Buser.objects.get(id=request.session['userid'])
    return render(request, 'homepage/dalist.html', {'user':user,'message':message,'post':post})

def DAdelete(request,no): # 게시글 삭제
    Daboard.objects.get(no=no).delete()    
    return HttpResponseRedirect(reverse('HomePage:dalist'))    

def DAmain(request):
    return render(request, 'homepage/damain.html')