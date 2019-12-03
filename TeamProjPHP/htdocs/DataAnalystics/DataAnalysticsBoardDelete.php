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
    </head>
    <body>
    <?php
    include "../static/header.php"
    ?>
    <?php 
    $board_no = $_GET["board_no"];
    ?>   	
        <form action="../static/BoardInsertAction.php" method="post">    
            <table class="table table-bordered" align = "center" style="width:55%">
                <td align = "center" >
        		<?php echo $board_no."번 게시글을 삭제하면 복구 할 수 없습니다.<br>"; ?>
        		</td>
                <tr>  
                	<td align = "center" >
                	<input type="hidden" name = "dbname" value="SSBOARD">             	
        			<input type="hidden" name="board_no" value="<?php echo "$board_no"; ?>">        			
        			<button class="btn btn-primary" type="submit">삭제</button>
        			<a class="btn btn-primary" href="./DataAnalystics/DataAnalysticsBoardList.php">취소</a>
        			</td>
        		</tr>        		         		 					
            </table>           
        </form>   
    <?php
    include "../static/footer.php"
    ?>   
    </body>
</html>