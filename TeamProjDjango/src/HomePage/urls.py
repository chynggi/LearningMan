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
    #FRBOARD
    path('frlist',views.FRlist,name='frlist'),
    path('frwrite',views.FRwrite,name='frwrite'),   
    path('frupdate/<int:no>',views.FRupdate,name='frupdate'),   
    path('frdelete/<int:no>',views.FRdelete,name='frdelete'),
    path('frpost/<int:no>',views.FRpost,name='frpost'), 
    path('frmain',views.FRmain,name='frmain'),   
    path('about',views.about,name='about'),
    #OOPBOARD
    path('ooplist',views.OOPlist,name='ooplist'),
    path('oopwrite',views.OOPwrite,name='oopwrite'),   
    path('oopupdate/<int:no>',views.OOPupdate,name='oopupdate'),   
    path('oopdelete/<int:no>',views.OOPdelete,name='oopdelete'), 
    path('ooppost/<int:no>',views.OOPpost,name='ooppost'), 
    #DBMSBOARD
    path('dbmslist',views.DBlist,name='dbmslist'),
    path('dbmswrite',views.DBwrite,name='dbmswrite'),   
    path('dbmsupdate/<int:no>',views.DBupdate,name='dbmsupdate'),   
    path('dbmsdelete/<int:no>',views.DBdelete,name='dbmsdelete'), 
    path('dbmspost/<int:no>',views.DBpost,name='dbmspost'),
]
