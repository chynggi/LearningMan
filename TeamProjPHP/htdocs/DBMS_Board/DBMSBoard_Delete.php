<?php
include "./header_dbms.php"
?>      	

<?php 
          	//board_list.php 에서 넘어온 글 번호 저장 및 출력
          	$board_no = $_GET["board_no"];
      	?>
        
         <!-- board_delete_action.php 페이지로 POST 방식을 이용하여 값 전송 -->
         <form action="../static/BoardDeleteAction.php" method="post">
         	<table class="table table-bordered" style="width: 100%">
         		<tr>
         			<td>삭제하시겠습니까?</td>
         		</tr>
         		<tr>
         			<td><input type="text" name="board_pw" value="DBMSBOARD" >
         				<input type="hidden" name="board_no" value="<?php echo $board_no ?>">
         			</td>
         		</tr>
          		<tr>
         			<td><button class="btn btn-primary" type="submit"/>글 삭제 버튼</td>
         			<td><input type="button" class="btn btn-primary pull-right" 
         			style="border-radius: 12px; border: none; background-color: #AC5E50; 
         			font-family:GyeonggiBatangOTF" value="돌아가기" onClick="history.go(-1)"></td>
         		</tr>
         	</table>
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
 
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>
</body>
</html>
