<%@ page language='java' contentType="text/html; charset=UTF-8" pageEncoding="UTF-8" %>
<%@ page import="java.util.*" %>
<%@ page import="java.io.PrintWriter" %>
<%@ page import="dao.BoardDAO" %>
<%@ page import="dto.Board" %>
<%@ page import="common.MBUtils" %>
<%@ page import="org.apache.ibatis.session.SqlSession" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%> 
<!DOCTYPE html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>게시판</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

<style>
.M_btn>a {
	text-decoration: none;
	color: #fff;
}
.M_btn>a:hover {
	color: #000;
}
</style>

</head>
<body>
<% 
	String id = null;
	if(session.getAttribute("id") != null){
		id = (String) session.getAttribute("id");		
	}
	int pageNumber = 1;
	if(request.getParameter("pageNumber") != null){
		pageNumber = Integer.parseInt(request.getParameter("pageNumber"));
	}
%>

  <!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="font-family:GyeonggiBatangOTF;">
		<div class="container">
			<a class="navbar-brand" href="index.jsp">Learning Man</a>
			<button class="navbar-toggler navbar-toggler-right" type="button"
				data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu <i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="index">About</a>
					</li>
					<li class="nav-item"><a class="nav-link"
						href="OOP_Board/oop_B_index.php">OOP</a></li>
					<li class="nav-item"><a class="nav-link" href="board_list.jsp">DBMS</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="contact">Server
							Side</a></li>
					<li class="nav-item"><a class="nav-link" href="contact">Frame
							Works</a></li>
					<li class="nav-item"><a class="nav-link" href="contact">Data
							Analystics</a></li>
				</ul>
			</div>
		</div>
	</nav>


  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/dbms3.png')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<p class="M_btn"  >
							<a class="col-lg-8 col-md-10 mx-auto" href="loginorReg.jsp" style="font-family:GyeonggiBatangOTF">로그인</a> 
							<a class="col-lg-8 col-md-10 mx-auto" href="loginorReg.jsp" style="font-family:GyeonggiBatangOTF">회원가입</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <table class="table table-striped"  style="text-align: center; border: 1xp solid #dddddd">
        	<thead>
        		<tr>
        			<th style="background-color: #bbdefb; text-align: center;">No</th>
        			<th style="background-color: #e3f2fd; text-align: center;">Title</th>
        			<th style="background-color: #bbdefb; text-align: center;">ID</th>
        			<th style="background-color: #e3f2fd; text-align: center;">Date</th>
         		</tr>
         	</thead>
         	<tbody>
         		<% 
	         		SqlSession sqlSession = MBUtils.getSession();
	        		BoardDAO dao = sqlSession.getMapper(BoardDAO.class);
         			List<Board> list = dao.selectAll();
         			for(int i=0; i<list.size(); i++){
         		%>
         	
         		<tr>
        			<td><%= list.get(i).getNo() %></td>
        			<td><%= list.get(i).getTitle() %></td>
        			<td><%= list.get(i).getId() %></td>
        			<td><%= list.get(i).getXdate()%></td>
         		</tr>
          	</tbody>
          	<% } %>
         </table>
     	<c:if test="${sessionScope.sessionID!=null}"> <!-- 로그인을 해야만 글쓰기가 보인다. -->
         <a href="Board_insert.html" class="btn btn-primary pull-right">글쓰기</a>
         </c:if>
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
