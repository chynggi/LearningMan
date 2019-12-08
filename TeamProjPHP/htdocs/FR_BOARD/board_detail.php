<?php
include "./header_dbms.php"
?>
	<div class="container">
		<?php
            require_once('../static/BoardDAOFunction.php');
            $key = $_GET["board_no"];
            $Rows = selectOne($key,'DBMSBOARD');
        ?>
    
    <table class="table table-bordered" style="width: 100%">
    	<?php 
    	   // result 변수에 담긴 값을 row 변수에 저장하여 테이블에 출력
    	if($Rows != null){
    	?>
      	<tr>
    		<td style="width: 100">글 제목</td>
    		<td style="width: 70%">
				<?php 
				    echo $Rows["TITLE"];
			     ?>
			</td>
    	</tr>
    	<tr>
    		<td style="width: 70; height: 300">작성 내용</td>
			<td style="width: 35%">
    		<?php 
    		      echo '<pre>'.$Rows["CONTENT"].'</pre>';
    		?>
    		</td>
    	</tr>
		<?php 
         }
		?>
    </table>
    
    <br>
    &nbsp;&nbsp;
		<a style="border-radius: 12px; border: none; background-color: #382825; font-size: 15px; font-family: GyeonggiBatangOTF" class="btn btn-primary" href='./FRBoard_Update.php?board_no=<?=$Rows["NO"]?>'>수정</a>
		<a style="border-radius: 12px; border: none; background-color: #382825; font-size: 15px; font-family: GyeonggiBatangOTF" class="btn btn-danger" href='./FRBoard_Delete.php?board_no=<?=$Rows["NO"]?>'>삭제</a>
   		<a style="border-radius: 12px; border: none; background-color: #382825; font-size: 15px; font-family: GyeonggiBatangOTF" class="btn btn-primary" href="./board_list.php">리스트로돌아가기</a>
    <br>
    </div>
    
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>     
 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">정말로 삭제 하시겠습니까?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	삭제한 뒤에는 복구할 수 없습니다.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
        <a class="btn btn-danger" href="../static/BoardDeleteAction.php?board_no=<?=$Rows["NO"]?>">삭제</a>
      </div>
    </div>
  </div>
</div>
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>
</body>
</html>
