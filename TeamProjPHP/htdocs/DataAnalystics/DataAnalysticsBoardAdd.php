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
		<?php
        include "../static/header.php"
        ?>
		<?php 
        $id = $_SESSION['id'];
        ?>
		<hr>
		<form class = "form-horizontal" action = "../static/BoardInsertAction.php" method = "post">		
		<table class="table table-bordered" align = "center" style="width:50%">
                <tr>
                    <td align = "center" bgcolor = "#0085a1" style="width:10%"><font color = "white">작성자</font></td>
                    <td style="width:50%">
                    	<input type="hidden" name = "board_id" value=" value="<?php echo "$id"; ?>">
                   		<p><?php echo "$id"; ?></p>
						<input type="hidden" name = "dbname" value="DABOARD">                     
                    </td>
                </tr>               
                <tr>
                    <td align = "center" bgcolor = "#0085a1" style="width:10%"><font color = "white">제목</font></td>
                    <td style="width:50%">
                    	<input class = "form-control" type="text" id="title" name = "board_title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder = "제목을 입력하세요">
                    </td>
                </tr> 
                <tr>
                    <td align = "center" bgcolor = "#0085a1" style="width:10%"><font color = "white">내용</font></td>
                    <td style="width:50%">
                    	<textarea class = "form-control" name = "board_content" id = "content" rows = "5" cols = "50" placeholder = "질문 내용을 입력하세요" aria-label="With textarea"></textarea>
                    </td>
                </tr> 
                
                <tr>
                	<td align = "center" colspan = "2">
                		<input type="hidden" name = "board_id" value=" <?=$_SESSION["id"]?> ">
						<input type="hidden" name = "dbname" value="DABOARD"> 
                		&nbsp;&nbsp;&nbsp;
            			<button class="btn btn-primary2" type="submit">완료</button>
            			&nbsp;&nbsp;&nbsp;
            			<button class = "btn btn-primary2" type = "reset">삭제</button>
						&nbsp;&nbsp;&nbsp;        			
            			<a class="btn btn-primary2" href="./DataAnalystics/DataAnalysticsBoardList.php">취소</a>
                	</td>
                </tr>
			</table>	
		</form>
	
		<script type = "text/javascript">
			$("#title").change(function(){
				checkTitle($('#title').val());
			});
			$("#content").change(function(){
				checkContent($('#content').val());
			});
			
			function checkTitle(title){
				if(title.length < 2){
					alert("제목을 2자 이상 설정하시오");
					$('#title').val('').focus();
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
		</script>
		<br>		
	</body>
</html>