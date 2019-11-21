<!DOCTYPE html>
<html>
    <head>
    	<title>러닝맨 데이터 분석 게시판 게시글 삭제</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/bootstrap.css">
        <script type="text/javascript" src="./js/bootstrap.js"></script>
    </head>
    <body>
        <h1 class="display-4">데이터 분석 게시판 게시글 삭제</h1>
        <?php 
            $NO = $_GET["NO"];
            echo $NO."번째 글 삭제 페이지<br>";
        ?>
        <form action="./DataAnalysticsBoardDeleteAction.php" method="post">
            <table class="table table-bordered" style="width:10%">
                <tr>
                    <td>게시글을 삭제하려면 비밀 번호를 입력하세요.</td>
                </tr>
                <tr>
                    <td><input type="text" name="PW">
                        <input type="hidden" name="NO" value="<?php echo $NO ?>">
                    </td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" type="submit">삭제</button></td>
                    <td><a class="btn btn-primary" href="./DataAnalysticsBoardList.php">취소</a></td>
                </tr>
            </table>
        </form>      
    </body>
</html>