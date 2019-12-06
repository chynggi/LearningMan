<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="java.util.List" %>
<%@ page import="dto.Board" %>
<!DOCTYPE html>
<html>
<head>
	<title>OOP 리스트</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<meta name="description" content="">
  		<meta name="author" content="">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<link rel ="stylesheet" href = "./css/bootstrap.css">
  		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 		<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
 		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  		<link href="css/clean-blog.min.css" rel="stylesheet">   
		<link href="./css/boost.css" rel='stylesheet' type='text/css'>
		<link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

		<script type="text/javascript" src="./js/bootstrap.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  

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
<jsp:include page="../static/header.jsp"></jsp:include>
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
	<% for(Board x:list) { %>             
    <tr>
		<td scope="col"><%=x.getNo()%></td>
		<td scope="col"><a href="./Info.do?no=<%=x.getNo()%>"><%=x.getTitle()%></td>
		<td scope="col"><%=x.getId()%></td>		
		<td scope="col"><%=x.getDate()%></td>					
	</tr>
	<% } %>    	
	<tr>
		<div class="clearfix">
        <a class="btn btn-primary float-right" href="./OOP_Add.jsp">글쓰기 </a>
    	</div>
	</tr>
  </tbody>
</table>	
</div>
<hr>
<jsp:include page="../static/footer.html"></jsp:include>
</body>
</html>