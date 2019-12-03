<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>회원정보수정 시스템</title>
</head>
<body>
<?php
    //board_add_form.php 페이지에서 넘어온 글 번호값 저장 및 출력
    $user_id = $_POST["memId"];
    $user_pw = $_POST["memPw"];
    $user_name = $_POST["memName"];
    $user_phone = $_POST["memPhone"];
    $user_date = $_POST["memDate"];
    echo "user_id : " . $user_id . "<br>";
    echo "user_pw : " . $user_pw . "<br>";
    echo "user_name : " . $user_name . "<br>";
    echo "user_phone : " . $user_phone . "<br>";
    echo "user_date : " . $user_date . "<br>";
    require_once("../dbconnector/dbconnector.php");
    //커넥션 객체 생성 여부 확인
    if($conn) {
        echo "연결 성공<br>";
    } else {
        die("연결 실패 : " .mysqli_error());
    }
    //board 테이블에 입력된 값을 1행에 넣고 board_date 필드에는 현재 시간을 입력하는 쿼리
    $sql = "UPDATE BUSER SET pw=?, name=?, phone=?, xdate=?
            WHERE id=?";
    $result = $conn -> prepare($sql);
    
    $result -> execute([$user_pw, $user_name, $user_phone, $user_date, $user_id]);
    //헤더함수를 이용하여 리스트 페이지로 리다이렉션
    header("Location: ../index.php"); //헤더 함수를 이용해서 리다이렉션 시킬 수 있다.
?> 
</body>
</html>