<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>게시글 정보</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
	<style>
        table{
            table-layout: fixed;
            word-wrap: break-word;
        }
    </style>
	<script type="text/javascript" src="./js/bootstrap.js"></script>
</head>

<body>
	<h1 class = "display-4">board_detail.php</h1>
	<?php
	   $conn = mysqli_connect("localhost","root","","test"); // mysqli 커넥션 객체 생성
        
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
	<table class = "table table-bordered" style = "width:50%">
		<?php
		if($row = mysqli_fetch_array($result)){ // resilt 변수에 담긴 값을 row 값에 저장하여 테이블에 출력
		?>
		<tr>
			<td style = "width:5%">작성자</td>
			<td style = "width:40%" colspan = "5">
				<?php 
			      echo $row["board_user"];			
			    ?>
			</td>
		</tr>
		<tr>
			<td style = "width:5%">제목</td>
			<td style = "width:25%">
				<?php 
			      echo $row["board_title"];			
			    ?>
			</td>
			<td style = "width:5%">번호</td>
			<td style = "width:3%">
				<?php 
			      echo $row["board_no"];			
			    ?>
			</td>
			<td style = "width:5%">작성일</td>
			<td style = "width:3%">
				<?php 
			      echo $row["board_date"];			
			    ?>
			</td>
		</tr>
		<tr>
			<td colspan = "6">
				<?php 
			      echo $row["board_content"];			
			    ?>
			</td>
		</tr>
		<?php 
		}
		?>
	</table>	
	<br>
        &nbsp;&nbsp;&nbsp;
        <a class="btn btn-primary" href="./board_list.php">목록으로 이동</a>
        <script type="text/javascript" src="./js/bootstrap.js"></script>

</body>
</html>