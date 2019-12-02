<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>러닝맨 데이터 분석 게시판 게시글 수정</title>
        <link rel="stylesheet" href="./css/bootstrap.css">        
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<meta name="description" content="">
  		<meta name="author" content="">
  		
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
  		<hr>
        <?php 
  		session_start();
            $id = $_SESSION['id'];
            $no = $_SESSION['no'];
            $title = $_SESSION['Title'];
            $content = $_SESSION['Content'];
        ?>
        <hr>
        <form action="./DataAnalysticsBoardUpdateAction.php" method="post" align = "center">
            <table class="table table-bordered" style="width:50%">
            	<tr>
            		<td align = "center" bgcolor = "#0085a1" style="width:10%"><font color = "white">번호</font></td>
                    <td style="width:50%">
                    <input class="no" id="no" type="hidden" name="no" value="<?php echo "$no"; ?>">
                   	<p><?php echo "$no"; ?></p>                       
                	</td>
                </tr>
            	<tr>
            		<td align = "center" bgcolor = "#0085a1" style="width:10%"><font color = "white">작성자</font></td>
                    <td style="width:50%">
                    <input class="id" id="id" type="hidden" name="id" value="<?php echo "$id"; ?>">
                   	<p><?php echo "$id"; ?></p>                       
                	</td>
                </tr>                
                <tr>
            		<td align = "center" bgcolor = "#0085a1" style="width:10%"><font color = "white">제목</font></td>
                    <td style="width:50%">
                    <input class="title" id="title" type="text" name="Title" value="<?php echo "$title"; ?>">
                   	<p><?php echo "$title"; ?></p>                       
                	</td>
                </tr>
                <tr>
            		<td align = "center" bgcolor = "#0085a1" style="width:10%"><font color = "white">제목</font></td>
                    <td style="width:50%">
                    <input class="content" id="content" type="text" name="Content" value="<?php echo "$content"; ?>">
                   	<p><?php echo "$content"; ?></p>                       
                	</td>
                </tr>
                
            </table>
            <br>
        
            &nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="submit">수정하기</button>
            &nbsp;&nbsp;
            <a class="btn btn-primary" href="./DataAnalysticsBoardList.php">목록이동</a>
        </form>
        
    </body>
</html>