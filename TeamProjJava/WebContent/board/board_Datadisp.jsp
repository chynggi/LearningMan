<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ page import="vo.Board"%>
<%@ page import="dao.BoardDAO"%>
<%@ page import="dao.IDAO"%>
<%@ page import="java.sql.*"%>
<%@ page import="java.util.*"%>
<%@ page import="org.apache.ibatis.session.SqlSession"%>
<%@ page import="common.MBUtils"%>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>게시글수정</title>
</head>
<body>
	<%
		request.setCharacterEncoding("utf-8");
		String id= (String)session.getAttribute("id");
		response.setContentType("text/html;charset=UTF-8");
		SqlSession sqlSession  = MBUtils.getSession(); 
		BoardDAO dao = sqlSession.getMapper(BoardDAO.class);
		List<Board> data =  dao.selectById(id);
		sqlSession.close();
	%>
	
	<h1><%=id%>님 입력자료 목록
	</h1>
	<div align="right">
		<button type="button" onclick="location.href='form_board.jsp'">
			뒤로</a>
	</div>
	<hr>
	<table border='1'>
		<tr>
			<th>게시글</th>
			<th>아이디</th>
			<th>제목</th>
			<th>내용</th>
			<th>게시일자</th>
		</tr>
		<%
			for (Board x : data) {
		%>
		<tr>
			<td><%=x.getNo()%></td>
			<td><%=x.getId()%></td>
			<td><%=x.getTitle()%></td>
			<td><%=x.getContent()%></td>
			<td><%=x.getXdate()%></td>
			
			<td><button type="button"
					onclick="location.href='homebookAdjust.do?no=<%=x.getNo()%>'">
					수정<%=x.getNo()%></td>
		</tr>
		<%
			}
		%>
	</table>
</body>
</html>