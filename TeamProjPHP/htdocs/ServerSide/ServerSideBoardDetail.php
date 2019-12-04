<?php
include "../static/header.php"
?>
    	<style>
            table {
                table-layout: fixed;
                word-wrap: break-word;
            }
        </style>
    

    <body>
    <div class="container">
        <h1 class="display-4">ServerSide 게시판 게시글 내용</h1>
        <br>
        <?php
            require_once('../static/BoardDAOFunction.php');
            $key = $_GET["board_no"];
            
            $oneRow = selectOne($key,"SSBOARD");
            
        ?>
        <table class="table table-bordered" style="width:100%">
            <?php
                //result 변수에 담긴 값을 row 변수에 저장하여 테이블에 출력
            if($oneRow != null) {
            ?>
            <tr>
                <td style="width:5%">작성자</td>
                <td style="width:40%" colspan="5">
                    <?php
                        echo $oneRow["ID"];
                    ?>
                </td>
            </tr>
            <tr>
                <td style="width:5%">글 제목</td>
                <td style="width:24%">
                    <?php
                        echo $oneRow["TITLE"];
                    ?>
                </td>
                <td style="width:5%">글 번호</td>
                <td style="width:3%">
                        <?php
                            echo $oneRow["NO"];
                        ?>
                </td>
                <td  style="width:5%">작성 일자</td>
                <td  style="width:3%">
                    <?php
                        echo $oneRow["XDATE"];
                    ?>
                </td>
                
            </tr>
            <tr>
                <td colspan="6">
                
                    <?=$oneRow["CONTENT"]?>
                   
                </td>
            </tr>
            <?php
             }
             //mysqli_close($conn);
            ?>
        </table>
        <br>
        &nbsp;&nbsp;&nbsp;
        <a class="btn btn-primary" href='./ServerSideBoardUpdate.php?board_no=<?=$oneRow["no"]?>'>수정</a>
		<a class="btn btn-danger" href='./ServerSideBoardDelete.php?board_no=<?=$oneRow["no"]?>'>삭제</a>
        <a class="btn btn-secondary" href="./ServerSideBoardList.php">
        	리스트로 돌아가기
        </a>
        </div>
<?php
include "../static/footer.php"
?>