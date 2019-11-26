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
	   $conn = oci_connect("localhost","root","","team"); // oci 커넥션 객체 생성
        
	   if($conn){ // 커넥션 객체 생성 여부 확인
            echo "연결 성공<br>";	    
        } else {
            die("연결 실패 - ".oci_error());
        }
        $NO = $_GET["NO"];
        echo $NO."번재 글 내용<br>";
        
        $sql = "SELECT NO, Title, Content, ID, XDate FROM board WHERE NO = '".$NO."'";
        $result = oci_query($conn, $sql);
        
        if($result){
            echo "조회 성공<br>";            
        } else {
            echo "조회 실패 - ".oci_error($conn);
        }        
    ?>
        <table class="table table-bordered" style="width:50%">
            <?php
		      if($row = oci_fetch_array($result)){ // resilt 변수에 담긴 값을 row 값에 저장하여 테이블에 출력
		      ?>
            <tr>
                <td style="width:5%">작성자</td>
                <td style="width:40%" colspan="5">
                    <?php
                        echo $row["ID"];
                    ?>
                </td>
            </tr>
            <tr>
                <td style="width:5%">글 제목</td>
                <td style="width:24%">
                    <?php
                        echo $row["Title"];
                    ?>
                </td>
                <td style="width:5%">글 번호</td>
                <td style="width:3%">
                        <?php
                            echo $row["NO"];
                        ?>
                </td>
                <td  style="width:5%">작성 일자</td>
                <td  style="width:3%">
                    <?php
                        echo $row["XDate"];
                    ?>
                </td>
                
            </tr>
            <tr>
                <td colspan="6">
                    <?=$row["Content"]?>
                </td>
            </tr>
            <?php
             }
             //oci_close($conn);
            ?>
        </table>
        <br>
        &nbsp;&nbsp;&nbsp;
        <a href='./DataAnalysticsBoardUpdate.php?NO=<?=$row["NO"]?>'>수정</a>
		<a href='./DataAnalysticsBoardDelete.php?NO=<?=$row["NO"]?>'>삭제</a>
        <a class="btn btn-primary" href="./DataAnalysticsBoardList.php">
        	리스트로 돌아가기
        </a>
    </body>
</html>