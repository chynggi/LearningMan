<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>러닝맨 데이터 분석 게시판 게시글 수정</title>
        <link rel="stylesheet" href="./css/bootstrap.css">
        <!-- 테이블 크기 조절용 css -->
        <style>
            table {
                table-layout: fixed;
                word-wrap: break-word;
            }
        </style>
        <script type="text/javascript" src="./js/bootstrap.js"></script>
    </head>
    <body>
        <h1 class="display-4">데이터 분석 게시판 게시글 수정</h1>
        <?php
            require_once('DataAnalysticsBoardDaoFunction.php');
            $key = $_GET["board_no"];
            echo $key."번째 글 수정 페이지<br>";
            $oneRow = selectOne($key);
            if($row = mysqli_fetch_array($oneRow)){
        ?>
        <br>
        <form action="./DataAnalysticsBoardUpdateAction.php" method="post">
            <table class="table table-bordered" style="width:50%">
                <tr>
                    <td style="width:10%">글 번호</td>
                    <td style="width:20%">
                    <input type="text" name="board_no" 
                    value="<?php echo $row["board_no"]?>" readonly></td>
                </tr>
                <tr>
                    <td style="width:10%">글 제목</td>
                    <td style="width:20%">
                    <input type="text" name="board_title" 
                    value="<?php echo $row["board_title"]?>"></td>
                </tr>
                <tr>
                    <td style="width:10%">글 내용</td>
                    <td style="width:20%">
                    <!-- texrarea테그 사이에 값을 적는 부분에서 빈공란이 들어가면 안된다. -->
                    <textarea name="board_content" id="content" rows="5" cols="50" wrap="hard">
                    <?php echo trim($row["board_content"])?>
                    </textarea>
                    
                    </td>
                  
                </tr>
            </table>
            <br>
        <?php
            }
        ?>
            &nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="submit">글 수정</button>
            &nbsp;&nbsp;
            <a class="btn btn-primary" href="./DataAnalysticsBoardList.php"> 리스트로 돌아가기</a>
        </form>
        
    </body>
</html>