<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>게시판 리스트</title>
<link rel="stylesheet" href="./css/bootstrap.css">
<script type="text/javascript" src="./js/bootstrap.js"></script>
</head>

<body>
	<h1 class="display-4">board_list.php</h1>
        <?php
        $currentPage = 1;
        
        if (isset($_GET["currentPage"])) { // get 방식으로 전달되온상관 배열의 "currentPage" 값이 있으면
            $currentPage = $_GET["currentPage"];
        }

        // mysqli_connect()함수로 커넥션 객체 생성
        $conn = mysqli_connect("localhost", "root", "", "team");

        // 커넥션 객체 생성 확인
        if ($conn) {
            echo "연결 성공<br>";
        } 
        else {
            die("연결 실패 : " . mysqli_error());
        }

        // 페이징 작업을 위한 테이블 내 전체 행 갯수 조회 쿼리
        $sqlCount = "SELECT count(*) FROM board";
        $resultCount = mysqli_query($conn, $sqlCount); // resultSet과유사
        
        if ($rowCount = mysqli_fetch_array($resultCount)) {
            $totalRowNum = $rowCount["count(*)"]; // php는 지역 변수를 밖에서 사용 가능.
        }

        // 행 갯수 조회 쿼리가 실행 됐는지 여부
        if ($resultCount) {
            echo "행 갯수 조회 성공 : " . $totalRowNum . "<br>";
        } 
        else {
            echo "결과 없음: " . mysqli_error($conn);
        }

        $rowPerPage = 5; // 페이지당 보여줄 게시물 행의 수
        
        $begin = ($currentPage - 1) * $rowPerPage;

        // board 테이블을 조회해서 board_no, board_title, board_user, board_date 필드 값을 내림차순으로 정렬하여 모두 가져 오는 쿼리
        // 입력된 begin값과 rowPerPage 값에 따라 가져오는 행의 시작과 갯수가 달라지는 쿼리
        $sql = "SELECT board_no, board_title, board_user,
                     board_date FROM board order by 
                     board_no desc limit " . $begin . "," . $rowPerPage . "";

        // 1페이지 limit 0,5 만약 10페이지 limit 45,5
        $result = mysqli_query($conn, $sql);

        // 쿼리 조회 결과가 있는지 확인
        if ($result) {
            echo "조회 성공";
        } 
        else {
            echo "결과 없음: " . mysqli_error($conn);
        }
        ?>

        <table class="table table-bordered" border="1">
		
		<tr>
			<td>번호(board_no)</td>
			<td>제목(board_title)</td>
			<td>작성자(board_user)</td>
			<td>작성일(board_date)</td>
			<td>수정(board_update_form.php)</td>
			<td>삭제(board_delete_form.php)</td>
		</tr>

            <?php
            
            // 반복문을 이용하여 result 변수에 담긴 값을 row변수에
            // 계속 담아서 row변수의 값을 테이블에 출력한다.
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
					<td>
                        <?php
                        echo $row["board_no"];
                        ?>
                   </td>
					<td>
    					<?php
                        echo "<a href='./board_detail.php?board_no=" . $row["board_no"] . "'>";
                        echo $row["board_title"];
                        echo "</a>";
                        ?>
                    </td>
					<td>
                        <?php
                        echo $row["board_user"];
                        ?>
                    </td>
					<td>
                        <?php
                        echo $row["board_date"];
                        ?>
                    </td>
						<?php
                        echo "<td><a href='./board_update_form.php?board_no=" . $row["board_no"] . "'>수정</a></td>";
                        echo "<td><a href='./board_delete_form.php?board_no=" . $row["board_no"] . "'>삭제</a></td>";
                        ?>
                	</tr>
            <?php
            } 
            // 와일루프 종료
            ?>

        </table>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php

        // PAGENATION 부분 : 중요
        // currentPage 변수가 1보다 클때만 이전 버튼이 활성화 되도록 함
        if ($currentPage > 1) {
            
            // 이전 버튼이 클릭될때 GET방식으로 currentPage변수 값에
            // 1을 뺀 값이 넘어가도록 함
            echo "<a class='btn btn-primary2' 
                    href ='./board_list.php?currentPage=" . ($currentPage - 1) . "'>이전</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        
        $lastPage = ($totalRowNum - 1) / $rowPerPage;
        
        if (($totalRowNum - 1) % $rowPerPage != 0) {
            $lastPage += 1;
        }

        // lastPage변수가 currentPage 변수보다 클때만
        // 다음 버튼이 활성화 되도록 함
        if ($currentPage < $lastPage) {

            // 다음 버튼이 클릭될때 GET방식으로 currentPage변수 값에
            // 1을 더한 값이 넘어가도록 함
            echo "<a class='btn btn-primary2' 
                href='./board_list.php?currentPage=" . ($currentPage + 1) . "'>다음</a>";
        }

        mysqli_close($conn); // 중요: 디비서버의 메모리를 효율적으로 운영
        
        ?>

        &nbsp;&nbsp;&nbsp;
        
        <a class="btn btn-primary" href="./board_add_form.php">글 쓰기</a>
	
	<br>
	
	<br>
	
	<br>
	
	<br>
	
	<br>

</body>

</html>