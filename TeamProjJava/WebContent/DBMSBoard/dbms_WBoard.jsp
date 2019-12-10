<%@ page language='java' contentType="text/html; charset=UTF-8" pageEncoding="UTF-8" %>
<%@ page import="dto.Board"%>
<!DOCTYPE html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>게시글</title>

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
	String id = null;
	if(session.getAttribute("id") != null){
		id = (String) session.getAttribute("id");		
	}
	Board data = (Board)request.getAttribute("data");
	
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
  <!-- Main Content -->
  <div class="container" >
      <div class="row">
      	<table class="table table-striped" style="text-align: center; ">
			<thead>
				<tr>
					<th colspan="2" style="border-radius: 12px; border: none; color:#ffffff; background-color:#AC5E50 ; text-align: center;">글작성</th>		
				</tr>
			</thead>
		<form action="dbms_Board_update.jsp" method="post">
			<tbody style="border: none; background-color:#DAAB8C;" >
					<tr style="width:100%;height: 5px; border: none;  background-color: #ffffff;"><td style="border: none;"></td></tr>
					<tr >
						<td style="color:#ffffff; border: none; border-radius: 7px 0px 0px 0px;">제목 : </td>
						<td style="border: none; border-radius: 0px 7px 0px 0px;">
						<input type="text" style="width:100%;height: 40px; border: none; border-radius: 5px;" class="form-control" 
							   placeholder="  글 제목" name="title" maxlength="100" value="<%=data.getTitle() %>" readonly></td>
							   <!-- readonly 읽기 전용 -->
					</tr>
					<tr>
						<td style="color:#ffffff; border: none;border-radius: 0px 0px 0px 25px;">내용 : </td>
						<td style="border: none;">
						<textarea class="form-control" placeholder="글 내용" name="content" maxlength="2048" style="width:100%;height: 350px;border-radius: 5px;" readonly="readonly"><%=data.getContent()%></textarea>
						<input type="hidden" name = "no" value="<%=data.getNo()%>">
						</td>
						
					</tr>
				</tbody>				
		</table>
				<button type="submit" class="btn btn-primary pull-right" href="board_list.jsp" style="color:#fff; border-radius: 12px; border: none; background-color: #AC5E50; font-family:GyeonggiBatangOTF">수정</button>
				<a class="btn btn-primary pull-right" style="color:#fff; border-radius: 12px; border: none; background-color: #AC5E50; font-family:GyeonggiBatangOTF" data-toggle="modal" data-target="#deleteModal">삭제</a>
				<input type="button" class="btn btn-primary pull-right" style="border-radius: 12px; border: none; background-color: #AC5E50; font-family:GyeonggiBatangOTF" value="돌아가기" onClick="history.go(-1)">
        </form>
        </div>
  </div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">정말로 삭제 하시겠습니까?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	삭제한 뒤에는 복구할 수 없습니다.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
        <a class="btn btn-danger" href="Delete.do?no=<%=data.getNo()%>">삭제</a>
      </div>
    </div>
  </div>
</div>
  <hr><jsp:include page="../static/footer.html"></jsp:include>