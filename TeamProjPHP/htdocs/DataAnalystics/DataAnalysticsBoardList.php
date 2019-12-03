<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>러닝맨 데이터 분석 게시판 리스트</title>
<link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="./css/boost.css" rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
</head>

<body>
     <table class="table table-bordered" border="1" align = "center" style="width:60%;">
        <?php
        $currentPage = 1;
        
        if (isset($_GET["currentPage"])) { // get 방식으로 전달되온상관 배열의 "currentPage" 값이 있으면
            $currentPage = $_GET["currentPage"];
        }
        // oci_connect()함수로 커넥션 객체 생성
        ?>
     <!--   $conn = oci_connect("localhost", "root", "", "team"); -->
        <?php 
        $conn = oci_connect("team", "team", "localhost");

        // 페이징 작업을 위한 테이블 내 전체 행 갯수 조회 쿼리
        $sqlCount    = "SELECT count(*) FROM board";
        $resultCount = oci_query($conn, $sqlCount); // resultSet과유사
        
        if ($rowCount    = oci_fetch_array($resultCount)) {
            $totalRowNum = $rowCount["count(*)"]; // php는 지역 변수를 밖에서 사용 가능.
        }

        $rowPerPage = 20; // 페이지당 보여줄 게시물 행의 수        
        $begin      = ($currentPage - 1) * $rowPerPage;
        $sql        = "SELECT NO, Title, ID, XDate FROM board order by NO desc limit " . $begin . "," . $rowPerPage . "";
        $result     = oci_query($conn, $sql);        
        ?>    
        <?php while ($row = oci_fetch_array($result)) {         
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
                    echo $row["NO"];
                    ?>
                </td>
				<td>
    				<?php
                    echo "<a href='./DataAnalysticsBoardDetail.php?NO=" . $row["NO"] . "'>";
                    echo $row["Title"];
                    echo "</a>";
                    ?>
                </td>
				<td align = "center">
                    <?php
                    echo $row["ID"];
                    ?>
                </td>
				<td align = "center">
                    <?php
                    echo $row["XDate"];
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