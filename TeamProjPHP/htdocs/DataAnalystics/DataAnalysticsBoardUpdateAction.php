<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>러닝맨</title>
</head>
<body>
	<h1>데이터 분석 게시판 게시글 수정</h1>
        <?php
            //board_update_form.php에서 POST 방식으로 넘어온 값 저장 및 출력
            $NO       = $_POST["NO"];
            $Title    = $_POST["Title"];
            $Content  = $_POST["Content"];
            echo "NO : "      . $NO . "<br>";
            echo "Title : "   . $Title . "<br>";
            echo "Content : " . $Content . "<br>";
            //커넥션 객체 생성 및 연결 여부 확인하기
            $conn = mysqli_connect("localhost", "root", "","team");
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            //board 테이블의 NO값이 일치하는 행의 Title,Content 값을 입력한 값으로,XDate값을 현재 시간으로 수정하는 쿼리
            $sql = "UPDATE board SET Title='".$Title."',Content='".$Content."',XDate=now() WHERE NO=".$NO."";
            $result = mysqli_query($conn,$sql);
            //수정 작업의 성공 여부 확인하기
            if($result) {
                echo "수정 성공: ".$result; 
            } else {
                echo "수정 실패: ".mysqli_error($conn);
            }
        
            mysqli_close($conn);
            //헤더를 이용한 리다이렉션 구현
            header("Location: ./DataAnalysticsBoardList.php"); 
        ?>
    </body>
</html>