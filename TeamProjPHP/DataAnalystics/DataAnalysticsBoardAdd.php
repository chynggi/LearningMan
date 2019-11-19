<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>게시글 작성</title>
		<link rel="stylesheet" href="./css/bootstrap.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel = "stylesheet" href = "./css/bootstrap.css">
		<script type="text/javascript" src="./js/bootstrap.js"></script>
	
		<link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
		<link href="./css/boost.css" rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    		
	</head>
	<body>
		<form class = "form-horizontal" action = "./boardAddAction.php" method = "post">
		
		<table class="table table-bordered" align = "center" style="width:50%">
                <tr>
                    <td align = "center" bgcolor = "#3e5baa" style="width:10%"><font color = "white">작성자</font></td>
                    <td style="width:50%">
                    	<input class = "form-control" type="text" name="boardUser" id = "name" placeholder = "작성자를 입력하시오">
                    </td>
                </tr>               
                <tr>
                    <td align = "center" bgcolor = "#3e5baa" style="width:10%"><font color = "white">비밀번호</font></td>
                    <td style="width:50%">
                    	<input class = "form-control" type="password" name="boardPw" id = "password" placeholder = "비밀번호를 입력하시오">
                    </td>
                </tr>
                <tr>
                    <td align = "center" bgcolor = "#3e5baa" style="width:10%"><font color = "white">제목</font></td>
                    <td style="width:50%">
                    	<input class = "form-control" type="text" name="boardTitle" id = "Title" placeholder = "제목을 입력하시오">
                    </td>
                </tr> 
                <tr>
                    <td align = "center" bgcolor = "#3e5baa" style="width:10%"><font color = "white">내용</font></td>
                    <td style="width:50%">
                    	<textarea class = "form-control" name = "boardContent" id = "content" rows = "5" cols = "50" placeholder = "내용을 입력하시오"></textarea>
                    </td>
                </tr> 
                
                <tr>
                	<td align = "center" colspan = "2">
                		&nbsp;&nbsp;&nbsp;
            			<button class="btn btn-primary2" type="submit">완료</button>
            			&nbsp;&nbsp;&nbsp;
            			<button class = "btn btn-primary2" type = "reset">지우기</button>
						&nbsp;&nbsp;&nbsp;
            			<a class="btn btn-primary2" href="./DataAnalysticsBoardList.php">취소</a>
                	</td>
                </tr>
			</table>	
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
				if(password.length < 5){
					alert("비밀번호를 5자 이상 설정하시오");
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
		<br>		
	</body>

<?php
?>
</html>