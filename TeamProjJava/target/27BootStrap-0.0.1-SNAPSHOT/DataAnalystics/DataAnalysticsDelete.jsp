<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="java.util.List" %>
<%@ page import="dto.Board" %>
<!DOCTYPE html>
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
List<Board> list = (List<Board>)request.getAttribute("data");
for(Board x:list) { %>     
        <form action="delete.do" method="post" colspan = "20">
        <table class="table table-bordered" border="1" align = "center" style="width:60%;">
            
                <tr align = "center">
                    <td>게시글을 삭제하시겠습니까?</td>
                </tr>
                <tr align = "center">
                    <td><input type="text" name="no">
                        <input type="hidden" name="no" value="<% x.getNo(); %>">
                    </td>
                </tr>
                <tr align = "center">
                    <td><button class="btn btn-primary" type="submit">삭제</button>
                    <a class="btn btn-primary" href="List.do">취소</a></td>
                </tr>
            </table>
        </form>    
   <jsp:include page="../static/footer.html"></jsp:include>
<% } %> 
</body>
</html>