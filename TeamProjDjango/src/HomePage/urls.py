from django.urls import path 
from . import views 
app_name ='HomePage'
urlpatterns=[
    path('',views.index,name='index'),
    path('index',views.index,name='index'),
    path('contact',views.contact,name='contact'),
    path('sslist',views.SSlist,name='post'),
    path('loginorReg',views.loginorReg,name='post'),
    path('sspost/<int:no>',views.SSpost,name='post'),
    path('about',views.about,name='about'),
]
