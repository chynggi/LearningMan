<!DOCTYPE html>
<html>
<head>
<title>러닝맨 데이터 분석 게시판 리스트</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

<style type="text/css">
.jumbotron {
	background-image: url('./DataAnalysticsImg/jumbotronBackground.jpg');
	background-size: cover;
	text-shadow: black 0.5em 0.5em 0.5em;
	color: black;
}
.img-button1 {
        background: url( "./DataAnalysticsImg/글쓰기.png" ) no-repeat;
        border: none;
        width: 32px;
        height: 32px;
        cursor: pointer;
      }
</style>

<script>
	$(document).ready(function() {			
		$('#head_div').load('header.php');
	});
</script>

</head>

<body>
	<?php 
  	session_start();
  	    $board_no    = $_SESSION['NO'];
        $board_id    = $_SESSION['id'];     
        $board_title = $_SESSION['Title'];       
        $board_xdate = $_SESSION['XDate'];
        
        echo "no : "    . $board_no    . "<br>";
        echo "id : "    . $board_id    . "<br>";        
        echo "title : " . $board_title . "<br>";        
        echo "XDate : " . $board_xdate . "<br>"; 
        require_once("./dbconnector/dbconnector.php");
        
        if($conn) {
            echo "연결 성공<br>";
        } else {
            die("연결 실패 : " .mysqli_error());
        }
        
        $result = $conn -> prepare("SELECT board_no, board_title, board_id FROM board order by board_no desc limit " . $begin . "," . $rowPerPage . "");
        $result -> execute();
        

        
        header("Location: ./DataAnalysticsBoardList.php");
        
    ?>
	<div id="head_div"></div>
  	<hr>
     <table class="table table-bordered" border="1" align = "center" style="width:60%;">
        <?php
        $currentPage = 1;
        
        if (isset($_GET["currentPage"])) { // get 방식으로 전달되온상관 배열의 "currentPage" 값이 있으면
            $currentPage = $_GET["currentPage"];
        }
        
            
        while ($row = oci_fetch_array($result)) {         
        }?>		
				<tr>
			<td align = "center" bgcolor = "#3e5baa" style="width:10%;"><font color = "white">번호</font></td>
			<td align = "center" bgcolor = "#3e5baa" style="width:65%;"><font color = "white">제목</font></td>
			<td align = "center" bgcolor = "#3e5baa" style="width:13%;"><font color = "white">작성자</font></td>
			<td align = "center" bgcolor = "#3e5baa" style="width:12%;"><font color = "white">작성일</font></td>			
		</tr>
		
		<?php while ($row = oci_fetch_array($result)) { ?>	
			<tr>
				<td align = "center" bgcolor = "#e6ebfa">
                    <?php
                    echo "$board_no";
                    ?>
                </td>
				<td>
				    <input class="Title" id="Title" type="hidden" name="Title" value="<?php echo "$board_title"; ?>">
                   	<p><?php echo "$board_title"; ?></p>
    				<?php
                    echo "<a href='./DataAnalysticsBoardDetail.php?NO=" . $row["NO"] . "'>";
                    echo "$board_title";
                    echo "</a>";
                    ?>
                </td>
				<td align = "center">
                    <input class="id" id="id" type="hidden" name="id" value="<?php echo "$board_id"; ?>">
                   	<p><?php echo "$board_id"; ?></p>
                </td>
				<td align = "center">
                    <?php
                    echo "$board_xdate";
                    ?>
                </td >						
               </tr>
            <?php } ?>		
			<tr>            	
            	<td align = "center" colspan = "20">
            		<a class="btn btn-primary2" href="./DataAnalysticsBoardAdd.php" >글쓰기</a>
            		<?php
            			echo "<a class='btn btn-primary2' href='./DataAnalysticsBoardList.php?currentPage=" . ($currentPage - 1) . "'>◁</a>&nbsp;&nbsp;";           		    
            			echo "<a class='btn btn-primary2' href='./DataAnalysticsBoardList.php?currentPage=" . ($currentPage + 1) . "'>▷</a>&nbsp;&nbsp;";
            		?>
            		<a class="btn btn-primary2" href="./DataAnalysticsBoardAdd.php" >
  					<img src="./DataAnalysticsImg/글쓰기.png" width="30" height="30" title = "글쓰기" alt="글쓰기 로고">
  					</a>
            	</td>           	
            </tr>           
        </table>     
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
	<br>
</body>

</html>