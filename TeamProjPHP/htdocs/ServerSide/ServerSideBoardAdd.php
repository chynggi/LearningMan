<?php
include "../static/header.php"
?>
<div class="container">
		<form class = "form-horizontal" action = "../static/BoardInsertAction.php" method = "post">		
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">제목</span>
			</div>
			<input type="text" id="title" name = "board_title" class="form-control"
				aria-label="Sizing example input"
				aria-describedby="inputGroup-sizing-default">
		</div>
		<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">내용</span>
  </div>
  <textarea rows="20" id = "content" name = "board_content" class="form-control" aria-label="With textarea">
  
  
  </textarea>
  </div>
<br>
	<input type="hidden" name = "board_id" value=" <?=$_SESSION["id"]?> ">
	<input type="hidden" name = "dbname" value="SSBOARD">
	<button class="btn btn-success" type="submit">저장</button>
	<a class="btn btn-secondary" href="./ServerSideBoardList.php"> 리스트로 돌아가기</a>
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
	</body>
</html>
<?php
include "../static/footer.php"
?>