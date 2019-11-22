from django.shortcuts import render
from django.http import HttpResponse, HttpResponseRedirect
from HomePage.forms import *
from HomePage.models import *
from django.urls import reverse
# Create your views here.


def index(request):
    return render(request, 'homepage/index.html')


def contact(request):
    return render(request, 'homepage/contact.html')


def about(request):
    return render(request, 'homepage/about.html')


def SSpost(request, no):
    post = Ssboard.objects.filter(no=no)
    return render(request, 'homepage/post_server.html', {'posts':post})




def SSlist(request):
    posts = Ssboard.objects.all()
    return render(request, 'homepage/write.html', {'posts':posts})


def loginorReg(request):
    message = None;
    if request.method == 'POST':
        if request.POST['name'] == None:
            username = request.POST['form-email']
            password = request.POST['form-password']
            if Buser.objects.get(id=username, pw=password):
                request.session['userid'] = username;
            return HttpResponseRedirect(reverse('OMS:Orders'))           
        else: 
            form = Form(request.POST)
            if form.is_valid():
                message = None;
                form.save()
            else:
                message = "ERROR"        
    else:
        form = Form()
    print(message)
    return render(request, 'homepage/loginorReg.html', {'form':form, 'message':message})


def SSwrite(request):   
    if request.method == 'POST':        
            form = FormSS(request.POST)
            if form.is_valid():
                message = None;
                form.save()
            else:
                message = "ERROR"        
    else:
        form = Form()
    if request.session['userid'] is None:
        return HttpResponseRedirect(reverse('HomePage:index'))
    user = Buser.objects.get(id=request.session['userid'])
    return render(request, 'homepage/list.html', {'user':user})

