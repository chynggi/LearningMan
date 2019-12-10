<!DOCTYPE html>
<html>
<head>
<Title>러닝맨 데이터 분석 게시판 리스트</Title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="wIDth=device-wIDth, initial-scale=1, shrink-to-fit=NO">
  <meta name="description" content="">
  <meta name="author" content="">

<style type="text/css">
.jumbotron {
	background-image: url('./DataAnalysticsImg/jumbotronBackground.jpg');
	background-size: cover;
	text-shadow: black 0.5em 0.5em 0.5em;
	color: black;
}
.img-button1 {
        background: url( "./DataAnalysticsImg/글쓰기.png" ) NO-repeat;
        border: none;
        wIDth: 32px;
        height: 32px;
        cursor: pointer;
      }
</style>
</head>

<body>
	<?php
    include "../static/header.php"
    ?>
	<?php 
	require_once('../static/BoardDAOFunction.php');
	$Rows = selectAll('DABOARD');		
  	?>
  	<table id="dataTable" class="table table-bordered" border="1" align = "center" style="width:60%;"> 
     	<thead>
			<th align = "center" bgcolor = "#3e5baa" style="width:10%;"><font color = "white">#</font></th>
			<th align = "center" bgcolor = "#3e5baa" style="width:65%;"><font color = "white">제목</font></th>
			<th align = "center" bgcolor = "#3e5baa" style="width:13%;"><font color = "white">작성자</font></th>
			<th align = "center" bgcolor = "#3e5baa" style="width:12%;"><font color = "white">작성일</font></th>
		</thead>	
		<tbody>
	<?php foreach($Rows as $key => $val){?>
		<tr>			
			<td align = "center" style="width:10%;"><font color = "black"><?=$val["NO"]?></font></td>
			<td align = "center" style="width:65%;"><font color = "black"><a href="./DataAnalysticsBoardDetail.php?board_no=<?=$val['NO']?>"><?=$val["TITLE"]?></a></font></td>
			<td align = "center" style="width:13%;"><font color = "black"><?=$val["ID"]?></font></td>
			<td align = "center" style="width:12%;"><font color = "black"><?=$val["XDATE"]?></font></td>			
		</tr>
	<?php }?>
		</tbody>	
			<tr>            	
            	<td align = "center" colspan = "20">
            		<a class="btn btn-primary2" href="./DataAnalysticsBoardAdd.php" >
  					<img src="./DataAnalysticsImg/글쓰기.png" width="30" height="30" title = "글쓰기" alt="글쓰기 로고">
  					</a>
            	</td>           	
            </tr>           
        </table> 
    <?php
    include "../static/footer.php"
    ?> 
</body>
</html>