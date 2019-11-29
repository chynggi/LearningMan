$(function(){
	$(".container>.row>div>div>.OOP_box>.OOP_container").mouseenter(
		function(){
			$(".container>.row>div>div>a>.OOP_container>p:nth-child(1)").stop().animate({top:"50px", left:"-10px"},300);
			$(".container>.row>div>div>a>.OOP_container>p:nth-child(2)").stop().animate({top:"65px", right:"-30px"},300);
			$(".container>.row>div>div>a>.OOP_container>p:nth-child(3)").stop().delay(300).fadeIn(300);
		}
	);
	$(".container>.row>div>div>.OOP_box>.OOP_container").mouseleave(
		function(){
			$(".container>.row>div>div>a>.OOP_container>p:nth-child(1)").stop().animate({top:"50px", left:"140px"},300);
			$(".container>.row>div>div>a>.OOP_container>p:nth-child(2)").stop().animate({top:"65px", right:"110px"},300);
			$(".container>.row>div>div>a>.OOP_container>p:nth-child(3)").stop().css("display","none");
		}
	);
	
	//DBMS
	$(".container>.row>div>div>.DBMS_box>.DBMS_container").mouseenter(
		function(){
			$(".container>.row>div>div>a>.DBMS_container>p:nth-child(1)").stop().animate({opacity :"0.3"},300);
			$(".container>.row>div>div>a>.DBMS_container>p:nth-child(2)").stop().delay(200).fadeIn(400);
		}
	);
	$(".container>.row>div>div>.DBMS_box>.DBMS_container").mouseleave(
		function(){
			$(".container>.row>div>div>a>.DBMS_container>p:nth-child(1)").stop().animate({opacity:"1"},300);
			$(".container>.row>div>div>a>.DBMS_container>p:nth-child(2)").stop().css("display","none");
		}
	);
	
	//Server Side
	$(".container>.row>div>div>.sevSi_box>.sevSi_container").mouseenter(
		function(){
			$(".container>.row>div>div>a>.sevSi_container>p:nth-child(1)").stop().delay(100).fadeOut(200);
			$(".container>.row>div>div>a>.sevSi_container>p:nth-child(2)").stop().delay(100).fadeOut(200);
			$(".container>.row>div>div>a>.sevSi_container>p:nth-child(3)").stop().animate({bottom:"170px", left:"650px"},300);
			$(".container>.row>div>div>a>.sevSi_container>p:nth-child(4)").stop().delay(200).fadeIn(300);
		}
	);
	$(".container>.row>div>div>.sevSi_box>.sevSi_container").mouseleave(
		function(){
			$(".container>.row>div>div>a>.sevSi_container>p:nth-child(1)").stop().delay(200).fadeIn(400);
			$(".container>.row>div>div>a>.sevSi_container>p:nth-child(2)").stop().delay(200).fadeIn(400);
			$(".container>.row>div>div>a>.sevSi_container>p:nth-child(3)").stop().animate({bottom:"170px", left:"-50px"},300);
			$(".container>.row>div>div>a>.sevSi_container>p:nth-child(4)").stop().delay(100).fadeOut(100);
		}
	);
	
	//Frame Works
	$(".container>.row>div>div>.FW_box>.FW_container").mouseenter(
		function(){
			$(".container>.row>div>div>a>.FW_container>p:nth-child(1)").stop().animate({top:"130px", left:"-100px"},300);
			$(".container>.row>div>div>a>.FW_container>p:nth-child(2)").stop().animate({top:"20px", left:"415px"},300);
			$(".container>.row>div>div>a>.FW_container>p:nth-child(3)").stop().animate({bottom:"110px", left:"50px"},300);
			$(".container>.row>div>div>a>.FW_container>p:nth-child(4)").stop().animate({bottom:"160px", right:"35px"},300);
			$(".container>.row>div>div>a>.FW_container>p:nth-child(5)").stop().animate({top:"130px", right:"-100px"},300);
			$(".container>.row>div>div>a>.FW_container>p:nth-child(6)").stop().delay(200).fadeIn(300);
		}
	);
	$(".container>.row>div>div>.FW_box>.FW_container").mouseleave(
		function(){
			$(".container>.row>div>div>a>.FW_container>p:nth-child(1)").stop().animate({top:"270px", left:"40px"},300);
			$(".container>.row>div>div>a>.FW_container>p:nth-child(2)").stop().animate({top:"320px", left:"415px"},300);
			$(".container>.row>div>div>a>.FW_container>p:nth-child(3)").stop().animate({bottom:"250px", left:"190px"},300);
			$(".container>.row>div>div>a>.FW_container>p:nth-child(4)").stop().animate({bottom:"300px", right:"175px"},300);
			$(".container>.row>div>div>a>.FW_container>p:nth-child(5)").stop().animate({top:"270px", right:"40px"},300);
			$(".container>.row>div>div>a>.FW_container>p:nth-child(6)").stop().delay(100).fadeOut(100);
		}
	);
	
	//Data Analystics
	$(".container>.row>div>div>.DA_box>.DA_container").mouseenter(
		function(){
			$(".container>.row>div>div>a>.DA_container>p:nth-child(1)").stop().delay(100).fadeIn(300);
			$(".container>.row>div>div>a>.DA_container>p:nth-child(2)").stop().delay(250).fadeIn(300);
			$(".container>.row>div>div>a>.DA_container>p:nth-child(3)").stop().delay(400).fadeIn(300);
			$(".container>.row>div>div>a>.DA_container>p:nth-child(4)").stop().delay(550).fadeIn(300);
			$(".container>.row>div>div>a>.DA_container>p:nth-child(5)").stop().delay(700).fadeIn(300);
			$(".container>.row>div>div>a>.DA_container>p:nth-child(7)").stop().delay(850).fadeIn(300);
		}
	);
});