from django.forms import ModelForm
from HomePage.models import *
class Form(ModelForm):
    class Meta:
        model = Buser
        fields =['id','pw','name','phone']
        
class FormSS(ModelForm):
    class Meta:
        model = Ssboard
        '''
        no = models.FloatField(primary_key=True)
        title = models.CharField(max_length=100, blank=True, null=True)
        content = models.CharField(max_length=3000, blank=True, null=True)
        id = models.ForeignKey('Buser', models.DO_NOTHING, db_column='id', blank=True, null=True)
        xdate = models.DateField(blank=True, null=True)
        '''
        fields =['title','content','id']
        
class FormOOP(ModelForm):
    class Meta:
        model = Oopboard        
        fields =['title','content','id']        
        
        
class FormDA(ModelForm):
    class Meta:
        model = Daboard
        fields =['title','content','id']