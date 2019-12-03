<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>member_insert_action.php</title>
</head>
<body> <h1>memberAddAction.php</h1>
<?php
    //board_add_form.php 페이지에서 넘어온 글 번호값 저장 및 출력
    $user_id = $_POST["id"];
    $user_pw = $_POST["pw"];
    echo "user_id : " . $user_id . "<br>";
    echo "user_pw : " . $user_pw . "<br>";

    require_once("../dbconnector/dbconnector.php");
    //$conn = db_connect();
   
    //커넥션 객체 생성 여부 확인
    if($conn) {
        echo "연결 성공<br>";
    } else {
        die("연결 실패 : " .mysqli_error());
    }
    session_start();
    //board 테이블에 입력된 값을 1행에 넣고 board_date 필드에는 현재 시간을 입력하는 쿼리
    $result = $conn -> prepare("SELECT * FROM BUSER WHERE ID = :userid");
    $result -> bindParam(':userid', $user_id, PDO::PARAM_STR);
    $result -> execute();
    $oci_result = $result -> fetchAll(PDO::FETCH_ASSOC);
    
    if($oci_result[0]['ID'] == $user_id && $oci_result[0]['PW'] == $user_pw){
        echo "로그인 성공";
        $_SESSION["id"] = $oci_result[0]['ID'];
        $_SESSION["pw"] = $oci_result[0]['PW'];
        $_SESSION["name"] = $oci_result[0]['NAME'];
        $_SESSION["phone"] = $oci_result[0]['PHONE'];
        $_SESSION["date"] = $oci_result[0]['XDATE'];
        header("Location: ../index.php"); //헤더 함수를 이용해서 리다이렉션 시킬 수 있다.
    }elseif ($oci_result[0]['ID'] != $user_id) {
        echo "<script> alert('아이디가 틀렸습니다. '); history.go(-1);</script>";
    }else{
        echo "<script> alert('비밀번호가 틀렸습니다.'); history.go(-1);</script>";
    }
?> 
</body>
</html>