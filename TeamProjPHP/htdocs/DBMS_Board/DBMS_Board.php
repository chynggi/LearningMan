<!DOCTYPE html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.css" rel="stylesheet">
	<style>
		.M_btn>a {
			text-decoration: none;
			color:#fff;
		}
		.M_btn>a:hover {
			color:#000;
		}
	</style> 


<script>
$(document).ready(function() {
    $('#example').DataTable({
    	stateSave: true,
    	"scrollX": true,
    	"language": {
            "decimal": ".",
            "thousands": ",",
            "info": "보이는페이지 _PAGE_ / _PAGES_",
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Korean.json"
        },
        "lengthMenu": [[5,10, 15, 20,50, -1], [5,10, 15,20, 50, "All"]]
    });
} );
</script>
</head>

<body>
<!-- ----------------------------------------body구분선------------------------------------------- -->   
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
  <header class="masthead" style="background-image: url('dbms3.jpg')">
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
 
	
      	<?php 
      	require_once ('BoardDaoFunction.php');
      	$result = selectAll();
      	?>

     <table id="example" class="table table-striped table-bordered"
		style="width: 100%" border="1">
		
		<thead>

			<th>번호</th>
			<th>제목</th>
			<th>사용자</th>
			<th>날짜</th>
			<th>수정</th>
			<th>삭제</th>

		</thead>
		<tbody>
            <?php
            // 반복문을 이용하여 result 변수에 담긴 값을 row변수에
            // 계속 담아서 row변수의 값을 테이블에 출력한다.
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
    			<td>
                <?=$row["board_no"]?>
                </td>
    			<td>
    			<a href='./board_detail.php?board_no=<?=$row["board_no"]?>'><?=$row["board_title"]?></a>     			
                </td>
    			<td>
                <?=$row["board_user"]?>
                </td>
    			<td>
                <?=$row["board_date"]?>
                </td>
                <td><a href='./board_update_form.php?board_no=<?=$row["board_no"]?>'>수정</a></td>
                <td><a href='./board_delete_form.php?board_no=<?=$row["board_no"]?>'>삭제</a></td>               
            </tr>
             <?php
            } // 와일루프 종료
            ?>
            
        </tbody>
        </table>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">         
          <p class="copyright text-muted">DBMS &copy; test 2019</p>
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