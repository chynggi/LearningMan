<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="java.util.List" %>
<%@ page import="dto.Board" %>
<!DOCTYPE html>
<html>
<jsp:include page="../static/header.jsp"></jsp:include>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
				로그인
            </h2>
        </div>
        <hr>
        <%
        if (session.getAttribute("message") != null){
        %>
        <div class="alert alert-danger" role="alert">
  <strong><%=session.getAttribute("message")%></strong>
</div>
        <%
        }        
        %>
        <div class="loginForm_box">
        	<form name="loginForm" action="./login.do" method="post">
        		<div class="ID_form">
        			<input class="id" type="text" name="id" placeholder="&nbsp;&nbsp;아이디">
        		</div>
        		<div class="PW_form">
        			<input class="pw" type="password" name="password" placeholder="&nbsp;&nbsp;비밀번호">
        		</div>
        		<div class="subM_form">
        			<input class="loginBtn" type="submit" value="로그인">
        		</div>
			</form>
        </div>
      </div>
	</div>
	</div>
<jsp:include page="../static/footer.html"></jsp:include>