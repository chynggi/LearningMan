<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>member_insert_action.php</title>
</head>
<body> <h1>memberAddAction.php</h1>
<?php
    //board_add_form.php 페이지에서 넘어온 글 번호값 저장 및 출력
    $user_id = $_POST["memId"];
    $user_pw = $_POST["memPw"];
    echo "user_id : " . $user_id . "<br>";
    echo "user_pw : " . $user_pw . "<br>";
    
    require_once("../dbconnector/dbconnector.php");
    //커넥션 객체 생성 여부 확인
    if($conn) {
        echo "연결 성공<br>";
    } else {
        die("연결 실패 : " .mysqli_error());
    }
    $sql = "DELETE FROM BUSER WHERE id='"
        . $user_id . "' AND pw=" . $user_pw."";
    $result = $conn -> prepare($sql);
    
    $result -> execute();
    if($result -> execute() == TRUE){
        echo "삭제 성공";
        session_start();
        session_destroy();
    }else {
        echo "삭제 실패";
    }
    //헤더함수를 이용하여 리스트 페이지로 리다이렉션
    header("Location: ../index.php"); //헤더 함수를 이용해서 리다이렉션 시킬 수 있다.
?> 
</body>
</html>