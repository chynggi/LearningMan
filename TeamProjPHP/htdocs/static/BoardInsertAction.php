<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>러닝맨 데이터 분석 게시판 글 입력 시스템</title>
    </head>
    <body>
        <h1>데이터 분석 게시판 입력</h1>
        <?php
        require 'BoardDAOFunction.php';
        $dbname = $_POST["dbname"];
        insert($dbname);
          
      /*   
        if($dbname == "OOPBOARD"){
            header("Location: ../OOP_Board/oop_B_index.php");
        }elseif ($dbname == "SSBOARD"){
            header("Location: ../ServerSide/ServerSideBoardList.php");
        }elseif ($dbname == "FRBOARD"){
            header("Location: ../ServerSide/ServerSideBoardList.php");
        }elseif ($dbname == "DBMSBOARD"){
            header("Location: ../ServerSide/ServerSideBoardList.php");
        }elseif($dbname == "DABOARD"){
            header("Location: ../ServerSide/ServerSideBoardList.php");
        }
        else{
            header("Location: ../index.php");
        } */
        ?>
           
    </body>
</html>