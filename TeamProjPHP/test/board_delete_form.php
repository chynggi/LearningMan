<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/bootstrap.css">
    </head>
    <body>
    	<h1 class="display-4">board_delete_form.php</h1>
		<?php
            $board_no = $_GET["board_no"];
            
            
            echo $board_no."번째 글을 삭제<br>"		
        ?>
        
        <form action="./board_delete_action.php" method="post">
            <table class="table table-bordered" style="width:10%">
        		<tr>
                    <td>작성글의 비밀번호를 입력</td>
                </tr>
                <tr>
                	<td>
                		<input type = "text" name = "board_pw">
                		<input type = "hidden" name = "board_no" value = <?php echo $board_no?>> <!-- 히든 넘버도 같이 넘어간다 -->
                	</td>
                </tr>
            	<tr>
            		<td><button class = "btn btn-primary" type = "submit">삭제</button>
            		&nbsp;&nbsp;
            		<a class="btn btn-primary" href="./board_list.php">목록으로 이동</a></td>
            	</tr>
            </table>
        </form>
    	<script type="text/javascript" src="./js/bootstrap.js"></script>
    </body>

</html>