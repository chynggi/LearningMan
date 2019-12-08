<?php
include "./header_dbms.php"
?>
<!-- 경계선 -----------------------------------------------------------------  -->

        <!-- board_add_action.php로 넘기는 폼 -->
    	<form class="form-horizontal" action="../static/BoardInsertAction.php" method="post">
    		<div class="form-group">
    			<label for="exampleInputTitle1" class="col-sm-2 control-label">글 제목	:</label>
    			<div class="col-sm-10">
    			     <!-- 글 제목 입력 상자 -->
    				<input class="form-control"name="board_title" id="title" type="text" placeholder="Title"/>
    			</div>
    		</div>
    		<div class="form-group">
    			<label for="exampleInputContent1" class="col-sm-2 control-label">글 내용 :</label>
    			<div class="col-sm-10">
    			     <!-- 글 내용 입력 텍스트영역 -->
    				<textarea class="form-control"name="board_content" 
    				id="content" rows="5" cols="50" placeholder="Content"></textarea>
    			</div>
    		</div>
    		    		
    		<div>
    			<input type="hidden" name = "board_id" value=" <?=$_SESSION["id"]?> ">
    			<input type="hidden" name = "dbname" value="DBMSBOARD">
        		&nbsp;
        		<!-- 글 입력 버튼 -->
        		<button class="btn btn-success" type="submit" value="저장">저장</button>
        		&nbsp;
        		<!-- 입력 내용 초기화 버튼 -->
        		<button class="btn btn-primary" type="reset" value="초기화">초기화</button>
        		&nbsp;
        		<!-- 리스트로 돌아가는 버튼 -->
        		<input type="button" class="btn btn-primary pull-right" 
         			style="border-radius: 12px; border: none; background-color: #000; 
         			font-family:GyeonggiBatangOTF" value="돌아가기" onClick="history.go(-1)">
        		
    		</div>    		
    	</form>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>  
  
    <script type="text/javascript">
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
     
 
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>
</body>
</html>