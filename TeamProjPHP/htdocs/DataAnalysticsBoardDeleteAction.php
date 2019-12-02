<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>러닝맨 데이터 분석 게시판 게시글 삭제 시스템</title>
</head>
<body>
	<?php	
	$no      = $_POST["NO"];
	$title   = $_POST["Title"];
	$content = $_POST["Content"];
    
	echo "no : "      . $no . "<br>";
	echo "title : "   . $title . "<br>";
	echo "content : " . $content . "<br>";
	
    require_once("./dbconnector/dbconnector.php");
       
    if($conn) {
        echo "연결 성공<br>";
    } else {
        die("연결 실패 : " .mysqli_error());
    }

    $sql = "DELETE FROM BOARD WHERE no='". $no . "' AND title=" . $title." AND content=" . $content."";
    $result = $conn -> prepare($sql);
    
    $result -> execute();
    if($result -> execute() == TRUE){
        echo "삭제 성공";
        session_start();
        session_destroy();
    } else {
        echo "삭제 실패";
    }    
    header("Location: ./DataAnalysticsBoardList.php");
    ?> 
</body>
</html>