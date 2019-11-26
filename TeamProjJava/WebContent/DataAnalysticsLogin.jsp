 <%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>

<!DOCTYPE html>
<html>

<head>
  <title>러닝맨 데이터 분석 로그인</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="css/clean-blog.min.css" rel="stylesheet">  
</head>

<body>
<jsp:include page="header.jsp"></jsp:include>
 <div class="container" align = "center">
  <div class="col-lg-4"></div>
  <div class="col-lg-4">
   <div class="jumbotron" style="padding-top: 20px;">
   <form method="post" action="loginAction.jsp">
    <h3 style="text-align: center;"> 로그인 </h3>
    <div class="form-group">
     <input type="text" class="form-control" placeholder="아이디" name="ID" maxlength="20">
    </div>    
    <div class="form-group">
     <input type="password" class="form-control" placeholder="비밀번호" name="PW" maxlength="20">
    </div>
    <input type="submit" class="btn btn-primary form-control" value="로그인">
   </form>
  </div>
 </div>
</div>
<jsp:include page="footer.jsp"></jsp:include>
</body>
</html>