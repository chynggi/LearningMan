<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>러닝맨 데이터 분석 게시판 게시글 수정</title>
        <link rel="stylesheet" href="../static/css/bootstrap.css">        
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<meta name="description" content="">
  		<meta name="author" content="">
  		
		  		        
    </head>
    
    <body>
        <?php
        include "../static/header.php"
        ?>  
  		<hr>
        <?php
            require_once('../static/BoardDAOFunction.php');
            $key = $_GET["board_no"];
            $oneRow = selectOne($key,"DABOARD");
            if($oneRow){
        ?>
        <hr>
        
        <form class = "form-horizontal" action="../static/BoardUpdateAction.php" method="post">
           <div class="container">
			<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">제목</span>
			</div>
			<input type="text" id="title" name = "board_title" class="form-control"
				aria-label="Sizing example input"
				aria-describedby="inputGroup-sizing-default"  value="<?php echo $oneRow["TITLE"]?>">
			</div>
			<div class="input-group">
  			<div class="input-group-prepend">
    			<span class="input-group-text">내용</span>
  			</div>
  			<textarea rows="20" id = "content" name = "board_content" class="form-control" aria-label="With textarea">
  			<?php echo trim($oneRow["CONTENT"])?>
  
  			</textarea>
  			</div>  			
  			<br>
			<input type="hidden" name = "board_id" value=" <?=$_SESSION["id"]?> ">
			<input type="hidden" name = "board_no" value="<?php echo $oneRow["NO"]?>">
			<input type="hidden" name = "dbname" value="DABOARD">
			<button class="btn btn-success" type="submit">수정</button>
	            &nbsp;&nbsp;&nbsp;    		
           </div>
        </form>
        
        <script type = "text/javascript">
			$("#title").change(function(){
				checkTitle($('#title').val());
			});
			$("#content").change(function(){
				checkContent($('#content').val());
			});

			function checkTitle(title){
				if(title.length < 2){
					alert("제목을 2자 이상 설정하시오");
					$('#title').val('').focus();
					return false;
				} else {
					return true;
				}
			}

			function checkContent(content){
				if(content.length < 2){
					alert("내용을 2자 이상 설정하시오");
					$('#content').val('').focus();
					return false;
				} else {
					return true;
				}
			}			
		</script>
        <br>
        <?php
            }
        ?>        
        <?php
        include "../static/footer.php"
        ?>         
    </body>
</html>