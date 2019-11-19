<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>데이터 분석 게시글 입력</title>
		<link rel="stylesheet" href="./css/bootstrap.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel = "stylesheet" href = "./css/bootstrap.css">
		<script type="text/javascript" src="./js/bootstrap.js"></script>
	</head>

	<body>
		<h1 class = "display-4">DataAnalysticsBoardForm.php</h1>
	
		<form class = "form-horizontal" action = "./board_add_action.php" method = "post">
			<div class = "form-group">
				<label for = "exampleInputPassword1" class = "col-sm-2 control-label">비밀번호</label>
				<div class = "col-sm-10">
					<input class = "form-control" name = "boardPw" id = "password" type = "password" placeholder = "비밀번호를 입력하시오">
				</div>
			</div>
			<div class = "form-group">
				<label for = "exampleInputTitle1" class = "col-sm-2 control-label">제목</label>
				<div class = "col-sm-10">
					<input class = "form-control" name = "boardTitle" id = "Title" type = "text" placeholder = "제목을 입력하시오">
				</div>
			</div>
			<div class = "form-group">
				<label for = "exampleInputContent1" class = "col-sm-2 control-label">내용</label>
				<div class = "col-sm-10">
					<textarea class = "form-control" name = "boardContent" id = "content" rows = "5" cols = "50" placeholder = "내용을 입력하시오"></textarea>
				</div>
			</div>
			<div class = "form-group">
				<label for = "exampleInputName1" class = "col-sm-2 control-label">작성자</label>
				<div class = "col-sm-10">
					<input class = "form-control" name = "boardUser" id = "name" type = "text" placeholder = "작성자를 입력하시오">
				</div>
			</div>
			
			<div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button class = "btn btn-primary" type = "submit" value = "완료">완료</button>
				&nbsp;&nbsp;&nbsp;
				<button class = "btn btn-primary" type = "reset" value = "지우기">지우기</button>
				&nbsp;&nbsp;&nbsp;
				<a class = "btn btn-primary" href = "./DataAnalysticsBoardList.php">리스트 이동</a>
			</div>
		</form>
	
		<script type = "text/javascript">
			$("#password").change(function(){ // id일 경우 # class일 경우 .
				checkPassword($('#password').val());
			});
			$("#Title").change(function(){
				checkTitle($('#Title').val());
			});
			$("#content").change(function(){
				checkContent($('#content').val());
			});
			$("#name").change(function(){
				checkName($('#name').val());
			});

			function checkPassword(password){
				if(password.length < 4){
					alert("비밀번호를 4자 이상 설정하시오");
					$('#password').val('').focus();
					return false;
				} else {
					return true;
				}
			}

			function checkTitle(Title){
				if(Title.length < 2){
					alert("제목을 2자 이상 설정하시오");
					$('#Title').val('').focus();
					return false;
				} else {
					return true;
				}
			}

			function checkContent(content){
				if(content.length < 2){
					alert("내용을 2자 이상 설정하시오");
					$('#content').val('').focus();
					return false;
				} else {
					return true;
				}
			}

			function checkName(name){
				if(name.length < 2){
					alert("작성자명을 2자 이상 설정하시오");
					$('#name').val('').focus();
					return false;
				} else {
					return true;
				}
			}
		
		</script>
		
	</body>

<?php
?>
</html>