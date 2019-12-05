<%@ page language='java' contentType="text/html; charset=UTF-8" pageEncoding="UTF-8" %>

<!DOCTYPE html>
<html lang="ko">

<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>게시판</title>

  <!-- Bootstrap core CSS -->
  <link href="../static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../static/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="../static/css/clean-blog.min.css" rel="stylesheet">
  
 <style>
.M_btn>a {
	text-decoration: none;
	color: #fff;
}
.M_btn>a:hover {
	color: #000;
}
</style>
  
</head>

<body>



  <!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="font-family:GyeonggiBatangOTF;">
		<div class="container">
			<a class="navbar-brand" href="index.jsp">Learning Man</a>
			<button class="navbar-toggler navbar-toggler-right" type="button"
				data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu <i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="index">About</a>
					</li>
					<li class="nav-item"><a class="nav-link"
						href="OOP_Board/oop_B_index.php">OOP</a></li>
					<li class="nav-item"><a class="nav-link" href="board_list.jsp">DBMS</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="contact">Server
							Side</a></li>
					<li class="nav-item"><a class="nav-link" href="board_s.jsp">Frame
							Works</a></li>
					<li class="nav-item"><a class="nav-link" href="contact">Data
							Analystics</a></li>
				</ul>
			</div>
		</div>
	</nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('../img/FR.png')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<p class="M_btn"  >
							<a class="col-lg-8 col-md-10 mx-auto" href="loginorReg.jsp" style="font-family:">로그인</a> 
							<a class="col-lg-8 col-md-10 mx-auto" href="loginorReg.jsp" style="font-family:">회원가입</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</header>

  <!-- Main Content -->
  <div class="container" >
      <div class="row">
      <form method="post" action="./FRBoard/new.do" style=" width:100%;height: 100%; ">
		<table class="table table-striped" style="text-align: center; ">
			<thead>
				<tr>
					<th colspan="2" style="border-radius: 12px; border: none; color:#000;text-align: center;">글작성</th>		
				</tr>
			</thead>
		
			<tbody>
					<tr >
						<td style="color:#000; border: none; border-radius: 0px 0px 0px 0px;">제목 : </td>
						<td>
						<input type="text" style="width:100%;height: 40px; border: none; border-radius: 0px;" class="form-control" 
							   placeholder="  글 제목" name="title" maxlength="100"></td>
					</tr>
					<tr>
						<td >내용 : </td>
						<td >
						<textarea class="farm-control" placeholder="  글 내용" name="content" maxlength="2048" style="width:100%;height: 350px;border-radius: 0px;"></textarea>
						</td>
					</tr>
				</tbody>				
		</table>
		<input type="hidden" name="id" value="null">
			<form>
				<input type="submit" class="btn btn-primary pull-right" style="border-radius: 12px; border: none; background-color: #000; font-family:GyeonggiBatangOTF" value="작성">
				<input type="button" class="btn btn-primary pull-right" style="border-radius: 12px; border: none; background-color: #000; font-family:GyeonggiBatangOTF" value="돌아가기" onClick="history.go(-1)">
	     	</form>
      </form>

       


        </div>
  </div>

  <hr>
    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>
</html>