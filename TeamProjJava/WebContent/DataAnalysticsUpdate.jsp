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
	<title>러닝맨 데이터 분석 게시판 게시글 수정</title>
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<meta name="description" content="">
  		<meta name="author" content="">
  		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 		<link href='https://fonts.googleapis.com/css%family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
 		<link href='https://fonts.googleapis.com/css%family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  		<link href="css/clean-blog.min.css" rel="stylesheet">
		<link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
		<link href="./css/boost.css" rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="./css/bootstrap.css">
		<script type="text/javascript" src="./js/bootstrap.js"></script>

</head>
<body>
<jsp:include page="header.jsp"></jsp:include>

<%
// request.setCharacterEncoding("utf-8");
SqlSession sqlSession = MBUtils.getSession(); 
BoardDAO dao 		  = sqlSession.getMapper(BoardDAO.class);

List<Board> boardUpdate = null;

String id = (String)session.getAttribute("id");
// response.setContentType("text/html;charset=UTF-8");

try {
	boardUpdate = dao.selectAll();
} catch (Exception e) {
	e.printStackTrace();
}

sqlSession.close();
%>
<c:set var = "boardupdate" value="<%=boardUpdate%>" />
<form action="./BoardInsert.do" method="post">
<c:forEach var="x" items="${boardupdate}">
     <table class="table table-bordered" style="width:50%">
          <tr>
              <td style="width:10%">번호</td>
              <td style="width:20%"><input type="text" name="NO" value="${x.getNo()}" readonly></td>
          </tr>         
          <tr>
              <td style="width:10%">제목</td>
              <td style="width:20%"><input type="text" name="Title" value="${x.getTitle()}"></td>
          </tr>
          <tr>
              <td style="width:10%">내용</td>
              <td style="width:20%">
              <textarea name="Content" id = "content" rows = "5" cols = "50" wrap = "hard">${x.getContent()}</textarea>
          	  </td>
          </tr>
     </table>
     <br>
            &nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="submit">수정하기</button>
            &nbsp;&nbsp;
            <a class="btn btn-primary" href="./DataAnalysticsBoardList.php">목록이동</a>
        </c:forEach>
        </form>

<jsp:include page="footer.jsp"></jsp:include>
</body>
</html>