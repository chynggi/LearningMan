<?php
include "../static/header.php"
?>        
    <style>
            table {
                table-layout: fixed;
                word-wrap: break-word;
            }
        </style>
        <div class="container">
        <h1 class="display-4">ServerSide 게시판 게시글 수정</h1>
        <?php
            require_once('../static/BoardDAOFunction.php');
            $key = $_GET["board_no"];
            $oneRow = selectOne($key,"SSBOARD");
            if($oneRow){
        ?>
        <br>
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
	<input type="hidden" name = "dbname" value="SSBOARD">
<<<<<<< HEAD
	<button class="btn btn-success" type="submit">수정</button>
	            &nbsp;&nbsp;&nbsp;
     <a class="btn btn-secondary" href="./ServerSideBoardList.php"> 리스트로 돌아가기</a>
=======
	<button class="btn btn-success" type="submit">저장</button>
	            &nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="submit">글 수정</button>
            &nbsp;&nbsp;
            <a class="btn btn-primary" href="./ServerSideBoardList.php"> 리스트로 돌아가기</a>
>>>>>>> refs/remotes/origin/master
        </form>
        </div>
	
	
		
	
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