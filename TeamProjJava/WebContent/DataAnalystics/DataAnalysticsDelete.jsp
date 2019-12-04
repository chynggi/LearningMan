<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="java.util.List" %>
<%@ page import="dto.Board" %>
<!DOCTYPE html>
<html lang="ko">
<head>
	<title>러닝맨 데이터 분석 게시글 작성</title>
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
<%
request.setCharacterEncoding("UTF-8");
List<Board> list = (List<Board>)request.getAttribute("data");
for(Board x:list) { %>
    <jsp:include page="../static/header.jsp"></jsp:include>        
        <form action="delete.do" method="post" colspan = "20">
        <table class="table table-bordered" border="1" align = "center" style="width:60%;">
            
                <tr align = "center">
                    <td>게시글을 삭제하시겠습니까</td>
                </tr>
                <tr align = "center">
                    <td><input type="text" name="no">
                        <input type="hidden" name="no" value="<% x.getNo(); %>">
                    </td>
                </tr>
                <tr align = "center">
                    <td><button class="btn btn-primary" type="submit">삭제</button>
                    <a class="btn btn-primary" href="./DataAnalysticsList.jsp">취소</a></td>
                </tr>
            </table>
        </form>    
   <jsp:include page="../static/footer.html"></jsp:include>
<% } %> 
</body>
</html>