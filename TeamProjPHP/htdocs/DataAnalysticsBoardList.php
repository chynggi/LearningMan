<!DOCTYPE html>
<html>
<head>
<Title>러닝맨 데이터 분석 게시판 리스트</Title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="wIDth=device-wIDth, initial-scale=1, shrink-to-fit=NO">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" ID="bootstrap-css">
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
        background: url( "./DataAnalysticsImg/글쓰기.png" ) NO-repeat;
        border: NOne;
        wIDth: 32px;
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
  	
  	$NO       = $_SESSION["NO"];
  	$ID       = $_SESSION["ID"];
  	$Title    = $_SESSION["Title"];
  	$XDate    = $_SESSION["XDate"];
  	echo "NO : "      . $NO . "<br>";
  	echo "ID : "      . $ID . "<br>";
  	echo "Title : "   . $Title . "<br>";
  	echo "XDate : "   . $XDate . "<br>";
  	
  	require_once("./dbconnector/dbconnector.php");
  	
  	if($conn) {
  	    echo "연결 성공<br>";
  	} else {
  	    die("연결 실패 : " .oci_error());
  	}
           
    $currentPage = 1;
    
    if (isset($_GET["currentPage"])) {
        $currentPage = $_GET["currentPage"];
    }
    
    $sqlCount = "SELECT count(*) FROM board";
    $resultCount = oci_query($conn, $sqlCount);
     
    if ($rowCount = oci_fetch_array($resultCount)) {
        $totalRowNum = $rowCount["count(*)"];
     
    $rowPerPage = 10;
    $begin = ($currentPage - 1) * $rowPerPage;
    
    $result = $conn -> prepare("SELECT NO, Title, ID FROM board order by NO desc limit " . $begin . "," . $rowPerPage . "");
    $result -> execute();
    
    header("Location: ./DataAnalysticsBoardList.php");  
    
    }
    ?>
	<div ID="head_div"></div>
  	<hr>
     <table class="table table-bordered" border="1" align = "center" style="wIDth:60%;">
		<tr>
			<td align = "center" bgcolor = "#0085a1" style="wIDth:10%;"><font color = "white">번호</font></td>
			<td align = "center" bgcolor = "#0085a1" style="wIDth:65%;"><font color = "white">제목</font></td>
			<td align = "center" bgcolor = "#0085a1" style="wIDth:13%;"><font color = "white">작성자</font></td>
			<td align = "center" bgcolor = "#0085a1" style="wIDth:12%;"><font color = "white">작성일</font></td>			
		</tr>
		
		<?php while ($row = oci_fetch_array($result)) { ?>	
			<tr>
				<td align = "center" bgcolor = "#e6ebfa">
                    <?php
                    echo $row["$NO"];                    
                    ?>
                </td>
				<td>
				    <input class="Title" ID="Title" type="hidden" name="Title" value="<?php echo "$Title"; ?>">
                    <?php
                    echo "<a href='./DataAnalysticsBoardDetail.php?NO=" . $row["NO"] . "'>";
                    echo $row["$Title"];
                    echo "</a>";
                    ?>                    
                </td>
				<td align = "center">
                    <input class="ID" ID="ID" type="hidden" name="ID" value="<?php echo "$ID"; ?>">
                   	<?php
                    echo $row["$ID"];
                    ?>
                </td>
				<td align = "center">
					<?php
                    echo $row["$XDate"];
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
  					<img src="./DataAnalysticsImg/글쓰기.png" width="30" height="30" Title = "글쓰기" alt="글쓰기 로고">
  					</a>
            	</td>           	
            </tr>           
        </table>     
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
	<br>
</body>

</html>