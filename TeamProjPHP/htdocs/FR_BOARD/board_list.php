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
  <link href="../static/css/bootstrap.css" rel='stylesheet' type='text/css'>
  <link href="../static/css/boost.css" rel='stylesheet' type='text/css'>

  <link href="../static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../static/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="../static/css/clean-blog.css" rel="stylesheet">
    
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
            <a class="nav-link" href="../index.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../OOP_Board/oop_B_index.php">OOP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../DBMS_Board/board_list.php">DBMS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Server Side</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Frame Works</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./DataAnalysticsMain.php">Data Analystics</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('./dbms3.png')">
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
            	<a class="col-lg-8 col-md-10 mx-auto" href="../member/member.php">회원가입</a>            	
            </p>
            <?php     
            }else {
                $user_name = $_SESSION['name'];
            ?>
            <p class="M_btn">
            	<a class="col-lg-8 col-md-10 mx-auto"><strong><?php echo "$user_name"; ?></strong>님 환영합니다.</a>
            	<a class="col-lg-8 col-md-10 mx-auto" href="../member/member_update_form.php">본인정보 수정</a>           	
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

<?php 
      	require_once ('../static/BoardDAOFunction.php');
      	$Rows = selectAll('DBMSBOARD');
      	?>
<div class="container">   	
<table id="example" class="table table-striped table-bordered"
		style="width: 100%" border="1">
		
		<thead>

			<th>번호</th>
			<th>제목</th>
			<th>사용자</th>
			<th>날짜</th>
			
		</thead>
		<tbody>
            <?php
            // 반복문을 이용하여 result 변수에 담긴 값을 row변수에
            // 계속 담아서 row변수의 값을 테이블에 출력한다.
            foreach($Rows as $key => $val){
            ?>
            <tr>
    			<td>
                <?=$val["NO"]?>
                </td>
    			<td>
    			<a href='./board_detail.php?board_no=<?=$val["NO"]?>'><?=$val["TITLE"]?></a>     			
                </td>
    			<td>
                <?=$val["ID"]?>
                </td>
    			<td>
                <?=$val["XDATE"]?>
                </td>         
            </tr>
             <?php
            } // 와일루프 종료
            ?>
            
        </tbody>
        
        </table>
			<a href="DBMSBoard_Insert.php" class="btn btn-primary float-right"
					style="border-radius: 12px; border: none; background-color: #382825; 
					font-size: 15px; font-family: GyeonggiBatangOTF">글쓰기</a>
  </div>  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
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