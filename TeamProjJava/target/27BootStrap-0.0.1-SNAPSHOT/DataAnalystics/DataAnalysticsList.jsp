<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="java.util.List" %>
<%@ page import="dto.Board" %>
<!DOCTYPE html>
<html>
<head>
	<title>러닝맨 데이터 분석 게시판 리스트</title>
<link href="./css/boost.css" rel='stylesheet' type='text/css'>
<jsp:include page="../static/header.jsp"></jsp:include>

		
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
<hr>
<%
request.setCharacterEncoding("UTF-8");
List<Board> list = (List<Board>)request.getAttribute("data");
%>
<div class="container">
<table id="dataTable" class="table">
  <thead>
     <tr>
        <th scope="col" style="background-color: #3e5baa; text-align: center;"><font color = "white">번호</font></th>
        <th scope="col" style="background-color: #3e5baa; text-align: center;"><font color = "white">제목</font></th>
        <th scope="col" style="background-color: #3e5baa; text-align: center;"><font color = "white">작성자</font></th>
        <th scope="col" style="background-color: #3e5baa; text-align: center;"><font color = "white">작성일</font></th>
    </tr> 
  </thead>
  <tbody>
	<% for(Board post:list) { %>             
    <tr>
		<td scope="col"><%=post.getNo()%></td>
		<td scope="col"><a href="./Info.do?no=<%=post.getNo()%>"><%=post.getTitle()%></td>
		<td scope="col"><%=post.getId()%></td>		
		<td scope="col"><%=post.getDate()%></td>					
	</tr>
	<% } %>    	
	<tr>
		<div class="clearfix">
        <a class="btn btn-primary float-right" href="./DataAnalysticsAdd.jsp">글쓰기 </a>
    	</div>
	</tr>
  </tbody>
</table>	
</div>
<hr>
<jsp:include page="../static/footer.html"></jsp:include>
</body>
</html>