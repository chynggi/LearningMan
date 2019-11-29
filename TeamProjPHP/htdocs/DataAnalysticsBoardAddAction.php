<html>
    <head>
        <meta http-equiv="board_content-Type" board_content="text/html; charset=UTF-8">
        <board_title>러닝맨 데이터 분석 게시판 게시글 입력 시스템</board_title>
    </head>
    <body>
        <h1>데이터 분석 게시판 글 등록하기 액션</h1>
        <?php
            $board_id = $_POST['id'];
            //$board_pw = $_POST['pw'];        
            $board_title    = $_POST["Title"];
            $board_content  = $_POST["Content"];
                        
            echo "id : "      . $board_id . "<br>";
            //echo "pw : "      . $board_pw . "<br>";
            echo "Title : "   . $board_title .   "<br>";
            echo "Content : " . $board_content . "<br>";
            require_once("../dbconnector/dbconnector.php");
            
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            
            //$result = $conn -> prepare("INSERT INTO BOARD (id, pw, Title, Content, xdate) values ('".$board_id."','".$board_pw."','".$board_title."','".$board_content."',SYSDATE)");
            $result = $conn -> prepare("INSERT INTO BOARD (id, Title, Content, xdate) values ('".$board_id."','".$board_title."','".$board_content."',SYSDATE)");
            $result -> execute();
            
            header("Location: ./DataAnalysticsBoardList.php");
        ?>
    </body>
</html>