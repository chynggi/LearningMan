<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<jsp:include page="../static/header.jsp"></jsp:include>

<div class="container">
	<form action="new.do" method="POST">
	
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">제목</span>
			</div>
			<input type="text" id="title" name = "title" class="form-control"
				aria-label="Sizing example input"
				aria-describedby="inputGroup-sizing-default">
		</div>
		<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">내용</span>
  </div>
  <textarea rows="20" id = "content" name = "content" class="form-control" aria-label="With textarea">
  
  
  </textarea>
  
</div>
<br>
	<input type="hidden" name = "id" value="<%=session.getAttribute("id")%>">
	<input type="hidden" name = "tablename" value="SSBOARD">
	<button class="btn btn-success" type="submit">저장</button>
	</form>

</div>
<hr>
<jsp:include page="../static/footer.html"></jsp:include>