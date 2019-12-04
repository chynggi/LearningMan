<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
  <link href="./css/boost.css" rel='stylesheet' type='text/css'>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="css/clean-blog.css" rel="stylesheet">
    
  <style type="text/css">
    .jumbotron {
	background-image: url('./images/jumbotronBackground.jpg');
	background-size: cover;
	text-shadow: black 0.5em 0.5em 0.5em;
	color: black;
    }
  </style>
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
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div id="head_div"></div>
    <div class="container">
      <a class="navbar-brand" href="index.html">Learning Man</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="./index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="./OOP_Board/oop_B_index.php">객체 지향 프로그래밍</a></li>
          <li class="nav-item"><a class="nav-link" href="#">데이터베이스</a></li>
          <li class="nav-item"><a class="nav-link" href="#">서버 사이드</a></li>
          <li class="nav-item"><a class="nav-link" href="#">프레임 워크</a></li>
          <li class="nav-item"><a class="nav-link" href="./DataAnalysticsMain.php">데이터 분석</a></li>									
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <span class="subheading">Team Project</span>
            <h1>Learning Man</h1>
            <?php
            session_start();
            if(!isset($_SESSION['id'])){
            ?>
            <p class="M_btn">
            	<a class="col-lg-8 col-md-10 mx-auto" href="./login/login.php">로그인</a>
            	<a class="col-lg-8 col-md-10 mx-auto" href="./member/member.php">회원가입</a>            	
            </p>
            <?php     
            }else {
                $user_name = $_SESSION['name'];
            ?>
            <p class="M_btn">
            	<a class="col-lg-8 col-md-10 mx-auto"><strong><?php echo "$user_name"; ?></strong>님 환영합니다.</a>
            	<a class="col-lg-8 col-md-10 mx-auto" href="./member/member_update_form.php">본인정보 수정</a>           	
            	<a class="col-lg-8 col-md-10 mx-auto" href="./login/logout.php">로그아웃</a>           	
            </p>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>
</html>