<!DOCTYPE html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Learning Man</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for     this template -->
  <link href="css/clean-blog.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">
  <link href="css/member.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Learning Man</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">About</a>
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
				머신러닝반 팀프로젝트
            </h2>
            <h3 class="post-subtitle" style="margin-bottom: 80px;">
              	2019 머신러닝반 교육커리큘럼 소개
            </h3>
            <a href="#" class="OOP_box">
            	<div class="OOP_container">
            		<p class="OOP_java">
            			<img src="./img/OOP_java.png" art="OOP_java이미지" title="OOP_java">
            		</p>
            		<p class="OOP_python">
            			<img src="./img/OOP_python.png" art="OOP_python이미지" title="OOP_python">
            		</p>
            		<p class="OOP_txt">
            			<img src="./img/OOP_txt.png" art="OOP이미지" title="OOP">
            		</p>
            	</div>
            </a>
            <a href="#" class="DBMS_box">
            	<div class="DBMS_container">
            		<p class="DBMS_img">
            			<img src="./img/DBMS_img.jpg" art="DBMS이미지" title="DBMS">
            		</p>
            		<p class="DBMS_txt">
            			<img src="./img/DBMS_txt.png" art="DBMS이미지" title="DBMS">
            		</p>
            	</div>
            </a>
            <a href="#" class="sevSi_box">
            	<div class="sevSi_container">
          			<p class="sevSi_jsp">
            			<img src="./img/sev_si_jsp.png" art="ServerSidejsp이미지" title="ServerSidejsp">
            		</p>
	        		<p class="sevSi_php">
            			<img src="./img/sev_si_php.png" art="ServerSide php이미지" title="ServerSidephp">
            		</p>
            		<p class="sevSi_img">
            			<img src="./img/sev_si_img.png" art="ServerSide이미지" title="ServerSide">
            		</p>
            		<p class="sevSi_txt">
            			<img src="./img/serverside_txt.png" art="ServerSidetxt이미지" title="ServerSidetxt">
            		</p>
            	</div>
            </a>
            <a href="#" class="FW_box">
            	<div class="FW_container">
          			<p class="FW_BtStrp">
            			<img src="./img/FW_BtStrp.png" art="frameworksbootstrap이미지" title="frameworksbootstrap">
            		</p>
          			<p class="FW_django">
            			<img src="./img/FW_django.png" art="frameworksdjango이미지" title="frameworksdjango">
            		</p>
          			<p class="FW_jQurey">
            			<img src="./img/FW_jQurey.png" art="frameworksjQurey이미지" title="frameworksjQurey">
            		</p>
          			<p class="FW_Mybatis">
            			<img src="./img/FW_Mybatis.png" art="frameworksMybatis이미지" title="frameworksMybatis">
            		</p>
          			<p class="FW_Spring">
            			<img src="./img/FW_Spring.png" art="frameworksSpring이미지" title="frameworksSpring">
            		</p>
            		<p class="FW_txt">
            			<img src="./img/FW_txt.png" art="frameworkstxt이미지" title="frameworkstxt">
            		</p>
            	</div>
            </a>
            <a href="#" class="DA_box">
            	<div class="DA_container">
          			<p class="DA_img1">
            			<img src="./img/DA_1.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
          			<p class="DA_img2">
            			<img src="./img/DA_2.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
          			<p class="DA_img3">
            			<img src="./img/DA_3.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
          			<p class="DA_img4">
            			<img src="./img/DA_4.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
          			<p class="DA_img5">
            			<img src="./img/DA_5.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
          			<p class="DA_img6">
            			<img src="./img/DA_6.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
            		<p class="DA_img7">
            			<img src="./img/DA_txt.png" art="Data Analyticstxt이미지" title="Data Analyticstxt">
            		</p>            		
            	</div>
            </a>
        </div>
      </div>
  	</div>
  </div>
        
        
        
        
  <!-- Footer -->
  <footer>
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
  <script src="vendor/jquery/jquery.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript" charset="utf-8"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/contents_any.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>
