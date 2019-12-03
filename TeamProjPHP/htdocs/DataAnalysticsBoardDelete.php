<!DOCTYPE html>
<html>
    <head>
    	<title>러닝맨 데이터 분석 게시판 게시글 삭제</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/bootstrap.css">
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        
        <link rel="stylesheet" href="./css/bootstrap.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel = "stylesheet" href = "./css/bootstrap.css">
		<script type="text/javascript" src="./js/bootstrap.js"></script>
	
		<link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
		<link href="./css/boost.css" rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
        
        <script>
		$(document).ready(function() {			
			$('#head_div').load('header.php');
		});
  		</script>
        
    </head>
    <body>
    	<div id="head_div"></div>        
        <?php 
            $NO = $_GET["NO"];
            echo $NO."번째 글 삭제 페이지<br>";
        ?>
        <form action="./DataAnalysticsBoardDeleteAction.php" method="post">
            <table class="table table-bordered" align = "center" style="width:35%" border="2">
                <tr>
                    <td align = "center" bgcolor = "#3e5baa" style="width:100%"><font color = "white">게시글을 삭제하려면 비밀 번호를 입력하세요.</font></td>
                </tr>
                <tr align = "center">
                    <td><input type="text" name="PW">
                        <input type="hidden" name="NO" value="<?php echo $NO ?>">
                    </td>
                </tr>
                <tr align = "center">
                    <td><button class="btn btn-primary" type="submit">삭제</button>
                    <a class="btn btn-primary" href="./DataAnalysticsBoardList.php">취소</a></td>
                </tr>
            </table>
        </form>    
          <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <p class="copyright text-muted">test &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript" charset="utf-8"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/contents_any.js" type="text/javascript" charset="utf-8"></script>  
    </body>
</html>