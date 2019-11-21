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
            //커넥션 객체 생성 (데이터 베이스 연결)
            $conn = mysqli_connect("localhost", "root", "","team");
            //연결 성공 여부 확인
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            $NO = $_GET["NO"];
            echo $NO."번째 글 수정 페이지<br>";
            //board 테이블을 조회하여 NO의 값이 일치하는 행의 NO, Title, Content, ID, XDate 필드의 값을 가져오는 쿼리
            $sql = "SELECT NO, Title, Content, ID, XDate FROM board WHERE NO = '".$NO."'";
            $result = mysqli_query($conn,$sql);
            if($row = mysqli_fetch_array($result)){
        ?>
        <br>
        <form action="./DataAnalysticsBoardUpdateAction.php" method="post">
            <table class="table table-bordered" style="width:50%">
                <tr>
                    <td style="width:10%">번호</td>
                    <td style="width:20%"><input type="text" name="NO" value="<?php echo $row["NO"]?>" readonly></td>
                </tr>         
                <tr>
                    <td style="width:10%">제목</td>
                    <td style="width:20%"><input type="text" name="Title" value="<?php echo $row["Title"]?>"></td>
                </tr>
                <tr>
                    <td style="width:10%">내용</td>
                    <td style="width:20%">
                    <textarea name="Content"  id = "content" rows = "5" cols = "50" wrap = "hard"><?php echo trim($row["Content"])?></textarea>
                    </td>
                </tr>
            </table>
            <br>
        <?php
            }
            mysqli_close($conn);
        ?>
            &nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="submit">수정하기</button>
            &nbsp;&nbsp;
            <a class="btn btn-primary" href="./DataAnalysticsBoardList.php">목록이동</a>
        </form>
        
    </body>
</html>