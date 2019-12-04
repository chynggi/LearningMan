<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
    <%@ page import="java.util.List" %>
    <%@ page import="dto.Board" %>
<!DOCTYPE html>
<html>
<jsp:include page="../static/header.jsp"></jsp:include>
<% 
request.setCharacterEncoding("UTF-8");
List<Board> list = (List<Board>)request.getAttribute("data");
%>
<!-- Main Content -->
  <div class="container">
    <table id="dataTable" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">제목</th>
      <th scope="col">작성자</th>
      <th scope="col">작성일</th>
    </tr>
  </thead>
  <tbody>
  <% for(Board x:list){ %>
    <tr>     
    	
    <th scope="row"><%=x.getNo() %></th>
      <td><a href="./Info.do?no=<%=x.getNo() %>"><%=x.getTitle() %></a></td>
      <td><%=x.getId() %></td>
      <td><%=x.getDate() %></td>
   </tr>   
	<% }%>  
  </tbody>
</table>
	<div class="clearfix">
          <a class="btn btn-primary float-right" href="./Insert.do">글쓰기 </a>
     </div>
  </div>

  <hr>
<script src="/static/js/demo/datatables-demo.js"></script>
<jsp:include page="../static/footer.html"></jsp:include>