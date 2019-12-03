from django.shortcuts import render
#from HomePage.forms import Form
#from HomePage.models import Homebook
# Create your views here.

def index(request):
    return render(request,'homepage/index.html')

def contact(request):
    return render(request,'homepage/contact.html')

def about(request):
    return render(request,'homepage/about.html')

def post(request):
    return render(request,'homepage/post.html')