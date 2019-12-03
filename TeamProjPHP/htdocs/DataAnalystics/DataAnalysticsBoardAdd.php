<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>러닝맨 데이터 분석 게시글 작성</title>
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
		<form class = "form-horizontal" action = "./DataAnalysticsBoardAddAction.php" method = "post">		
		<table class="table table-bordered" align = "center" style="width:50%">
                <tr>
                    <td align = "center" bgcolor = "#3e5baa" style="width:10%"><font color = "white">작성자</font></td>
                    <td style="width:50%">
                    	<input class = "form-control" type="text" name="ID" id = "name">
                    </td>
                </tr>               
                <tr>
                    <td align = "center" bgcolor = "#3e5baa" style="width:10%"><font color = "white">비밀번호</font></td>
                    <td style="width:50%">
                    	<input class = "form-control" type="password" name="PW" id = "password">
                    </td>
                </tr>
                <tr>
                    <td align = "center" bgcolor = "#3e5baa" style="width:10%"><font color = "white">제목</font></td>
                    <td style="width:50%">
                    	<input class = "form-control" type="text" name="Title" id = "title" placeholder = "제목을 입력하시오">
                    </td>
                </tr> 
                <tr>
                    <td align = "center" bgcolor = "#3e5baa" style="width:10%"><font color = "white">내용</font></td>
                    <td style="width:50%">
                    	<textarea class = "form-control" name = "Content" id = "content" rows = "5" cols = "50" placeholder = "내용을 입력하시오"></textarea>
                    </td>
                </tr> 
                
                <tr>
                	<td align = "center" colspan = "2">
                		&nbsp;&nbsp;&nbsp;
            			<button class="btn btn-primary2" type="submit">완료</button>
            			&nbsp;&nbsp;&nbsp;
            			<button class = "btn btn-primary2" type = "reset">삭제</button>
						&nbsp;&nbsp;&nbsp;        			
            			<a class="btn btn-primary2" href="./DataAnalysticsBoardList.php">취소</a>
                	</td>
                </tr>
			</table>	
		</form>
	
		<script type = "text/javascript">
			$("#PW").change(function(){ // id일 경우 # class일 경우 .
				checkPassword($('#PW').val());
			});
			$("#Title").change(function(){
				checkTitle($('#Title').val());
			});
			$("#Content").change(function(){
				checkContent($('#Content').val());
			});
			$("#ID").change(function(){
				checkName($('#ID').val());
			});

			function checkPassword(PW){
				if(PW.length < 5){
					alert("비밀번호를 5자 이상 설정하시오");
					$('#PW').val('').focus();
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

			function checkContent(Content){
				if(Content.length < 2){
					alert("내용을 2자 이상 설정하시오");
					$('#Content').val('').focus();
					return false;
				} else {
					return true;
				}
			}

			function checkName(ID){
				if(ID.length < 2){
					alert("작성자명을 2자 이상 설정하시오");
					$('#ID').val('').focus();
					return false;
				} else {
					return true;
				}
			}		
		</script>
		<br>		
	</body>
</html>