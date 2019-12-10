<!DOCTYPE html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>OOP 게시판</title>

  <!-- Bootstrap core CSS -->
  <link href="../static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../static/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="../static/css/clean-blog.css" rel="stylesheet">
  <link href="../static/css/login.css" rel="stylesheet">
  <link href="../static/css/member.css" rel="stylesheet">
  <link href="../static/css/OOP.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="../static/index.php">Learning Man</a>
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
            <?php
            session_start();
            if(!isset($_SESSION['id'])){
            ?>
            <p class="M_btn">
            	<a class="col-lg-8 col-md-10 mx-auto" href="../login/login.php">로그인</a>
            	<a class="col-lg-8 col-md-10 mx-auto" href="./member/member.php">회원가입</a>            	
            </p>
            <?php     
            }else {
                $user_name = $_SESSION['name'];
            ?>
            <p class="M_btn">
            	<a class="col-lg-8 col-md-10 mx-auto"><strong><?php echo "$user_name"; ?></strong>님 환영합니다.</a>
            	<a class="col-lg-8 col-md-10 mx-auto" href="./member/member_update_form.php">본인정보 수정</a>           	
            	<a class="col-lg-8 col-md-10 mx-auto" href="../login/logout.php">로그아웃</a>           	
            </p>
            <?php
            }
            ?>
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
	
	 <?php
            require_once('../static/static/BoardDAOFunction.php');
            $Rows = selectAll('OOPBOARD');
        ?>
	
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
				OOP
            </h2>
            <h3 class="post-subtitle" style="margin-bottom: 80px;">
              	객체지향 프로그래밍
            </h3>
        </div>
        <hr>
		<div class="container">
			<form class = "form-horizontal" action = "../static/static/BoardInsertAction.php" method = "post">		
				<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-default">제목</span>
					</div>
        			<input type="text" id="title" name = "board_title" class="form-control"
        				aria-label="Sizing example input"
        				aria-describedby="inputGroup-sizing-default">
				</div>
				<div class="input-group">
    				<div class="input-group-prepend">
    					<span class="input-group-text">내용</span>
    				</div>
  					<textarea rows="20" id = "content" name = "board_content" class="form-control" aria-label="With textarea"></textarea>
  				</div>
				<input type="hidden" name = "board_id" value=" <?=$_SESSION["id"]?> ">
				<input type="hidden" name = "dbname" value="OOPBOARD">
				<button class="btn btn-success" type="submit">저장</button>
				<a class="btn btn-secondary" href="./ServerSideBoardList.php"> 리스트로 돌아가기</a>
			</form>
		</div>
	</div>
  </div>
        
        
        
  <!-- Footer -->
  <footer style="background: #aaa;>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="../static/vendor/jquery/jquery.min.js"></script>
  <script src="../static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="../static/js/clean-blog.min.js"></script>
</body>
</html>