<?php
include "./header_dbms.php"
?>
	<div class="container">
		<?php
            require_once('../static/BoardDAOFunction.php');
           // $key = $_GET["board_no"];
            $Rows = selectAll('DBMSBOARD');
        ?>
    
    <table class="table table-bordered" style="width: 70%">
    	<?php 
    	   // result 변수에 담긴 값을 row 변수에 저장하여 테이블에 출력
    	if($Rows != null){
    	?>
    	<tr>
    		<td style="width: 100">작성자</td>
    		<td style="width: 70%" >
				<?php 
				    echo $Rows["ID"];
			     ?>
			</td>
    	</tr>
    	<tr>
    		<td style="width: 100">글 제목</td>
    		<td style="width: 70%">
				<?php 
				    echo $Rows["TITLE"];
			     ?>
			</td>
    	</tr>
    		<tr>
    		<td style="width: 70">글 번호</td>
    		<td style="width: 35%">
				<?php 
				    echo $Rows["NO"];
			     ?>
			</td>
		
    	</tr>
    	<tr>
			<td style="width: 70">작성 일자</td>
			<td style="width: 35%">
				<?php 
			 	   echo $Rows["XDATE"];
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
		<a class="btn btn-primary" href='./DBMSBoard_Update.php?board_no=<?=$Rows["no"]?>'>수정</a>
		<a class="btn btn-danger" href='./DBMSBoard_Delete.php?board_no=<?=$Rows["no"]?>'>삭제</a>
   		<a class="btn btn-primary" href="./board_list.php">리스트로돌아가기</a>
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
 
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>
</body>
</html>
