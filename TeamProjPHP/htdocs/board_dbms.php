<!DOCTYPE html>
<html lang="ko">

<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>게시판</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
	type="text/css">
<link
	href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="css/clean-blog.css" rel="stylesheet">

<?php 

    $dbhost = "locallhost";     // 호스트 주소(localhost, 120.0.0.1)
    $dbName = "dbmsboard";      // 데이타 베이스(DataBase) 이름
    $dbUser = "team";          // DB 아이디
    $dbPass = "team";        // DB 패스워드
    $dbChar = "utf8";            // 문자 인코딩
    
    $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass); // PDO 객체 생성
    $statement = $pdo -> query("SELECT CURDATE() AS date FROM TEAM");
    $row = $statement -> fetch(PDO::FETCH_ASSOC);
    echo htmlentities($row['date']);    
    
?>


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
  <header class="masthead" style="background-image: url('img/dbms3.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Learning Man</h1>
            <p class="M_btn">
            	<a class="col-lg-8 col-md-10 mx-auto" href="loginorReg.php">로그인</a>
            	<a class="col-lg-8 col-md-10 mx-auto" href="loginorReg.php">회원가입</a>            	
            </p>
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
		.M_btn>a:hover {
			color:#000;
		}
	</style>
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
        
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>
</html>
