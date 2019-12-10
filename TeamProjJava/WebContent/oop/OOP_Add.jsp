<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="ko">
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
<hr>
<div class="container">
      <div class="row">
        <div class="post-preview">
            <h2 class="post-title">
				OOP
            </h2>
            <h3 class="post-subtitle" style="margin-bottom: 80px;">
              	객체지향 프로그래밍
            </h3>
        </div>
      <form method="post" action="new.do" style="width:100%; height: 100%;">		
		<table class="table table-bordered" style="text-align: center; border: 1xp solid #dddddd" style="width:50%">
			<tr>
                <td align = "center" bgcolor = "#0085a1" style="width:10%">
                	<font color = "white">
                	제목
                	</font>
                </td>
                <td style="width:50%">
                	<input class = "form-control" type="text" name="title" id = "title" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder = "제목을 입력하시오">
                </td>
            </tr> 
            <tr>
                <td align = "center" bgcolor = "#0085a1" style="width:10%">               		
                	<font color = "white">
                	내용
                	</font>               		
                </td>
                <td style="width:50%">
                	<textarea class = "form-control" name = "content" id = "content" rows = "5" cols = "500" aria-label="With textarea" placeholder = "내용을 입력하시오">
                	</textarea>
                </td>
            </tr> 
            <tr>
            	<td align = "center" colspan = "2">
                	<input class = "btn btn-primary2" type = "hidden" name = "id" value="<%=session.getAttribute("id")%>">
						&nbsp;&nbsp;&nbsp;
					<input class = "btn btn-primary2" type = "hidden" name = "tablename" value="SSBOARD">
						&nbsp;&nbsp;&nbsp;
					<button class = "btn btn-primary2" type = "submit">저장</button>
						&nbsp;&nbsp;&nbsp;
					<button class = "btn btn-primary2" type = "reset">초기화</button>
						&nbsp;&nbsp;&nbsp;
					<a class="btn btn-primary2" href="./DataAnalysticsList.jsp">취소</a>
				</td>
			</tr>
		</table>		
      </form>
	</div>
  </div>
<hr>
<jsp:include page="../static/footer.html"></jsp:include>
</body>
</html>