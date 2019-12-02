<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>러닝맨 데이터 분석 게시판 게시글 수정 시스템</title>
</head>
<body>	
        <?php
            $NO       = $_POST["NO"];
            $ID       = $_POST["ID"];
            $Title    = $_POST["Title"];
            $Content  = $_POST["Content"];
            echo "NO : "      . $NO . "<br>";
            echo "ID : "      . $ID . "<br>";
            echo "Title : "   . $Title . "<br>";
            echo "Content : " . $Content . "<br>";
            
            require_once("./dbconnector/dbconnector.php");
            
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            
            $sql = "UPDATE BOARD SET NO=?, ID=?, Content=?, Title=? WHERE NO=?";
            $result = $conn -> prepare($sql);
            $result -> execute([$ID, $Title, $Content, $NO]);
            
            header("Location: ./DataAnalysticsBoardList.php"); 
        ?>
    </body>
</html>