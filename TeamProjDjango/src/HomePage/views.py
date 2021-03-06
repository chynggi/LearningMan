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
        user = Buser.objects.get(id=form.cleaned_data['id'],pw=form.cleaned_data['pw'])
        form = Form(request.POST,instance=user)        
        if form.is_valid():
            message = None;            
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


##OOPBOARD

def OOPwrite(request):   
    message = None;
    if request.method == 'POST':        
            form = FormSS(request.POST)
            if form.is_valid():                
                print('aaa')
                message = None;
                Oopboardobj = Oopboard()
                cursor = connection.cursor()
                cursor.execute("SELECT %s.nextval FROM DUAL;" % ('OOPBOARD_SEQ'))
                row = cursor.fetchone()
                print(row[0])
                Oopboardobj.no = row[0]
                Oopboardobj.title = form.cleaned_data['title']
                Oopboardobj.content = form.cleaned_data['content']
                Oopboardobj.id = form.cleaned_data['id']
                Oopboardobj.save()
                return HttpResponseRedirect(reverse('HomePage:ooplist'))        
            else:
                message = "ERROR"        
    else:
        form = FormSS()
    try:
        if request.session['userid'] is None:
            return HttpResponseRedirect(reverse('HomePage:index'))
    except:
        return HttpResponseRedirect(reverse('HomePage:index')) 
    
    
    user = Buser.objects.get(id=request.session['userid'])
    return render(request, 'homepage/oopwrite.html', {'user':user,'message':message})

def OOPupdate(request,no):   
    message = None;
    post = Oopboard.objects.get(no=no)
    if request.method == 'POST':        
            form = FormSS(request.POST,instance=post)
            if form.is_valid():                
                print('aaa')
                message = None;
                post.title = form.cleaned_data['title']
                post.content = form.cleaned_data['content']                
                post.save()
                return HttpResponseRedirect(reverse('HomePage:ooplist'))        
            else:
                message = "ERROR"        
    else:
        form = FormSS()
    if request.session['userid'] is None:
        return HttpResponseRedirect(reverse('HomePage:index'))
    user = Buser.objects.get(id=request.session['userid'])
    return render(request, 'homepage/oopwrite.html', {'user':user,'message':message,'post':post})

def OOPdelete(request,no):
    Oopboard.objects.get(no=no).delete()    
    return HttpResponseRedirect(reverse('HomePage:ooplist'))

def OOPpost(request, no):
    post = Oopboard.objects.get(no=no)
    return render(request, 'homepage/oop_detail.html', {'post':post})




def OOPlist(request):
    posts = Oopboard.objects.all()
    return render(request, 'homepage/ooplist.html', {'posts':posts})
    
    


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
    return render(request, 'homepage/dawrite.html', {'user':user,'message':message})

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
    return render(request, 'homepage/dawrite.html', {'user':user,'message':message,'post':post})

def DAdelete(request,no): # 게시글 삭제
    Daboard.objects.get(no=no).delete()    
    return HttpResponseRedirect(reverse('HomePage:dalist'))    

def DAmain(request): # 메인 화면
    return render(request, 'homepage/damain.html')
    


##FRBOARD
def FRpost(request, no): # 게시글 보기
    post = Frboard.objects.get(no=no)
    return render(request, 'homepage/frpost.html', {'post':post})

def FRlist(request): # 게시판 목록
    posts = Frboard.objects.all()
    return render(request, 'homepage/frlist.html', {'posts':posts})

def FRwrite(request): # 게시글 작성
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
    return render(request, 'homepage/frwrite.html', {'user':user,'message':message})

def FRupdate(request,no): # 게시글 수정
    message = None;
    post = Frboard.objects.get(no=no)
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
    return render(request, 'homepage/frwrite.html', {'user':user,'message':message,'post':post})

def FRdelete(request,no): # 게시글 삭제
    Frboard.objects.get(no=no).delete()    
    return HttpResponseRedirect(reverse('HomePage:dalist'))    

def FRmain(request): # 메인 화면
    return render(request, 'homepage/frmain.html')



##DBMSBOARD==================================================================================
##===========================================================================================
def DBpost(request, no):  # 정보?
    post = Dbmsboard.objects.get(no=no)
    return render(request, 'homepage/dbms_post_server.html', {'post':post})




def DBlist(request): # 글목록
    posts = Dbmsboard.objects.all()
    return render(request, 'HomePage/dbmslist.html', {'posts':posts})    

def DBwrite(request): # 글쓰기
    message = None;
    if request.method == 'POST':        
            form = FormSS(request.POST)
            if form.is_valid():                
                print('aaa')
                message = None;
                dbboardobj = Dbmsboard()
                cursor = connection.cursor()
                cursor.execute("SELECT %s.nextval FROM DUAL;" % ('DBMSBOARD_SEQ'))
                row = cursor.fetchone()
                print(row[0])
                dbboardobj.no = row[0]
                dbboardobj.title = form.cleaned_data['title']
                dbboardobj.content = form.cleaned_data['content']
                dbboardobj.id = form.cleaned_data['id']
                dbboardobj.save()
                return HttpResponseRedirect(reverse('HomePage:dbmslist'))        
            else:
                message = "ERROR"        
    else:
        form = FormSS() 
    try:
        if request.session['userid'] is None:
            return HttpResponseRedirect(reverse('HomePage:index'))
    except:
        return HttpResponseRedirect(reverse('HomePage:index'))
    
    user = Buser.objects.get(id=request.session['userid'])
    return render(request, 'HomePage/dbmswrite.html', {'user':user,'message':message})

def DBupdate(request,no):   # 수정
    message = None;
    post = Dbmsboard.objects.get(no=no)
    if request.method == 'POST':        
            form = FormSS(request.POST)
            if form.is_valid():                
                print('aaa')
                message = None;
                post.title = form.cleaned_data['title']
                post.content = form.cleaned_data['content']                
                post.save()
                return HttpResponseRedirect(reverse('HomePage:dbmslist'))        
            else:
                message = "ERROR"        
    else:
        form = FormSS()
    if request.session['userid'] is None:
        return HttpResponseRedirect(reverse('HomePage:index'))
    user = Buser.objects.get(id=request.session['userid'])
    return render(request, 'HomePage/dbmswrite.html', {'user':user,'message':message,'post':post})

def DBdelete(request,no):  # 삭제
    Dbmsboard.objects.get(no=no).delete()    
    return HttpResponseRedirect(reverse('HomePage:dbmslist'))
    
    
    