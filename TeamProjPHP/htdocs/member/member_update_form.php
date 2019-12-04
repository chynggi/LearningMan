<!DOCTYPE html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>회원정보수정</title>

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
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
				본인정보 수정
            </h2>
        </div>
        <hr>
        <?php 
            $user_id = $_SESSION['id'];
            $user_pw = $_SESSION['pw'];
            $user_name = $_SESSION['name'];
            $user_phone = $_SESSION['phone'];
            $user_date = $_SESSION['date'];
        ?>
        
        <div class="memberForm_box">
        	<form name="memberForm" action="./member_update_action.php" onSubmit="return insertOk(this)" method="post">
        		<div class="ID_form">
        			<input class="id" id="id" type="hidden" name="memId" value="<?php echo "$user_id"; ?>">
        			<p><?php echo "$user_id"; ?></p>
        		</div>
        		<div class="PW_form">
        			<input class="pw" id="pw" type="password" name="memPw" placeholder="&nbsp;&nbsp;비밀번호">
        		</div>
        		<div class="PWC_form">
        			<input class="pwc" id="pwc" type="password" name="memPwc" placeholder="&nbsp;&nbsp;비밀번호확인">
        		</div>
        		<div class="NAME_form">
        			<input class="name" id="name" type="text" name="memName" value="<?php echo "$user_name"; ?>">
        		</div>
        		<div class="PN_form">
        			<input class="phone" id="phone" type="text" name="memPhone" value="<?php echo "$user_phone"; ?>">
        		</div>
        		<div class="date_form">
        			<input class="date" id="date" type="hidden" name="memDate" value="<?php echo "$user_date"; ?>">
        			<p><?php echo "$user_date"; ?></p>
        		</div>
        		<div class="subM_form">
        			<input class="upBtn" type="submit" value="수정">
        			<button type="button" onclick="location.href='./member_delete_form.php'" class="deBtn">회원탈퇴</button>
        		</div>
			</form>
        </div>
      </div>
	</div>
	
	
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
    	$("#id").change(function(){
    		checkId($('#id').val());
    	});
    	$("#pw").change(function(){
    		checkPw($('#pw').val());
    		formCheck($('#pw').val());
    	});
    	$("#name").change(function(){
    		checkName($('#name').val());
    	});
    	$("#phone").change(function(){
    		checkPhone($('#phone').val());
    	});
    	
    	//
    	function insertOk(frm) {
    		var f = document.memberForm;
    		if(f.memId.value == ""){
    			alert("아이디를 입력해 주세요.");
    			$('#id').val('').focus();
    			return false;
    		}else if(f.memPw.value == ""){
    			alert("비밀번호를 입력해 주세요.");
    			$('#pw').val('').focus();
    			return false;
    		}else if(frm.memPw.value !== frm.memPwc.value){
    			alert("비밀번호를 확인하세요.");
    			$('#pw').val('').focus();
    			$('#pwc').val('').focus();
    			return false;
    		}else if(f.memName.value == ""){
    			alert("이름을 입력해 주세요.");
    			$('#name').val('').focus();
    			return false;
    		}else if(f.memPhone.value == ""){
    			alert("휴대폰 번호를 입력해 주세요.");
    			$('#phone').val('').focus();
    			return false;
    		}else{
    			return true;
    		}
    	}
    	function checkId(id) {
    		var f = document.memberForm;
    		if(id.length < 4){
    			alert("아이디는 4자 이상이여야 합니다. ");
    			$('#id').val('').focus();
    			return false;
    		}else{
    			return true;
    		}
    	}
    	
    	function checkPw(pw) {
    		var f = document.memberForm;
    		if(pw.length < 4){
    			alert("비밀번호는 4자 이상 입력하여야 합니다.");
    			$('#pw').val('').focus();
    			return false;
    		}else{
    			return true;
    		}
    	}
    
    	function checkName(name) {
    		var f = document.memberForm;
    		if(name.length < 2){
    			alert("이름은 2자 이상 입력하여야 합니다.");
    			$('#name').val('').focus();
    			return false;
    		}else{
    			return true;
    		}
    	}
    
    	function checkPhone(phone) {
    		var f = document.memberForm;
    		if(phone.length < 10){
    			alert("휴대폰 번호은 10자 이상 입력하여야 합니다.");
    			$('#phone').val('').focus();
    			return false;
    		}else{
    			return true;
    		}
    	}
	</script>
        
        
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>
</body>
</html>