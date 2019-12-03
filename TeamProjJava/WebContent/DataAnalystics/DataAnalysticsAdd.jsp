<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="ko">
<head>
	<title>러닝맨 데이터 분석 게시글 작성</title>
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
<hr>
<div class="container">
      <div class="row">
      <form method="post" action="new.do" style="width:100%; height: 100%;">		
		<table class="table table-bordered" style="text-align: center; border: 1xp solid #dddddd" style="width:50%">
			<tr>
                <td align = "center" bgcolor = "#3e5baa" style="width:10%">
                	<font color = "white">
                	제목
                	</font>
                </td>
                <td style="width:50%">
                	<input class = "form-control" type="text" name="title" id = "title" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder = "제목을 입력하시오">
                </td>
            </tr> 
            <tr>
                <td align = "center" bgcolor = "#3e5baa" style="width:10%">               		
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