<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>게시판</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
	type="text/css">
<link
	href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="css/clean-blog.css" rel="stylesheet">


<script>
$(document).ready(function() {
    $('#example').DataTable({
    	stateSave: true,
    	"scrollX": true,
    	"language": {
            "decimal": ".",
            "thousands": ",",
            "info": "보이는페이지 _PAGE_ / _PAGES_",
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Korean.json"
        },
        "lengthMenu": [[5,10, 15, 20,50, -1], [5,10, 15,20, 50, "All"]]
    });
} );
</script>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./Main.php">이야기 福주머니</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./board_list.php">게시판</a>            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./board_add_form.php">글쓰기</a>            
          </li>
        </ul>
      </div>
    </div>
</nav>
<header class="masthead text-center text-white">
    <div class="masthead-content">
    	<div class="container">
            <h1>우리들의 이야기 보따리</h1>
            <h2>"이야기 중 -- 이야기 이야기중 @#%#$&"</h2>
            <p><a class="btn btn-light btn-xl rounded-pill" 
            			data-target="#modal" data-toggle="modal" 
            			style="color:#3190D8; background-color:#FFFFFF;">추석</a></p>
    	</div>
    </div>	
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>
<br>           
</head>

<body>
<!-- ----------------------------------------body구분선------------------------------------------- -->   
        
      	<?php 
      	require_once ('BoardDaoFunction.php');
      	$result = selectAll();
      	?>

     <table id="example" class="table table-striped table-bordered"
		style="width: 100%" border="1">
		
		<thead>

			<th>번호</th>
			<th>제목</th>
			<th>사용자</th>
			<th>날짜</th>
			<th>수정</th>
			<th>삭제</th>

		</thead>
		<tbody>
            <?php
            // 반복문을 이용하여 result 변수에 담긴 값을 row변수에
            // 계속 담아서 row변수의 값을 테이블에 출력한다.
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
    			<td>
                <?=$row["board_no"]?>
                </td>
    			<td>
    			<a href='./board_detail.php?board_no=<?=$row["board_no"]?>'><?=$row["board_title"]?></a>     			
                </td>
    			<td>
                <?=$row["board_user"]?>
                </td>
    			<td>
                <?=$row["board_date"]?>
                </td>
                <td><a href='./board_update_form.php?board_no=<?=$row["board_no"]?>'>수정</a></td>
                <td><a href='./board_delete_form.php?board_no=<?=$row["board_no"]?>'>삭제</a></td>               
            </tr>
             <?php
            } // 와일루프 종료
            ?>
            
        </tbody>
        </table>

<footer class="py-5 bg-black">
                <div class="container">
                <div id="" class="align-center vi" >
                   	 <?php
                   	 
                   	 
                   	 
                     ?>
                    
                	</div>
                  <p class="m-0 text-center text-white small">HelloYou &copy; HI 2019</p>
                </div>            
</footer> 

      <div class="row">
      	<div class="modal" id="modal" tabindex="-1">
      		<div class="modal-dialog">
      			<div class="modal-content">
      				<div class="modal-header"  >
      				<!-- 띄워쓰기...글씨를 가운데로 보내는게 기억이 안남.. -->
     					★ 즐거운 추석 ★ 					
     					<button class="close" data-dismiss="modal">&times;</button>
      				</div>
      				<div class="modal-body" style="text-align: center;">
      					<img src="img/1.jpg" id="imgview" style="width: 100%; height: 100%;" >
      					<br>보름달처럼 밝고 행복이 가득 찬 풍요로운 추석 보내세요~♪ 
      					
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
		
</body>

</html>