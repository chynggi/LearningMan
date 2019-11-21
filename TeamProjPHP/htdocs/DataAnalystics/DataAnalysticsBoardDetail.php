<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>러닝맨 데이터 분석 게시판 게시글 내용</title>
        <link rel="stylesheet" href="./css/bootstrap.css">
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
		<link href="./css/boost.css" rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="./css/bootstrap.css">
		<script type="text/javascript" src="./js/bootstrap.js"></script>
    	<style>
            table {
                table-layout: fixed;
                word-wrap: break-word;
            }
        </style>
    </head>

    <body>
        <h1 class="display-4">데이터 분석 게시판 게시글 내용</h1>
        <?php
	   $conn = mysqli_connect("localhost","root","","team"); // mysqli 커넥션 객체 생성
        
	   if($conn){ // 커넥션 객체 생성 여부 확인
            echo "연결 성공<br>";	    
        } else {
            die("연결 실패 - ".mysqli_error());
        }
        $board_no = $_GET["board_no"];
        echo $board_no."번재 글 내용<br>";
        
        $sql = "SELECT board_no, board_title, board_content, board_user, board_date FROM board WHERE board_no = '".$board_no."'";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            echo "조회 성공<br>";            
        } else {
            echo "조회 실패 - ".mysqli_error($conn);
        }        
    ?>
        <table class="table table-bordered" style="width:50%">
            <?php
		      if($row = mysqli_fetch_array($result)){ // resilt 변수에 담긴 값을 row 값에 저장하여 테이블에 출력
		      ?>
            <tr>
                <td style="width:5%">작성자</td>
                <td style="width:40%" colspan="5">
                    <?php
                        echo $row["board_user"];
                    ?>
                </td>
            </tr>
            <tr>
                <td style="width:5%">글 제목</td>
                <td style="width:24%">
                    <?php
                        echo $row["board_title"];
                    ?>
                </td>
                <td style="width:5%">글 번호</td>
                <td style="width:3%">
                        <?php
                            echo $row["board_no"];
                        ?>
                </td>
                <td  style="width:5%">작성 일자</td>
                <td  style="width:3%">
                    <?php
                        echo $row["board_date"];
                    ?>
                </td>
                
            </tr>
            <tr>
                <td colspan="6">
                    <?=$row["board_content"]?>
                </td>
            </tr>
            <?php
             }
             //mysqli_close($conn);
            ?>
        </table>
        <br>
        &nbsp;&nbsp;&nbsp;
        <a href='./DataAnalysticsBoardUpdate.php?board_no=<?=$row["board_no"]?>'>수정</a>
		<a href='./DataAnalysticsBoardDelete.php?board_no=<?=$row["board_no"]?>'>삭제</a>
        <a class="btn btn-primary" href="./DataAnalysticsBoardList.php">
        	리스트로 돌아가기
        </a>
    </body>
</html>