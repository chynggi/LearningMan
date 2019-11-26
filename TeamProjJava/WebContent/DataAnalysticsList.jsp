<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ page import="java.io.PrintWriter"%>
<%@ page import="dao.*"%>
<%@ page import="common.*"%>
<%@ page import="dto.*"%>
<%@ page import="mapper.*"%>
<%@ page import="java.util.*"%>
<%@ page import="java.io.*"%>
<%@ page import="java.sql.*"%>
<%@ page import="java.util.*"%>
<%@ page import="org.apache.ibatis.session.SqlSession"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib prefix="fn" uri="http://java.sun.com/jsp/jstl/functions"%>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>러닝맨 데이터 분석 게시판 리스트</title>
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

<% 
request.setCharacterEncoding("utf-8");
SqlSession sqlSession  = MBUtils.getSession(); 
BoardDAO dao = sqlSession.getMapper(BoardDAO.class);

List<Board> boardList = null;

String id = (String)session.getAttribute("id");
response.setContentType("text/html;charset=UTF-8");

try {
	boardList = dao.selectAll();
} catch (Exception e) {
	e.printStackTrace();
}

sqlSession.close();
%>
</head>

<body>
<jsp:include page="header.jsp"></jsp:include>
<c:set var="boardlist" value="<%=boardList%>" />
  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <table class="table table-striped" style="text-align: center; border: 1xp solid #dddddd">
        	<thead>
        		<tr>
        			<th style="background-color: #3e5baa; text-align: center;"><font color = "white">번호</font></th>
        			<th style="background-color: #3e5baa; text-align: center;"><font color = "white">제목</font></th>
        			<th style="background-color: #3e5baa; text-align: center;"><font color = "white">작성자</font></th>
        			<th style="background-color: #3e5baa; text-align: center;"><font color = "white">날짜</font></th>
         		</tr>
         	</thead>
         	<tbody>
			<c:forEach var="x" items="${boardlist}">
				<tr>
					<td>${x.getNo()}</td>
					<td>${x.getTitle()}</td>
					<td>${x.getId()}</td>		
					<td>${x.getDate()}</td>			
				</tr>
			</c:forEach>
		</tbody>
         </table>
         <a href="dbms_Board.html" class="btn btn-primary pull-right">글쓰기</a>
        </div>
      </div>
    </div>
  </article>
  <hr>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
  <jsp:include page="footer.jsp"></jsp:include>
</body>

</html>