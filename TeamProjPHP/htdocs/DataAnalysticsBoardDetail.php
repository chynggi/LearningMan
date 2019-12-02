<!DOCTYPE html>
<html>
    <head>
        <title>러닝맨 데이터 분석 게시판 게시글 내용</title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<meta name="description" content="">
  		<meta name="author" content="">
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
  		<link href="./css/boost.css" rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="./css/bootstrap.css">
        <script type="text/javascript" src="./js/bootstrap.js"></script>
	
    	<style>
            table {
                table-layout: fixed;
                word-wrap: break-word;
            }
        </style>
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
        
        $NO       = $_SESSION["NO"];
        $ID       = $_SESSION["ID"];
        $Title    = $_SESSION["Title"];
        $Content  = $_SESSION["Content"];
        $XDate    = $_SESSION["XDate"];
        echo "NO : "      . $NO . "<br>";
        echo "ID : "      . $ID . "<br>";
        echo "Title : "   . $Title . "<br>";
        echo "Content : " . $Content . "<br>";
        echo "XDate : "   . $XDate . "<br>";
        
        require_once("./dbconnector/dbconnector.php");
        
        if($conn) {
            echo "연결 성공<br>";
        } else {
            die("연결 실패 : " .mysqli_error());
        }
        
        $sql = "SELECT NO, ID, TITLE, Content, XDate FROM BOARD WHERE NO = '".$NO."'";

        $result = $conn -> prepare($sql);
        $result -> execute([$ID, $Title, $Content, $NO]);
        
        header("Location: ./DataAnalysticsBoardList.php");        
        ?>
        <table class="table table-bordered" align = "center" style="width:50%">
        	<tr>
        		<td style="width:5%">작성자</td>
        		<td style="width:40%" colspan="5"><p><?php echo "$ID"; ?></p> </td>
        	</tr>
        	<tr>
        		<td style="width:5%">제목</td>
        		<td style="width:24%"><p><?php echo "$Title"; ?></p> </td>
        		<td style="width:5%">번호</td>
        		<td style="width:3%"><p><?php echo "$NO"; ?></p> </td>
        		<td style="width:5%">작성일</td>
        		<td style="width:3%"><p><?php echo "$XDate"; ?></p> </td>
        	</tr>
        	<tr>
                <td colspan="6">
                    <?php echo "$Content"; ?>
                </td>
            </tr>            
        </table>
        <br>
        &nbsp;&nbsp;&nbsp;
        <a href='./DataAnalysticsBoardUpdate.php?NO=<?=$row["NO"]?>'>수정</a>
		<a href='./DataAnalysticsBoardDelete.php?NO=<?=$row["NO"]?>'>삭제</a>
        <a class="btn btn-primary" href="./DataAnalysticsBoardList.php">
        	리스트로 돌아가기
        </a>
    </body>
</html>