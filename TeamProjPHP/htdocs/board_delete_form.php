<!DOCTYPE html>
<html>
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

<script>
		$(document).ready(function() {			
			$('#head_div').load('header.php');
		});
  		</script>

</head>

<!-- ----------------------------------------body구분선------------------------------------------- -->

<body>
    	
      	<?php
    // board_list.php 에서 넘어온 글 번호 저장 및 출력
    $board_no = $_GET["board_no"];
    ?>
        
         <!-- board_delete_action.php 페이지로 POST 방식을 이용하여 값 전송 -->
	<form action="./board_delete_action.php" method="post">

		<table class="table table-bordered" style="width: 100%">
			<tr>
				<td>글 비밀 번호를 입력하세요.</td>
			</tr>
			<tr>
				<td><input type="text" name="board_pw"> <input type="hidden"
					name="board_no" value="<?php echo $board_no ?>"></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary" type="submit" />글 삭제 버튼</td>
			</tr>
		</table>
	</form>
	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Custom scripts for this template -->
	<script src="js/clean-blog.min.js"></script>

</body>
</html>