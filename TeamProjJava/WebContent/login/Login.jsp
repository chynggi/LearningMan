<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Learning Man</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="../css/clean-blog.css" rel="stylesheet">
  <link href="../css/login.css" rel="stylesheet">
  <link href="../css/member.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="../index.php">Learning Man</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="OOP_Board/oop_B_index.php">OOP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">DBMS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Server Side</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Frame Works</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Data Analystics</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <span class="subheading">Team Project</span>
            <h1>Learning Man</h1>
            
            <%if(session.getAttribute("name") == null || session.getAttribute("name").equals(""))
            	{%>
            <p class="M_btn">
            	<a class="col-lg-8 col-md-10 mx-auto" href="./login/login.php">로그인</a>
            	<a class="col-lg-8 col-md-10 mx-auto" href="../member/member.php">회원가입</a>            	
            </p>
            <%}
            else { String user_name = (String)session.getAttribute("name");
            	%>
            
            
            <p class="M_btn">
            	<a class="col-lg-8 col-md-10 mx-auto"><strong><%=user_name%></strong>님 환영합니다.</a>
            	<a class="col-lg-8 col-md-10 mx-auto" href="../member/member_update_form.php">본인정보 수정</a>           	
            	<a class="col-lg-8 col-md-10 mx-auto" href="./login/logout.php">로그아웃</a>           	
            </p>
            <%
            }
            %>
          </div>
        </div>
      </div>
    </div>
  </header>
	<style>
		.M_btn>a {
			text-decoration: none;
			color:#fff;
		}
        .M_btn>p {
			text-decoration: none;
			color:#fff;
		}
		.M_btn>a:hover {
			color:#000;
		}
	</style>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
				로그인
            </h2>
        </div>
        <hr>
        <div class="loginForm_box">
        	<form name="loginForm" action="./login_action.php" method="post">
        		<div class="ID_form">
        			<input class="id" type="text" name="id" placeholder="&nbsp;&nbsp;아이디">
        		</div>
        		<div class="PW_form">
        			<input class="pw" type="password" name="pw" placeholder="&nbsp;&nbsp;비밀번호">
        		</div>
        		<div class="subM_form">
        			<input class="loginBtn" type="submit" value="로그인">
        		</div>
			</form>
        </div>
      </div>
	</div>
	</div>
<jsp:include page="../static/footer.html"></jsp:include>
