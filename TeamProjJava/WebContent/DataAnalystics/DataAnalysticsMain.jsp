<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="ko">

<head>
	<title>러닝맨 데이터 분석</title>
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
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aasrgF5LWdU"></iframe>		
		</div>	
	</div>	
  </div>
  <hr>
  
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <form name="sentMessage" id="contactForm" novalidate>
        <h3>데이터 분석은 무엇인가?</h3>
        <p>분석의 대상에 대한 문제점을 찾고, 해결할 데이터를 수집 분석하여 해결방안을 찾아 이를 한눈에 파악할 수 있도록 시각적으로 표현해 업무와 시스템에 도입하는 것을 의미한다.</p>
        <br>
        
        <h3>분석은 어떻게 이루어 지는가?</h3>
        <p>데이터 분석은 문제의 발견, 데이터 수집 및 가공, 데이터 분석 및 액션의 과정을 통하여 이루어진다.</p>
        <br>
        
        <h3>데이터의 구분은?</h3>
        <p>데이터는 형태에 따라 정형 데이터와 반정형 데이터 그리고 비정형 데이터가 있다.</p> 
        <br>
        
        <h3>구분하는 기준은?</h3>
        <p>데이터 구조, 표현 방법, 데이터간 관계 형식언어(Schema)형태의 유무, 쉽게 말해 형태가 있는지 없는지로 우선 분류하며, 형태가 있으면서 연산(Calculable)가능한 것인가 불가능한 것인가에 따라 기준이 나뉜다.</p>
        <p>형태가 있으면서 연산이 가능한 것이 정형 데이터, 형태는 있지만 연산이 불가능한 것이 반정형 데이터, 형태도 없고 연산도 불가능하면 비정형 데이터로 구분한다.</p>
        <br>
        
        <h3>데이터의 기본적인 형태</h3>
        <p>기본적으로 질적 자료와 양적 자료로 나뉘며, 양적 자료는 이산형 자료와 연속형 자료로 나뉘게 된다.</p>
        <p>질적 자료는 숫자로 나타내는게 아닌 자료, 양적 자료는 숫자로 나타난 자료이다.</p>
        <p>이산형 자료는 1개, 2개, 3개등과 같이 숫자를 세어서 갯수가 나오는 자료를 나타내며, 연속형 자료는 체중, 온도, 길이처럼 측정된 자료를 나타낸다.</p>
        <br>
        
        <h3>데이터 분석 실습</h3>
        <table align = "center">
	        <tr colspan = "3">
    		    <td>
        			<img src="./DataAnalysticsImg/텍스트데이터분석워드클라우딩.jpg" style="max-width: 100%; height: auto;">        
        		</td>
        		<td>
        			<img src="./DataAnalysticsImg/텍스트데이터분석원형그래프.png" style="max-width: 100%; height: auto;">        
        		</td>       	      		
        	</tr>
        </table>
        <p>교육은 R언어로 진행되어 2019년 신년사 텍스트 데이터, 제주특별자치도의 인기 여행지를 Crawling을 활용해 Word Cloud와 그래프를 나타냈다.</p>        
        <p>당연히 미리 조사해둔 Excel파일 및 csv파일등을 이용해서도 데이터 분석을 이행 할 수 있다.</p>              
        <br>
        <div class="container">
    		<div class="row">
      			<div class="col-lg-8 col-md-10 mx-auto" align = "center">
        			<a class="btn btn-primary" href="./List.do"> 질문 게시판 이동</a>
        		</div>
        	</div>
        </div>
             
        </form>
      </div>
    </div>
  </div>
  <hr>
  <jsp:include page="../static/footer.html"></jsp:include>
</body>
</html>