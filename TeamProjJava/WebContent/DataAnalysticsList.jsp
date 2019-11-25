<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="dto.Board"%>
<%@ page import="dao.BoardDAO"%>
<%@ page import="dao.IDAO"%>
<%@ page import="java.sql.*"%>
<%@ page import="java.util.*"%>
<%@ page import="org.apache.ibatis.session.SqlSession"%>
<%@ page import="common.MBUtils"%>
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
<%
	request.setCharacterEncoding("utf-8");
		String id= (String)session.getAttribute("id");
		response.setContentType("text/html;charset=UTF-8");
		SqlSession sqlSession  = MBUtils.getSession(); 
		BoardDAO dao = sqlSession.getMapper(BoardDAO.class);
		List<Board> data = dao.selectById(id);
		sqlSession.close();
%>

	<jsp:include page="header.jsp"></jsp:include>
     <table class="table table-bordered" border="1" align = "center" style="width:60%;">	
		<tr>
			<td align = "center" bgcolor = "#3e5baa" style="width:10%;"><font color = "white">번호</font></td>
			<td align = "center" bgcolor = "#3e5baa" style="width:65%;"><font color = "white">제목</font></td>
			<td align = "center" bgcolor = "#3e5baa" style="width:13%;"><font color = "white">아이디</font></td>
			<td align = "center" bgcolor = "#3e5baa" style="width:12%;"><font color = "white">작성일</font></td>			
		</tr>			
		<tr>
			<td align = "center" bgcolor = "#e6ebfa">
			<%= x.getNo() %>
            </td>
			<td align = "center">
			<%= x.getTitle() %>
			</td>	
			<td align = "center">
			<%= x.getId() %>
			</td>   
			<td align = "center">
			<%= x.getXdate() %>
			</td>              						
        </tr>           		
		<tr>            	
            <td align = "center" colspan = "20">
            	<a class="btn btn-primary2" href="./DataAnalysticsAdd.jsp" >글쓰기</a>
            </td>           	
        </tr>           
     </table>     
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
	<br>
	<jsp:include page="footer.jsp"></jsp:include>
</body>

</html>