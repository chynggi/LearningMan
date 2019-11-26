<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>러닝맨 데이터 분석 게시판 게시글 입력 시스템</title>
    </head>
    <body>
        <h1>데이터 분석 게시판 글 등록하기 액션</h1>
        <?php
            //board_delete_form.php 페이지에서 넘어온 글 번호값 저장 및 출력
            $PW       = $_POST["PW"];
            $Title    = $_POST["Title"];
            $Content  = $_POST["Content"];
            $ID       = $_POST["ID"];            
            echo "PW : "      . $PW .      "<br>";
            echo "Title : "   . $Title .   "<br>";
            echo "Content : " . $Content . "<br>";
            echo "ID : "      . $ID .      "<br>";
           
            $conn = oci_connect("localhost", "root", "","team");
            
            //커넥션 객체 생성 여부 확인
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .oci_error());
            }
            //board테이블에서 입력된 글 번호와, 글 비밀번호가 일치하는 행 삭제 쿼리
           
            $sql = "INSERT INTO board (PW, Title, Content, ID, XDate)
            values('".$PW."','".$Title."','".$Content."','".$ID."',now())";
            
            $result = oci_query($conn,$sql);
            //쿼리 실행 여부 확인
            if($result) {
                echo "삭제 성공: ".$result; //과제 작성시 에러메시지 출력하게 만들기
            } else {
                echo "삭제 실패: ".oci_error($conn);
            }
        
            oci_close($conn);
            //헤더함수를 이용하여 리스트 페이지로 리다이렉션
            header("Location: ./DataAnalysticsBoardList.php");
        ?>
    </body>
</html>