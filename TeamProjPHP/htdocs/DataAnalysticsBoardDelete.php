<!DOCTYPE html>
<html>
    <head>
    	<title>러닝맨 데이터 분석 게시판 게시글 삭제</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/bootstrap.css">
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        
        <link rel="stylesheet" href="./css/bootstrap.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel = "stylesheet" href = "./css/bootstrap.css">
		<script type="text/javascript" src="./js/bootstrap.js"></script>
	
		<link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
		<link href="./css/boost.css" rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
        
        <script>
		$(document).ready(function() {			
			$('#head_div').load('header.php');
		});
  		</script>
        
    </head>
    <body>
    <div id="head_div"></div>
    	<?php 
            session_start();
            $no      = $_SESSION["NO"];
            $title   = $_SESSION["Title"];
            $content = $_SESSION["Content"];
            echo $no."번째 글 삭제 페이지<br>";
        ?>   	
        <form action="./DataAnalysticsBoardDeleteAction.php" method="post">    
            <table class="table table-bordered" align = "center" style="width:55%">
                <td align = "center" colspan = "2">
        		삭제한 게시글은 복구 할 수 없습니다.
        		</td>
                <tr>
                	<td align = "center" bgcolor = "#0085a1" style="width:10%"><font color = "white">번호</font></td>       			
        			<td style="width:50%">
        			<input class="no" id="no" type="hidden" name="no" value="<?php echo "$no"; ?>">
        			</td>
        		</tr>
        		<tr>   
        			<td align = "center" bgcolor = "#0085a1" style="width:10%"><font color = "white">제목</font></td>
                    <td style="width:50%"> 		
        			<input class="title" id="title" type="hidden" name="Title" value="<?php echo "$title"; ?>">
        			</td>
        		</tr>
        		<tr>
        			<td align = "center" bgcolor = "#0085a1" style="width:10%"><font color = "white">내용</font></td>
                    <td style="width:50%">
        			<input class="content" id="content" type="hidden" name="Content" value="<?php echo "$content"; ?>">
        			</td>
        		</tr>           		 		
        		<td align = "center" colspan = "2">
        			<button class="btn btn-primary" type="submit">삭제</button>
        			<a class="btn btn-primary" href="./DataAnalysticsBoardList.php">취소</a>
				</td>				
            </table>           
        </form>      
    </body>
</html>