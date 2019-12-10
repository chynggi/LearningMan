<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="dto.Board"%>
<!DOCTYPE html>
<html>
<head>
	<title>러닝맨 데이터 분석 게시판 리스트</title>
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
	request.setCharacterEncoding("UTF-8");
	Board post = (Board)request.getAttribute("data");
	%>
<article>
    <div class="container">
	<form action = "./OOP_Update.jsp" method="post">
		<div class="input-group mb-3">		
			<div class="input-group-prepend">			
				<span class="input-group-text" id="inputGroup-sizing-default">제목</span>
			</div>
			<input type="text" name = "title" class="form-control" readonly value="<%=post.getTitle()%>">
		</div>
		<input type="hidden" name = "no" value="<%=post.getNo()%>">
		
		<input type="hidden" name = "xdate" value="<%=post.getDate()%>">
		<div class="input-group">
  			<div class="input-group-prepend">
    			<span class="input-group-text">내용</span>
  			</div>
  			<textarea rows="20" readonly name = "content" class="form-control" aria-label="With textarea"><%=post.getContent()%></textarea>
		</div>
	<br>
	<% try { %>
	<% if (session.getAttribute("id").equals(post.getId())){ %>
	 	<button type="submit" class="btn btn-primary">수정</button>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal">삭제</button>
	<% } 
	  else if (session.getAttribute("id").equals("admin")){ %>
	 	<button type="submit" class="btn btn-primary" >수정</button>	
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal">삭제</button>
	<% }
	} catch (Exception e) {		
	} %>
		<a class="btn btn-primary" href="oop/List.do">리스트로 돌아가기</a>
	</form>	
	</div>
</article>
<hr> 
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
        	게시글을 삭제하면 복구 할 수 없습니다.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">취소</button>
        <a class="btn btn-primary" href="./delete.do?no=<%=post.getNo()%>">삭제</a>
      </div>
    </div>
  </div>
</div>
<jsp:include page="../static/footer.html"></jsp:include>