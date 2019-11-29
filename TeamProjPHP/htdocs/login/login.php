<!DOCTYPE html>
<html lang="ko">

<head>
  <title>러닝맨 로그인</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
  <link href="./css/boost.css" rel='stylesheet' type='text/css'>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/clean-blog.min.js"></script>
  
  <link href="../css/clean-blog.css" rel="stylesheet">
  <link href="../css/login.css" rel="stylesheet">
  <link href="../css/member.css" rel="stylesheet">
  
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script>
		$(document).ready(function() {			
			$('#head_div').load('../header.php');
		});
  </script>

</head>

<body>
  <div id="head_div"></div>
  <hr>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">        
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

</body>
</html>