from django.urls import path 
from . import views 
app_name ='HomePage'
urlpatterns=[
    path('',views.index,name='index'),
    path('index',views.index,name='index'),
    path('contact',views.contact,name='contact'),
    path('sslist',views.SSlist,name='sslist'),
    path('sswrite',views.SSwrite,name='sswrite'),   
    path('ssupdate/<int:no>',views.SSupdate,name='ssupdate'),   
    path('ssdelete/<int:no>',views.SSdelete,name='ssdelete'),    
    path('logout',views.logout,name='logout'),
    path('login',views.login,name='login'),
    path('register',views.register,name='register'),
    path('update',views.update,name='update'),
    path('delete',views.update,name='delete'),
    path('sspost/<int:no>',views.SSpost,name='sspost'),
    path('about',views.about,name='about'),#OOPBOARD
    path('ooplist',views.OOPlist,name='ooplist'),
    path('oopwrite',views.OOPwrite,name='oopwrite'),   
    path('oopupdate/<int:no>',views.OOPupdate,name='oopupdate'),   
    path('oopdelete/<int:no>',views.OOPdelete,name='oopdelete'), 
    path('ooppost/<int:no>',views.OOPpost,name='ooppost'), 
]
