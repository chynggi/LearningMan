<?php
include "../static/header.php"
?>
    	<title>러닝맨 데이터 분석 게시판 게시글 삭제</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <body>
        <h1 class="display-4">데이터 분석 게시판 게시글 삭제</h1>
        <?php 
            $board_no = $_GET["board_no"];
            echo $board_no."번째 글 삭제 페이지<br>";
        ?>
        <!-- board_delete_action.php 페이지로 post방식을 이용하여 값 전송 -->
        <form action="../static/BoardInsertAction.php" method="post">
            <table class="table table-bordered" style="width:10%">
                <tr>
                    <td>정말로 삭제하시겠습니까?</td>
                </tr>
                <tr>
                    <td><input type="hidden" name = "dbname" value="SSBOARD">
                    <input type="hidden" name="board_no" value="<?php echo $board_no ?>">
                    <button type="submit">삭제</button>
                    <a href="./ServerSideBoardList.php">취소</a>
                    </td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" type="submit">삭제</td>
                </tr>
            </table>
        </form>      
    </body>
</html>
<?php
include "../static/footer.php"
?>