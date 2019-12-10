<%@ page language='java' contentType="text/html; charset=UTF-8" pageEncoding="UTF-8" %>

<!DOCTYPE html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>게시판</title>

  <!-- Bootstrap core CSS -->
  <link href="../static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../static/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

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
<% 
request.setCharacterEncoding("UTF-8");
	String id = null;
	if(session.getAttribute("id") != null){
		id = (String) session.getAttribute("id");		
	}
	String title = request.getParameter("title");
	String content = request.getParameter("content");


%>
<body>

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
				<ul class="navbar-nav ml-auto" >
					<li class="nav-item"><a class="nav-link" href="../index.jsp">About</a></li>
					<li class="nav-item"><a class="nav-link" href="../oop/List.do">OOP</a></li>
					<li class="nav-item"><a class="nav-link" href="../DBMSBoard/board_list.jsp">DBMS</a>	</li>
					<li class="nav-item"><a class="nav-link" href="../ServerSide/List.do">Server Side</a></li>
					<li class="nav-item"><a class="nav-link" href="../FRAMEWORK/board_list.jsp">Frame Works</a></li>
					<li class="nav-item"><a class="nav-link" href="../DataAnalystics/DataAnalysticsMain.jsp">Data Analystics</a></li>
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
  <!-- Main Content -->
  <div class="container" >
      <div class="row">
      <form method="post" action="./adjust.do" style=" width:100%;height: 100%; font-family:GyeonggiBatangOTF;font-size: 15px;">
		<table class="table table-striped" style="text-align: center; ">
			<thead>
				<tr>
					<th colspan="2" style="border-radius: 12px; border: none; color:#ffffff; background-color:#AC5E50 ; text-align: center;">글작성</th>		
				</tr>
			</thead>
		
			<tbody style="border: none; background-color:#DAAB8C;" >
					<tr style="width:100%;height: 5px; border: none;  background-color: #ffffff;"><td style="border: none;"></td></tr>
					<tr >
						<td style="color:#ffffff; border: none; border-radius: 7px 0px 0px 0px;">제목 : </td>
						<td style="border: none; border-radius: 0px 7px 0px 0px;">
						<input type="text" style="width:100%;height: 40px; border: none; border-radius: 5px;" class="form-control" 
							   placeholder="  글 제목" name="title" maxlength="100" value="<%=title%>"></td>
					</tr>
					<tr>
						<td style="color:#ffffff; border: none;border-radius: 0px 0px 0px 25px;">내용 : </td>
						<td style="border: none;">
						<textarea class="farm-control" placeholder="  글 내용" name="content" maxlength="2048" style="width:100%;height: 350px;border-radius: 5px;"><%=content%></textarea>
						</td>
					</tr>
				</tbody>				
		</table>
				<input type="hidden" name = "no" value="<%=request.getParameter("no")%>">
				<input type="hidden" name = "id" value="<%=session.getAttribute("id")%>">
				<input type="hidden" name = "tablename" value="DBMSBOARD">
				<input type="button" class="btn btn-primary pull-right" style="border-radius: 12px; border: none; background-color: #AC5E50; font-family:GyeonggiBatangOTF" value="돌아가기" onClick="history.go(-1)">
				<button class="btn btn-success" type="submit" style="border-radius: 12px; border: none; background-color: #AC5E50; font-family:GyeonggiBatangOTF" >저장</button>
				
      </form>
        </div>
  </div>

  <hr><jsp:include page="../static/footer.html"></jsp:include>