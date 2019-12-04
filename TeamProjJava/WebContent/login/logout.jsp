<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>로그아웃처리</title>
</head>
<body>
<script >alert('로그아웃 되었습니다.')</script>
<% 
	session.removeAttribute("id");
	session.removeAttribute("name");
	session.removeAttribute("pw");
	session.removeAttribute("loginOk");
	String root = (String) session.getAttribute("root");
	response.sendRedirect("index.jsp");
%>
</body>s
</html>