<html>
    <head>
        <meta http-equiv="content-Type" content="text/html; charset=UTF-8">
        <title>러닝맨 데이터 분석 게시판 게시글 입력 시스템</title>
    </head>
    <body>
        <?php
            $id       = $_POST['id'];
            //$pw     = $_POST['pw'];        
            $title    = $_POST["Title"];
            $content  = $_POST["Content"];
                        
            echo "id : "      . $id . "<br>";
            //echo "pw : "    . $pw . "<br>";
            echo "Title : "   . $title .   "<br>";
            echo "Content : " . $content . "<br>";
            require_once("./dbconnector/dbconnector.php");
            
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            
            //$result = $conn -> prepare("INSERT INTO BOARD (id, pw, Title, Content, xdate) values ('".$id."','".$pw."','".$title."','".$content."',SYSDATE)");
            $result = $conn -> prepare("INSERT INTO BOARD (id, Title, Content, xdate) values ('".$id."','".$title."','".$content."',SYSDATE)");
            $result -> execute();            
            
            header("Location: ./DataAnalysticsBoardList.php");
        ?>
    </body>
</html>