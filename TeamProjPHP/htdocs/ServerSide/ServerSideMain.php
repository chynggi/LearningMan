<?php
include "../static/header.php"
?>
<H3>데이터 분석 Data Analystics 2019.11.01 ~ 2019.11.21</H3>
<H5><br>
목차<br>
1. 텍스트 데이터분석<br>
2. 통계기반 데이터분석<br>
3. 머신러닝기반 데이터분석<br>
</H5>
<br>
내용진행예정 <br>
 1.텍스트 데이터분석 <br>
 	---------------------------------------------------------------
 	텍스트 마이밍
 	
 	비정형화된 데이터를 처리
 	(블로그, 온라인 포럼, 리뷰사이트, 뉴스기사, 트위터)
 	활용 뉴스를 주제별로 정리, 이메일 스팸 분류등
 	
 	용어
 	S1(문서/문장) - First we consider the spreadsheet model
 	S2(문서/문장) - Then we consider another model
 	
 	말뭉치(코퍼스 corpus)					- 관련된 문서들의 집합 - s1 s2
 	
 	용어 - 문서 행렬 term-document matrix 	- 문서와 문서에 있는 단어를 행렬로 정리
 	
 	파싱(parsing),토큰화(tokenization)	    - 텍스트의 단어, 절을 분리하는 작업
 	용어(token) 							- 문장을 구분 기호에 의해서 나누어진 기본 단위
 	어간 추출(strmming) 					- 단어의 어간을 추출하는 과정 (traveling > travel)
 	불용어(stop words) 					- 의미 없는 단어 (the, and, of 등)
 	---------------------------------------------------------------
 
 
 	a. R설치부터 wordcloud, R언어를 통한 텍스트데이터 분석 <br>
 		R 특징
 		im memory computing          	- 빠른 처리 속도
 		object oriented programming  	- 데이터, 함수, 차트등 모든 것이 오브젝트로 관리
 		package 						- 최신의 알고리즘 및 방법롭이 패키지로 제공됨
 		visualization 					- 분석에 통찰을 부여할 수 있는 그래픽에 대한 강력한 지원
 	
	b. crawling을 이용한 wordcloud <br>
	c. 텍스트데이터 graph <br>
	
 2.통계기반 데이터분석 <br>
 	수집된 내부,외부 데이터 및 정형·비정형 데이터를 활용하여 분석 목적에 따라 가설을 설정하고 필요한 데이터셋를 편성하여 통계기반 데이터 분석 모델을 만들고 평가하는 능력
 	적용범위(통계기반 데이터 분석을 위하여 정형/비정형 데이터를 분석 목적에 따라 가설을 설정하고 분석 모델을 만들어 평가하는 업무에 적용)
 	
 
  A. csv 군집분석(Clustering) 데이터 <br>
	특징
	a. 집단 또는 범주에 대한 사전 정보가 없는 데이터의 경우 주어진 관측값을 사용하여 전체를 몇 개의 유사한 집단으로 그룹화하여 각 집단의 성격을 파악하기 위한 기법
	b. 모집단을 미리 정의되어 있지 않은 부분집합으로 분류
	c. 클러스터링이 끝난 후에야 그룹의 특성을 파악
 
 	분류와의 차이
 	a. 분류 - 그룹의 수와 특성이 미리 정해짐
 	b. 군집 - 그룹의 수와 특성이 미리 정해 지지 않음
 	
 	단계
 	1.알맞은 속성 선택(Choose appropriate attributes)
	         첫번째(이자 아마도 가장 중요한) 단계는 데이타를 군집화하는데 중요하다고 판단되는 속성들을 선택하는 것이다. 예를 들어 우울증에 대한 연구라고 하면 다음과 같은 속성들을 평가할 수 있다. 정신과적 증상, 이학적증상, 발병나이, 우울증의 횟수, 지속기간, 빈도, 입원 횟수, 기능적 상태, 사회력 및 직업력, 현재 나이, 성별, 인종, 사회경제적 상태, 결혼상태, 가족력, 과거 치료에 대한 반응 등. 아무리 복잡하고 철저하게 군집분석을 하더라도 잘못 선택한 속성을 극복할 수 없다.(A sophisticated cluster analysis can’t compaensate for a poor choice of variables.)

	2.데이타 표준화(Scale the data)
	  	분석에 사용되는 변수들의 범위에 차이가 있는 경우 가장 큰 범위를 갖는 변수가 결과에 가장 큰 영향을 미치게 된다. 이런 결과가 바람직하지 않은 경우 데이타를 표준화 할 수 있다. 가장 많이 사용되는 방법은 각 변수를 평균 0, 표준편차 1로 표준화하는 것이다.

	df1 <- apply(mydata, 2, function (x) {(x-mean(x))/sd(x)})
	R의 scale() 함수를 사용하면 같은 결과를 얻을 수 있다. 웹R에서도 이 방법을 사용한다. 그 외에 각 변수를 최대값으로 나누는 방법도 있고(df2) 각 값에서 평균을 빼고 median absolute deviation으로 나눌 수도 있다(df3).

	df2 <- apply(mydata, 2, function (x) {x/max(x)})
	df3 <- apply(mydata, 2, function (x) {(x-mean(x))/mad(x)})
	
	3.이상치 선별(Screen for outliers)
	  	많은 군집분석 방법은 이상치에 민감하기 때문에 이상치가 있는 경우 군집분석 결과가 왜곡된다. 단변량 이상치의 경우 outlier 패키지의 함수를 사용할 수 있고 다변량 이상치의 경우 mvoutlier 패키지에 있는 함수들을 사용하여 이상치를 선별하고 제거할 수 있다. 또 다른 방법은 이상치에 대하여 강건한(robust) 군집분석 방법을 쓸 수 있는데 PAM(partitioning around medoids)이 대표적인 방법이다.

	4.거리의 계산 (Calcuate distance)
	  	두 관찰치 간의 거리를 측정하는 방법은 여러가지가 있는데 “euclidean”, “maximum”, “manhattan”, “canberra”, “binary” 또는 “minkowski” 방법을 사용할 수가 있다. R의 dist()함수를 쓰면 위의 방법들을 이용하여 거리를 계산할 수 있으며 웹R 에서도 이 함수를 사용하여 거리를 계산한다. 디폴트 값은 유클리드 거리(“euclidean”)이다. 유클리드 거리는 다음 절에서 다룬다.

	5.군집 알고리즘 선택
	  	다음 단계로 군집 방법을 선택하여야 한다. 계층적군집(Hierarchical agglomerative clustering)은 150 관찰치 이하의 적은 데이타에 적합하다. 분할군집은 보다 많은 데이타를 다룰 수 있으나 군집의 갯수를 정해주어야 한다. 계층적 군집/분할 군집을 선택한 후 구체적인 방법을 선택하여야 한다. 각각의 방법은 장단점이 있기 때문에 하나 이상의 방법을 사용해보고 어느 방법이 강건한지 평가해 볼 수 있다.

	6.하나 이상의 군집분석 결과 얻음

	7.군집의 갯수 결정
	  	군집분석 최종 결과를 얻기 위해 몇 개의 군집이 있는지 결정해야 한다. NbClust패키지의 NbClust()힘수를 사용할 수 있다. 웹R에서는 clValid패키지를 사용하여 군집 갯수 결정에 도움을 주고자 하였다.

	8.최종결과 획득

	9.분석 결과의 시각화
	  	최종 결과를 시각화할 때 계층적 분석은 dendrogram으로 나타내고 분할군집은 이변량 cluster plot으로 시각화한다.

	10.군집분석 결과의 해석
	  	최종 결과를 얻은 후 그 결과를 해석하고 가능하면 이름도 지어야 한다. 한 군집의 관측치가 갖고 있는 공통점은 무엇인가? 다른 군집과 어떤 점이 다른가? 이 단계는 각 군집의 통계량을 요약함으로써 얻어진다. 연속형 변수의 경우 평균 또는 중앙값을 계산하고 범주형 변수가 있는 경우 범주별로 각 군집의 분포를 보아야 한다.

	11.결과의 확인(validate the result)
	  	다음과 같은 질문을 가져본다. “이 군집 결과가 실제 존재하는가? 이 데이타셋에서만 또는 이 방법에서만 나타나는 것은 아닌가?” 다른 군집 방법 또는 다른 데이타셋이 사용될 경우 같은 군빕이 얻어질 것인가? 결과의 validation을 위해 fpc, clv 또는 clValid 패키지 등을 사용할 수 있다. 웹R에서는 clValid 패키지를 사용한다
 	
 	각 개체간의 유사도를 측정하기 위해 거리 함수를 이용
 	
 	거리계산 방법
 	유클리드 거리(Euclidean Distance) - 두 점 사이의 거리를 계산할 때 흔히 쓰는 방법이다 이 거리를 사용하여 유클리드 공간을 정의할 수 있으며 이 거리에 대응하는 노름을 유클리드 노름(Euclidean norm)이라고 부른다.
 	상관관계기반 유사성(Correlation based similarity) - 
 	통계적 거리(Statistical distance) or 마할라노비스(Mahalanobis)
 	맨하탄 거리(Mabgattan distance)
 	최대 좌표거리(Maximum Coordinate distance)
 	
 	형태
 	1. 계층적 군집 분석
 		개별 대상간의 거리에 의하여 가장 가까이에 있는 대상들로부터 시작하여 결합해 감으로써 나무 모양의 계층구조를 형성해가는 방법으로 덴드로그램을 그려줌으로써 군집이 형성되는 과정을 정확히 파악할 수 있으나 자료의 크기가 크면 분석하기가 어렵습니다.
 		
 	2. 비계층적 군집 분석
 		구하고자 하는 군집의 수를 정한 상태에서 설정된 군집의 중심에 가장 가까운 개체를 하나씩 포함해 가는 방식으로 군집을 형성해가는 방법입니다.
 		많은 자료를 빠르고 쉽게 분류할 수 있으나 군집의 수를 미리 정해 주어야하고 군집을 형성하기 위한 초기값에 따라 군집 결과가 달라지는 단점이 있습니다.
 		
 		비 계층적 군집 방법으로 가장 널리 쓰이고 있는 방법은 K-means 군집화 방식입니다.
 		K-means 군집화 방식은 순차적으로 군집화 과정이 반복되기 때문에 순차적 군집 분석이라고 합니다.
 		K-means 군집화 방식은 계측적인 군집화의 결과에 의거하여 미리 군집의 수를 정해야 하며, 군집의 주심도 정해야 합니다.
 		이 방법은 군집의 수를 미리 정하고 각 개체가 어느 군집에 속하는지를 분석하는 방법으로 대량의 데이터 군집 분석에 유용하게 이용되는 방법입니다.
 	
 	3. 중복 군집 분석
 		몇 개의 군집화 규칙을 상이하게 적용하여 군집화하는 방법으로 하나의 객체가 여러 군집에 포함 될 수 있습니다.
 	
 	a. 계층적 방법     - K-means 군집분석
 		병합 - n개의 굽집들을 가지고 시작해서 최종적으로 하나의 군집이 남을 때까지 순차적으로 유사한 군집들을 병합
 		분할 - 이와 반대 방향으로 작용하는데 모든 레코드들을 포함하고 있는 하나의 군집에서 출발해서 n개의 군집으로 분할
 		군집간 거리계산 - 단일연결법, 완전연결법, 평균연결법
 		
 	b. 비 계층적 방법 - 병합적인 방법, 분할적인 방법
 		사전에 결정된 군집들의 수를 사용
 		레코드들을 각각의 군집에 할당하는 방법
 		계산량이 많지 않기 때문에 대량의 데이터베이스에서 유용
 		
 	활용분야
 	a. 카드사에서 VIP고객들을 군집화하여 일반 고객들과 어떤 차이점이 있는지 파악
 	b. 프렌차이즈 사업이나 여러 매장을 직영하는 경우 전체 매장또는 가맹점 가운데 유사한 성향을 보이는 매장끼리 군집화하여 차별화된 관리 가능
 
  B. ANN(Artificial Neural Network) - 인공신경망
 	특징
 	a. 인간이 의사결정을 위하여 사고하는 방식을 컴퓨터에서도 구현하기 위하여 개발된 방법으로 인간 두뇌구조와 유사한 지도 학습 방법을 수행하는 기법
 	b. 뇌신경망의 원리를 이용, 데이터에 숨어 있는 패턴을 찾아 문제 해결
 	c. 학습을 통하여 데이터들간의 패턴 혹은 관계를 습득
 	
        모형
    a. Input Layer, Hidden Layer, Output Layer등 크게 세 부분의 Layer로 구성
    b. 각  Node들 간은 Weight(연결강도)로 연결되어 있으며, 학습과정은 Weight를 조절하는 과정
    c. 인공신경망은 Black Box
    
         활용분야
 	a. 고객의 매출에 영향을 주는 독립 변수들을 도출하고 이 독립변수로 구성된 설명 모형 개발
 	b. 주택, 자동차, 전자 제품 등의 가격 결정에 영향을 미치는 독립 변수들을 구성하여 동적 가격책정 모형을 활용
 	c. 은행, 신용평가 회사 등에서 고객에 대한 대출 금액을 산출하거나, 파산의 위험 정도를 분석해내는 예측 모형 개발
 
 3.머신러닝기반 데이터분석 <br>
 	a. Keras, Jupyter Notebook 설치 <br>
 	b. 딥 러닝 패키지 적용, 딥 러닝 기본모델 구동, 딥 러닝 모델 가시화 기능 및 저장 <br>
 	c. Tensorboard <br>
 	
 	<?php
include "../static/footer.php"
?>
 	