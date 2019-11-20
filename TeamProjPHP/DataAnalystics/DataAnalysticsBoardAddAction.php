<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>데이터 분석 게시판 글 입력 시스템</title>
    </head>
    <body>
        <h1>데이터 분석 게시판 입력</h1>
        <?php
        require 'DataAnalysticsBoardDaoFunction.php';
        insert();
            //헤더함수를 이용하여 리스트 페이지로 리다이렉션
            header("Location: ./DataAnalysticsBoardList.php");
        ?>
    </body>
</html>