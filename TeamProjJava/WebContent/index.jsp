<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="ko">

<jsp:include page="/header2.jsp" flush="false"/>


	<style>
.M_btn>a {
	text-decoration: none;
	color: #fff;
}
.M_btn>a:hover {
	color: #000;
}
</header>
	<style>
		.M_btn>a {
			text-decoration: none;
			color:#fff;
		}
		.M_btn>a:hover {
			color:#000;
		}
	</style>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
				머신러닝반 팀프로젝트
            </h2>
            <h3 class="post-subtitle" style="margin-bottom: 80px;">
              	2019 머신러닝반 교육커리큘럼 소개
            </h3>
            <h3 class="post-mtitle">
              	제작자
            </h3>
            <h3 class="post-mtitle">
              	OOP - 이동탁
            </h3>
            <h3 class="post-mtitle">
              	DBMS - 송승연
            </h3>
            <h3 class="post-mtitle">
              	Server Side - 최용규
            </h3>
            <h3 class="post-mtitle">
              	Frame Works - 성유진 
            </h3>
            <h3 class="post-mtitle">
              	Data Analystics - 엄윤환
            </h3>
        </div>
        <hr>
		<div class="post-preview" style="margin-bottom: 80px;">
            <h2 class="post-title" style="margin-bottom: 50px;">
				CONTENT
            </h2>
            <div style="text-align: center;">
            	<p>
            		<a href="#">OOP</a>
            	</p>
            	<p>
            		<a href="dbms_Board.jsp">DBMS</a>
            	</p>
            	<p>
            		<a href="#">Server side</a>
            	</p>	

            <div class="OOP_box">
            	<div class="OOP_container">
            		<p class="OOP_java">
            			<img src="./img/OOP_java.png" art="OOP_java이미지" title="OOP_java">
            		</p>
            		<p class="OOP_python">
            			<img src="./img/OOP_python.png" art="OOP_python이미지" title="OOP_python">
            		</p>
            		<p class="OOP_txt">
            			<img src="./img/OOP_txt.png" art="OOP이미지" title="OOP">
            		</p>
            	</div>
            </div>
            <div class="DBMS_box">
            	<div class="DBMS_container">
            		<p class="DBMS_img">
            			<img src="./img/DBMS_img.jpg" art="DBMS이미지" title="DBMS">
            		</p>
            		<p class="DBMS_txt">
            			<img src="./img/DBMS_txt.png" art="DBMS이미지" title="DBMS">
            		</p>
            	</div>
            </div>
            <div class="sevSi_box">
            	<div class="sevSi_container">
          			<p class="sevSi_jsp">
            			<img src="./img/sev_si_jsp.png" art="ServerSidejsp이미지" title="ServerSidejsp">
            		</p>
	        		<p class="sevSi_php">
            			<img src="./img/sev_si_php.png" art="ServerSide php이미지" title="ServerSidephp">
            		</p>
            		<p class="sevSi_img">
            			<img src="./img/sev_si_img.png" art="ServerSide이미지" title="ServerSide">
            		</p>
            		<p class="sevSi_txt">
            			<img src="./img/serverside_txt.png" art="ServerSidetxt이미지" title="ServerSidetxt">
            		</p>
            	</div>
            </div>
            <div class="FW_box">
            	<div class="FW_container">
          			<p class="FW_BtStrp">
            			<img src="./img/FW_BtStrp.png" art="frameworksbootstrap이미지" title="frameworksbootstrap">
            		</p>
          			<p class="FW_django">
            			<img src="./img/FW_django.png" art="frameworksdjango이미지" title="frameworksdjango">
            		</p>
          			<p class="FW_jQurey">
            			<img src="./img/FW_jQurey.png" art="frameworksjQurey이미지" title="frameworksjQurey">
            		</p>
          			<p class="FW_Mybatis">
            			<img src="./img/FW_Mybatis.png" art="frameworksMybatis이미지" title="frameworksMybatis">
            		</p>
          			<p class="FW_Spring">
            			<img src="./img/FW_Spring.png" art="frameworksSpring이미지" title="frameworksSpring">
            		</p>
            		<p class="FW_txt">
            			<img src="./img/FW_txt.png" art="frameworkstxt이미지" title="frameworkstxt">
            		</p>
            	</div>
            </div>
            <div class="DA_box">
            	<div class="DA_container">
          			<p class="DA_img1">
            			<img src="./img/DA_1.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
          			<p class="DA_img2">
            			<img src="./img/DA_2.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
          			<p class="DA_img3">
            			<img src="./img/DA_3.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
          			<p class="DA_img4">
            			<img src="./img/DA_4.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
          			<p class="DA_img5">
            			<img src="./img/DA_5.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
          			<p class="DA_img6">
            			<img src="./img/DA_6.png" art="Data Analytics이미지" title="Data Analytics">
            		</p>
            		<p class="DA_img7">
            			<img src="./img/DA_txt.png" art="Data Analyticstxt이미지" title="Data Analyticstxt">
            		</p>            		
            	</div>
            </div>
        </div>
        
	<!-- Footer -->
	<jsp:include page="/footer.jsp" flush="false"/>
</body>
</html>