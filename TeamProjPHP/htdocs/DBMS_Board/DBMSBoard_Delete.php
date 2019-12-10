<?php
include "./header_dbms.php"
?>      	

<?php 
          	//board_list.php 에서 넘어온 글 번호 저장 및 출력
          	$board_no = $_GET["board_no"];
      	?>
        <div class="container">  
         <!-- board_delete_action.php 페이지로 POST 방식을 이용하여 값 전송 -->
         <form action="../static/BoardDeleteAction.php" method="post"style="width: 100%">
         	<table class="table table-bordered" >
         		<tr>
         			<td><h4>게시글을 삭제하시겠습니까?</h4></td>
         		</tr>
         	</table>
         </form>
         <input type="hidden" name="dbname" value="DBMSBOARD">
         				<input type="hidden" name="board_no" value="<?php echo $board_no ?>">
         				<button class="btn btn-primary" type="submit"
         					style="border-radius: 12px; border: none; background-color: #000; 
         			        font-family:GyeonggiBatangOTF"
         				>삭제</button>
         <input type="button" class="btn btn-primary pull-right" 
         			style="border-radius: 12px; border: none; background-color: #000; 
         			font-family:GyeonggiBatangOTF" value="돌아가기" onClick="history.go(-1)">
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
