<!DOCTYPE html>
<html>
    <head>
    	<title>이야기 福주머니</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- 테이블 크기 조절용 css -->
<style>
        .vi{
            color: #FFFFFF;
            margin-bottom: 5px;
            padding:15px;
            width:100%
        }
        .align-center { text-align: center; }
        .align-justify { text-align: justify; }
        .margin-center {
            margin-left:auto;
            margin-right:auto;
        }
            
</style>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/bootstrap.css">
        
        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Custom styles for this template -->
          <link href="csss/one-page-wonder.min.css" rel="stylesheet">
              
        <!-- cdn 방식 -->
        <script src="https://ajax.googleapis.com/ajax/jquery/3.3.1/jquery.min.js"></script>    	
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        
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
                <h4>
                                                            ※ 많은 사람들과 사용하는 <br>
                                             만큼 매너를 잘 지켜주세요^^! ※
                </h4>
            </div>
        </div>	
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
		</header>
    	</div>	
    	<br>
    </head>
    
    <!-- ----------------------------------------body구분선------------------------------------------- -->   
   
    <body>
    	
      	<?php 
          	//board_list.php 에서 넘어온 글 번호 저장 및 출력
          	$board_no = $_GET["board_no"];
      	?>
        
         <!-- board_delete_action.php 페이지로 POST 방식을 이용하여 값 전송 -->
         <form action="./board_delete_action.php" method="post">

         	<table class="table table-bordered" style="width: 100%">
         		<tr>
         			<td>글 비밀 번호를 입력하세요.</td>
         		</tr>
         		<tr>
         			<td><input type="text" name="board_pw" >
         				<input type="hidden" name="board_no" value="<?php echo $board_no ?>">
         			</td>
         		</tr>
          		<tr>
         			<td><button class="btn btn-primary" type="submit"/>글 삭제 버튼</td>
         		</tr>
         	</table>
         </form>
   <footer class="py-5 bg-black">
        <div class="container">
        	<div id="" class="align-center vi" >           
        		 <?=$board_no."번째 글 삭제 페이지<br>"?>
                 <br>
                 <br>        
            	<p class="m-0 text-center text-white small">
            		          	
					비워내기 비워내기<br>
					털털 훌훌~<br>
                </p>
                <br>
            	<p class="m-0 text-center text-white small">HelloYou &copy; HI 2019</p>
        	</div>
        </div>
 	</footer>
	</body>
</html>