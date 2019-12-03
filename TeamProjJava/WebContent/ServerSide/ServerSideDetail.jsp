<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="dto.Board"%>
<!DOCTYPE html>
<html>
<jsp:include page="../static/header.jsp"></jsp:include>

<%
	request.setCharacterEncoding("UTF-8");
	Board post = (Board)request.getAttribute("data");


%>
<article>
    <div class="container">
	<form action = "ServerSideUpdate.jsp">
		<div class="input-group mb-3">
		
			<div class="input-group-prepend">
			
				<span class="input-group-text" id="inputGroup-sizing-default">제목</span>
			</div>
			<input type="text" name = "title" class="form-control"
				aria-label="Sizing example input"
				aria-describedby="inputGroup-sizing-default" readonly value="<%=post.getTitle()%>">
		</div>
		<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">내용</span>
  </div>
  <textarea rows="20" readonly name = "content" class="form-control" aria-label="With textarea" ><%=post.getContent()%></textarea>
</div>
	<br>
<% if (session.getAttribute("id").equals(post.getId())){ %>
	 <button type="submit" class="btn btn-primary" >수정</button>
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">삭제</button>
	 <% }else if (session.getAttribute("id").equals("admin")){ %>
	 <button type="submit" class="btn btn-primary" >수정</button>	
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">삭제</button>
	<% }%>
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
        	삭제한 뒤에는 복구할 수 없습니다.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
        <a class="btn btn-danger" href="{% url 'HomePage:ssdelete' post.no %}">삭제</a>
      </div>
    </div>
  </div>
</div>
<jsp:include page="../static/footer.html"></jsp:include>