<!DOCTYPE html>
<html lang="ko">
<head>
  <title>러닝맨 데이터 분석</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="./css/bootstrap.css" rel='stylesheet' type='text/css'>
  <link href="./css/boost.css" rel='stylesheet' type='text/css'>

  <script>
		$(document).ready(function() {			
			$('#head_div').load('header.php');
		});
  </script>

</head>

<body>
  <div id="head_div"></div>
  <hr>
  <!-- Main Content -->
  <div class="container">
		<div class="row">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aasrgF5LWdU"></iframe>			
			</div>	
		</div>	
  </div>
  <hr>
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
        <p>Schema형태의 유무, 쉽게 말해 형태가 있는지 없는지로 우선 분류하며, 형태가 있으면서 연산(Calculable)가능한 것인가 불가능한 것인가에 따라 기준이 나뉜다.</p>
        <p>형태가 있으면서 연산이 가능한 것이 정형 데이터, 형태는 있지만 연산이 불가능한 것이 반정형 데이터, 형태도 없고 연산도 불가능하면 비정형 데이터로 구분한다.</p>
        <br>
        
        <h3>데이터의 기본적인 형태</h3>
        <p>기본적으로 질적 자료와 양적 자료로 나뉘며, 양적 자료는 이산형 자료와 연속형 자료로 나뉘게 된다.</p>
        <p>질적 자료는 숫자로 나타내는게 아닌 자료, 양적 자료는 숫자로 나타난 자료이다.</p>
        <p>이산형 자료는 1개, 2개, 3개등과 같이 숫자를 세어서 갯수가 나오는 자료를 나타내며, 연속형 자료는 체중, 온도, 길이처럼 측정된 자료를 나타낸다.</p>
        <br>
        
        <h3>데이터 분석 실습</h3>
        <p>교육은 R언어로 진행되어 2019년 신년사 텍스트 데이터를 Crawling을 활용해 Word Cloud를 표를 나타냈다.</p>
        <table align = "center">
	        <tr colspan = "2">
    		    <td>
        			<img src="./DataAnalysticsImg/텍스트데이터분석워드클라우딩.jpg" style="max-width: 100%; height: auto;">        
        		</td>
        	
        		<td>
        			<img src="./DataAnalysticsImg/텍스트데이터분석원형그래프.png" style="max-width: 100%; height: auto;">        
        		</td>
			</tr>
        </table>
        <br>
		<p></p>	
		
	        
        <div class="container">
    		<div class="row">
      			<div class="col-lg-8 col-md-10 mx-auto" align = "center">
        			<a class="btn btn-primary" href="./DataAnalysticsBoardAdd.php"> 질문 하기</a>
        			<a class="btn btn-primary" href="./DataAnalysticsBoardList.php"> 질문 게시판</a>
        		</div>
        	</div>
        </div>
        
        
        
                
        </form>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
