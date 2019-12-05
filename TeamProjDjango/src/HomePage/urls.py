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
    path('about',views.about,name='about'),
       
    #DABOARD
    path('dalist',views.DAlist,name='dalist'),
    path('dawrite',views.DAwrite,name='dawrite'),   
    path('daupdate/<int:no>',views.DAupdate,name='daupdate'),   
    path('dadelete/<int:no>',views.DAdelete,name='dadelete'),
    path('dapost/<int:no>',views.DApost,name='dapost'), 
    path('damain',views.DAmain,name='damain'),   
]