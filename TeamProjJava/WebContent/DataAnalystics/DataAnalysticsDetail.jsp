<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="dto.Board"%>
<!DOCTYPE html>
<html>
<head>
	<title>러닝맨 데이터 분석 게시판 게시글 보기</title>
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
<jsp:include page="../static/header.jsp"></jsp:include>
	<%
	request.setCharacterEncoding("UTF-8");
	Board post = (Board)request.getAttribute("data");
	%>
<article>
    <div class="container">
	<form action = "./DataAnalysticsUpdate.jsp">
		<div class="input-group mb-3">		
			<div class="input-group-prepend">			
				<span class="input-group-text" id="inputGroup-sizing-default">제목</span>
			</div>
			<input type="text" name = "title" class="form-control" readonly value="<%=post.getTitle()%>">
		</div>
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
		<a class="btn btn-primary" href="./DataAnalysticsList.do">리스트로 돌아가기</a>
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