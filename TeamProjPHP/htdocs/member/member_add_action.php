<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>회원가입 시스템</title>
</head>
<body>
<?php
    $user_id = $_POST["memId"];
    $user_pw = $_POST["memPw"];
    $user_name = $_POST["memName"];
    $user_phone = $_POST["memPhone"];
    echo "user_id : " . $user_id . "<br>";
    echo "user_pw : " . $user_pw . "<br>";
    echo "user_name : " . $user_name . "<br>";
    echo "user_phone : " . $user_phone . "<br>";
    require_once("../dbconnector/dbconnector.php");
    //커넥션 객체 생성 여부 확인
    if($conn) {
        echo "연결 성공<br>";
    } else {
        die("연결 실패 : " .mysqli_error());
    }
    //board 테이블에 입력된 값을 1행에 넣고 board_date 필드에는 현재 시간을 입력하는 쿼리
    $result = $conn -> prepare("INSERT INTO BUSER (id, pw, name, phone, xdate)
                    values ('".$user_id."','".$user_pw."',
                    '".$user_name."','".$user_phone."',SYSDATE)");
    $result -> execute();
    //헤더함수를 이용하여 리스트 페이지로 리다이렉션
    header("Location: ../index.php"); //헤더 함수를 이용해서 리다이렉션 시킬 수 있다.      
?> 
</body>
</html>