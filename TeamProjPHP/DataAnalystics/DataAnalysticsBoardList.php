<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>데이터 분석 게시판 리스트</title>

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

        // mysqli_connect()함수로 커넥션 객체 생성
        $conn = mysqli_connect("localhost", "root", "", "test");           

        // 페이징 작업을 위한 테이블 내 전체 행 갯수 조회 쿼리
        $sqlCount = "SELECT count(*) FROM board";
        $resultCount = mysqli_query($conn, $sqlCount); // resultSet과유사
        
        if ($rowCount = mysqli_fetch_array($resultCount)) {
            $totalRowNum = $rowCount["count(*)"]; // php는 지역 변수를 밖에서 사용 가능.
        }       

        $rowPerPage = 10; // 페이지당 보여줄 게시물 행의 수        
        $begin = ($currentPage - 1) * $rowPerPage;

        // board 테이블을 조회해서 board_no, board_title, board_user, board_date 필드 값을 내림차순으로 정렬하여 모두 가져 오는 쿼리
        // 입력된 begin값과 rowPerPage 값에 따라 가져오는 행의 시작과 갯수가 달라지는 쿼리
        $sql = "SELECT board_no, board_title, board_user, board_date FROM board order by board_no desc limit " . $begin . "," . $rowPerPage . "";
        $result = mysqli_query($conn, $sql);              
        ?>
        		
		<tr>
			<td align = "center" bgcolor = "#3e5baa" style="width:7%;"><font color = "white">번호</font></td>
			<td align = "center" bgcolor = "#3e5baa" style="width:53%;"><font color = "white">제목</font></td>
			<td align = "center" bgcolor = "#3e5baa" style="width:15%;"><font color = "white">작성자</font></td>
			<td align = "center" bgcolor = "#3e5baa" style="width:11%;"><font color = "white">작성일</font></td>
			<td align = "center" bgcolor = "#3e5baa" style="width:7%;"><font color = "white">수정</font></td>
			<td align = "center" bgcolor = "#3e5baa" style="width:7%;"><font color = "white">삭제</font></td>
		</tr>

            <?php            
            // 반복문을 이용하여 result 변수에 담긴 값을 row변수에
            // 계속 담아서 row변수의 값을 테이블에 출력한다.
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
					<td align = "center" bgcolor = "#e6ebfa">
                        <?php
                        echo $row["board_no"];
                        ?>
                   </td>
					<td>
    					<?php
                        echo "<a href='./boardDetail.php?board_no=" . $row["board_no"] . "'>";
                        echo $row["board_title"];
                        echo "</a>";
                        ?>
                    </td>
					<td align = "center">
                        <?php
                        echo $row["board_user"];
                        ?>
                    </td>
					<td align = "center">
                        <?php
                        echo $row["board_date"];
                        ?>
                    </td >
						<?php
                        echo "<td align = 'center'><a class='btn btn-primary2' href='./boardUpdate.php?board_no=" . $row["board_no"] . "'>수정</a></td>";
                        echo "<td align = 'center'><a class='btn btn-primary2' href='./boardDelete.php?board_no=" . $row["board_no"] . "'>삭제</a></td>";
                        ?>
                	</tr>            		
            <?php
            } 
            // 와일루프 종료
            ?>
			<tr>
            	<td bgcolor = "#e6ebfa">         		
            		<a class="btn btn-primary2" href="./DataAnalysticsBoardAdd.php" >
  					<img src="./DataAnalysticsImg/글쓰기.png" width="30" height="30" title = "글쓰기" alt="글쓰기 로고">
  					</a>            		
            	</td>
            	<td align = "center" colspan = "20">
            		<?php
            			echo "<a class='btn btn-primary2' href ='./DataAnalysticsBoardList.php?currentPage=" . ($currentPage - 1) . "'>이전 페이지</a>&nbsp;&nbsp;";           		    
            			echo "<a class='btn btn-primary2' href='./DataAnalysticsBoardList.php?currentPage=" . ($currentPage + 1) . "'>다음 페이지</a>&nbsp;&nbsp;";
            		?>
            	</td>           	
            </tr>           
        </table>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php
        if ($currentPage > 1) {
        }      
        $lastPage = ($totalRowNum - 1) / $rowPerPage;
        
        if (($totalRowNum - 1) % $rowPerPage != 0) {
            $lastPage += 1;
        }

        if ($currentPage < $lastPage) {     
        }
        mysqli_close($conn); // 중요: 디비서버의 메모리를 효율적으로 운영        
        ?>	
	<br>
</body>

</html>