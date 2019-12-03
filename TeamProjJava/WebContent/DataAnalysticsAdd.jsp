<%@ page language='java' contentType="text/html; charset=UTF-8" pageEncoding="UTF-8" %>
<%@ page import="java.io.PrintWriter" %>
<%@ page import="dao.BoardDAO" %>
<%@ page import="dao.IDAO" %>
<%@ page import="java.io.PrintWriter" %>
<!DOCTYPE html>
<html lang="ko">
<head>
	<title>러닝맨 데이터 분석 게시글 작성</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<meta name="description" content="">
  		<meta name="author" content="">
  		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 		<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
 		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  		<link href="css/clean-blog.min.css" rel="stylesheet">   
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="./css/bootstrap.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel = "stylesheet" href = "./css/bootstrap.css">
		<script type="text/javascript" src="./js/bootstrap.js"></script>
		<link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
		<link href="./css/boost.css" rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
</head>
<body>
<jsp:include page="./header.jsp"></jsp:include> 
<% 
	String id = null;
	if(session.getAttribute("id") != null){
		id = (String) session.getAttribute("id");		
	}
	int pageNumber = 1;
	if(request.getParameter("pageNumber") != null){
		pageNumber = Integer.parseInt(request.getParameter("pageNumber"));
	}
%>
  <div class="container">
      <div class="row">
      <form method="post" action="./Insert.do" style="width:100%; height: 100%;">
		
		<table class="table table-bordered" style="text-align: center; border: 1xp solid #dddddd" style="width:50%">
			<tr>
                <td align = "center" bgcolor = "#3e5baa" style="width:10%"><font color = "white">제목</font></td>
                <td style="width:50%">
                <input class = "form-control" type="text" name="Title" id = "title" placeholder = "제목을 입력하시오">
                </td>
            </tr> 
            <tr>
                <td align = "center" bgcolor = "#3e5baa" style="width:10%"><font color = "white">내용</font></td>
                <td style="width:50%">
                <textarea class = "form-control" name = "Content" id = "content" rows = "5" cols = "500" placeholder = "내용을 입력하시오"></textarea>
                </td>
            </tr> 
			<tr>
            	<td align = "center" colspan = "2">
                		&nbsp;&nbsp;&nbsp;
            	<button class="btn btn-primary2" type="submit">완료</button>
            			&nbsp;&nbsp;&nbsp;
            	<button class = "btn btn-primary2" type = "reset">초기화</button>
						&nbsp;&nbsp;&nbsp;        			
            	<a class="btn btn-primary2" href="./DataAnalysticsList.jsp">돌아가기</a>
                </td>
            </tr>
		</table>		
      </form>
	</div>
  </div>

  <hr>
    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
<jsp:include page="./footer.jsp"></jsp:include>
</body>
</html>