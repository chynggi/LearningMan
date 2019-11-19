<?php?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EOM</title>

<link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="./css/boost.css" rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<style type="text/css">
.jumbotron {
	background-image: url('./images/jumbotronBackground.jpg');
	background-size: cover;
	text-shadow: black 0.5em 0.5em 0.5em;
	color: black;
}
</style>
	<script>
		$(document).ready(function() {			
			$('#head_div').load('./common/head.php');
			
			$('#foot_div').load('./common/foot.php');
		});
	</script>
</head>
<body>	
	<div id="head_div"></div>
	<form>		
		<table class="table table-bordered" align = "center" style="width:90%">
			<tr>
                <td colspan="2" align = "center" bgcolor = "#3e5baa" style="width:100%"><font color = "white">텍스트 데이터 분석</font></td>
            </tr>
			<tr>
				<td colspan="1" align = "center"  style="width:50%">				
					<img src = "./images/텍스트데이터분석원형그래프.png" title = "텍스트데이터분석원형그래프" width="500" height="470">				
				</td>
				<td colspan="1" align = "center"  style="width:50%">				
					<img src = "./images/텍스트데이터분석막대그래프.png" title = "텍스트데이터분석막대그래프" width="500" height="530">				
				</td>							
			</tr>	
			
			<tr>
				<td colspan="1" align = "center"  style="width:50%">				
					<img src = "./images/텍스트데이터분석워드클라우딩.jpg" title = "텍스트데이터분석워드클라우딩" width="500" height="470">				
				</td>
				<td colspan="1" align = "center"  style="width:50%">				
					<img src = "./images/통합기반데이터분석군집분석.png" title = "통합기반데이터분석군집분석" width="500" height="530">				
				</td>							
			</tr>
					
			<tr>
				<td colspan="2" align = "left"  style="width:100%">
					<h3>데이터 분석</h3>
					<h5>Crawling 작업을 활용한 데이터 분석을 교육받았습니다.</h5>					
				</td>
			</tr>  			
		</table>
	</form>
		
	<div id="foot_div"></div>
</body>
</html>