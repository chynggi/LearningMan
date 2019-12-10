<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
	<title>러닝맨 데이터 분석 게시판 게시글 수정</title>
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
<%
	String title = request.getParameter("title");
	String content = request.getParameter("content");
%>
<div class="container">
	<form action="new.do" method="POST">
	<table class="table table-bordered" style="width:50%">                  
          <tr>
              <td style="width:10%" id="inputGroup-sizing-default">
              	제목
              </td>
              <td>
          	  	<input type="text" id="title" name = "title" class="form-control" value=<%=title%>>
          	  </td>         	  
          </tr>
          <tr>
              <td style="width:10%">
              	내용
              </td>
              <td>
                <textarea name="content" id = "content" rows = "5" cols = "50" wrap = "hard"><%=content%></textarea>
          	  </td>
          </tr>
          <tr>
          	  <td colspan = "2">
          	  	<input type="hidden" name = "id" value="<%=session.getAttribute("id")%>">
				<input type="hidden" name = "tablename" value="DABOARD">
				<button class="btn btn-success" type="submit">저장</button>
          	  </td>
          </tr>
     </table>
	</form>
</div>
<hr>
<jsp:include page="../static/footer.html"></jsp:include>
</body>
</html>