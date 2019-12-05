from django.forms import ModelForm
from HomePage.models import *
class Form(ModelForm):
    class Meta:
        model = Buser
        fields =['id','pw','name','phone']
        
class FormSS(ModelForm):
    class Meta:
        model = Ssboard        
        fields =['title','content','id']
        
class FormOOP(ModelForm):
    class Meta:
        model = Oopboard        
        fields =['title','content','id']