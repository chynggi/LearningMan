<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ page import="java.io.PrintWriter"%>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>러닝맨 데이터 분석 게시판 리스트</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<meta name="description" content="">
  		<meta name="author" content="">
  		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 		<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
 		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  		<link href="css/clean-blog.min.css" rel="stylesheet">
		<link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
		<link href="./css/boost.css" rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="./css/bootstrap.css">
	<script type="text/javascript" src="./js/bootstrap.js"></script>

<style type="text/css">
.jumbotron {
	background-image: url('./DataAnalysticsImg/jumbotronBackground.jpg');
	background-size: cover;
	text-shadow: black 0.5em 0.5em 0.5em;
	color: black;
}
.img-button1 {
        background: url( "./DataAnalysticsImg/글쓰기.png" ) no-repeat;
        border: none;
        width: 32px;
        height: 32px;
        cursor: pointer;
      }
</style>
</head>
<body>
<jsp:include page="header.jsp"></jsp:include>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <table class="table table-striped" style="text-align: center; border: 1xp solid #dddddd">
        	<thead>
        		<tr>
        			<th style="background-color: #bbdefb; text-align: center;">No</th>
        			<th style="background-color: #e3f2fd; text-align: center;">Title</th>
        			<th style="background-color: #bbdefb; text-align: center;">ID</th>
        			<th style="background-color: #e3f2fd; text-align: center;">Date</th>
         		</tr>
         	</thead>
         	<tbody>
         		<tr>
        			<td>1</td>
        			<td>테스트중</td>
        			<td>홍길동</td>
        			<td>2019-11-21</td>
         		</tr>
         	</tbody>
         </table>
         <a href="dbms_Board.html" class="btn btn-primary pull-right">글쓰기</a>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
 
          <p class="copyright text-muted">TEST &copy; DBMS 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>