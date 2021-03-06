<%@ page language='java' contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ page import="java.util.*"%>
<%@ page import="java.io.PrintWriter"%>
<%@ page import="dao.BoardDAO"%>
<%@ page import="dto.Board"%>
<%@ page import="common.MBUtils"%>
<%@ page import="org.apache.ibatis.session.SqlSession"%>

<html lang="ko">
<head>

<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>게시판</title>

<!-- Bootstrap core CSS -->
<link href="../static/vendor/bootstrap/css/bootstrap.min.css"
	rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="../static/vendor/fontawesome-free/css/all.min.css"
	rel="stylesheet" type="text/css">
<link
	href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="../static/css/clean-blog.min.css" rel="stylesheet">

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
		if (session.getAttribute("id") != null) {
			id = (String) session.getAttribute("id");
		}
		int pageNumber = 1;
		if (request.getParameter("pageNumber") != null) {
			pageNumber = Integer.parseInt(request.getParameter("pageNumber"));
		}
	%>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top"
		id="mainNav" style="font-family: GyeonggiBatangOTF;">
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
					<li class="nav-item"><a class="nav-link" style="font-size: 13px;" href="../index.jsp">About</a></li>
					<li class="nav-item"><a class="nav-link" style="font-size: 13px;" href="../oop/List.do">OOP</a></li>
					<li class="nav-item"><a class="nav-link" style="font-size: 13px;" href="../DBMSBoard/board_list.jsp">DBMS</a>	</li>
					<li class="nav-item"><a class="nav-link" style="font-size: 13px;" href="../ServerSide/List.do">Server Side</a></li>
					<li class="nav-item"><a class="nav-link" style="font-size: 13px;" href="../FRAMEWORK/board_list.jsp">Frame Works</a></li>
					<li class="nav-item"><a class="nav-link" style="font-size: 13px;" href="../DataAnalystics/DataAnalysticsMain.jsp">Data Analystics</a></li>
				</ul>
			</div>
		</div>
	</nav>


	<!-- Page Header -->
	<header class="masthead"
		style="background-image: url('dbms3.png')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<%
							if (session.getAttribute("name") == null || session.getAttribute("name").equals("")) {
						%>
						<p class="M_btn">
							<a class="col-lg-8 col-md-10 mx-auto" href="../login/Login.jsp"
								style="font-family: GyeonggiBatangOTF;">로그인</a> <a
								class="col-lg-8 col-md-10 mx-auto" href="../member/member.jsp"
								style="font-family: GyeonggiBatangOTF;">회원가입</a>
						</p>
						<%
							} else {
								String user_name = (String) session.getAttribute("name");
						%>
						<p class="M_btn">
							<a class="col-lg-8 col-md-10 mx-auto"
								style="font-family: GyeonggiBatangOTF;"><strong><%=user_name%></strong>님
								환영합니다.</a> <a class="col-lg-8 col-md-10 mx-auto"
								href="../member/MemberInfo.do"
								style="font-family: GyeonggiBatangOTF;">본인정보 수정</a> <a
								class="col-lg-8 col-md-10 mx-auto" href="../login/logout.do"
								style="font-family: GyeonggiBatangOTF;">로그아웃</a>
						</p>
						<%
							}
						%>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Post Content -->
	<article>
		<div class="container">
			<div class="row">
				<table class="table table-striped"
					style="font-size: 15px; font-family: GyeonggiBatangOTF; 
					text-align: center; border: 1xp solid #dddddd">
					<thead style="color: #fff; background-color: #382825;">
						<tr>
							<th style="text-align: center;">번호</th>
							<th style="text-align: center;">제목</th>
							<th style="text-align: center;">작성자</th>
							<th style="text-align: center;">날짜</th>
						</tr>
					</thead>

					<tbody style="background-color: #766f6d;">
						<%
							SqlSession sqlSession = MBUtils.getSession();
							BoardDAO dao = sqlSession.getMapper(BoardDAO.class);
							List<Board> list = dao.selectAll("DBMSBOARD");
							for (int i = 0; i < list.size(); i++) {
						%>

						<tr
							style="background-color: #766f6d; font-size: 15px; color: #fff; border: none;">
							<td><%=list.get(i).getNo()%></td>
							<td><a href="./info.do?no=<%=list.get(i).getNo()%>"><%=list.get(i).getTitle()%></a></td>
							<td><%=list.get(i).getId()%></td>
							<td><%=list.get(i).getDate()%></td>
						</tr>

					</tbody>
					<%
						}
					%>
				</table>

				<a href="dbms_Board.jsp" class="btn btn-primary float-right"
					style="border-radius: 12px; border: none; background-color: #382825; font-size: 15px; font-family: GyeonggiBatangOTF">글쓰기</a>
			</div>
		</div>
	</article>

	<hr>
<script src="../static/js/demo/datatables-demo.js"></script>
<jsp:include page="../static/footer.html"></jsp:include>