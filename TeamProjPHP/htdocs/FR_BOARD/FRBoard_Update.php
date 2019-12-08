<?php
include "./header_dbms.php"
?>
<div class="container">
        <?php
            require_once('../static/BoardDAOFunction.php');
            $key = $_GET["board_no"];
            $Rows = selectOne($key,"DBMSBOARD");
            if($Rows){
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
				aria-describedby="inputGroup-sizing-default"  value="<?php echo $Rows["TITLE"]?>">
		</div>
		<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">내용</span>
  </div>
  <textarea rows="20" id = "content" name = "board_content" class="form-control" aria-label="With textarea">
  <?php echo trim($Rows["CONTENT"])?>
  
  </textarea>
  </div>
<br>
	<input type="hidden" name = "board_id" value=" <?=$_SESSION["id"]?> ">
	<input type="hidden" name = "board_no" value="<?php echo $Rows["NO"]?>">
	<input type="hidden" name = "dbname" value="DBMSBOARD">
	<button class="btn btn-success" type="submit">저장</button>
            &nbsp;&nbsp;
            <a class="btn btn-primary" href="./board_list.php">목록</a>
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
    <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>     
 
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>
</body>
</html>