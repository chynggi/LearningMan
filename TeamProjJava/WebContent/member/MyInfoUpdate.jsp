<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<jsp:include page="../static/header.jsp"></jsp:include>
<!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
				본인정보 수정
            </h2>
        </div>
        <hr>
        <% 
        String id = (String)request.getAttribute("id");
        String name = (String)request.getAttribute("name");
        String phone = (String)request.getAttribute("phone");
        String xdate = (String)request.getAttribute("xdate");
        %>
        
        <div class="memberForm_box">
        	<form name="memberForm" action="./MemberInfoAdjust.do" onSubmit="return insertOk(this)" method="post">
        		<div class="ID_form">
        			<input class="id" id="id" type="hidden" name="id" value="<%=id%>">
        			<p><?php echo "$user_id"; ?></p>
        		</div>
        		<div class="PW_form">
        			<input class="pw" id="pw" type="password" name="pw" placeholder="&nbsp;&nbsp;비밀번호">
        		</div>
        		<div class="PWC_form">
        			<input class="pwc" id="pwc" type="password" name="pwc" placeholder="&nbsp;&nbsp;비밀번호확인">
        		</div>
        		<div class="NAME_form">
        			<input class="name" id="name" type="text" name="name" value="<%=name%>">
        		</div>
        		<div class="PN_form">
        			<input class="phone" id="phone" type="text" name="phone" value="<%=phone%>">
        		</div>
        		<div class="date_form">
        			<input class="date" id="date" type="hidden" name="date" value="<%=xdate%>">
        			<p><?php echo "$user_date"; ?></p>
        		</div>
        		<div class="subM_form">
        			<input class="upBtn" type="submit" value="수정">
        			<button type="button" onclick="location.href='./member_delete_form.php'" class="deBtn">회원탈퇴</button>
        		</div>
			</form>
        </div>
      </div>
	</div>
	</div>
	
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
    	$("#id").change(function(){
    		checkId($('#id').val());
    	});
    	$("#pw").change(function(){
    		checkPw($('#pw').val());
    		formCheck($('#pw').val());
    	});
    	$("#name").change(function(){
    		checkName($('#name').val());
    	});
    	$("#phone").change(function(){
    		checkPhone($('#phone').val());
    	});
    	
    	//
    	function insertOk(frm) {
    		var f = document.memberForm;
    		if(f.memId.value == ""){
    			alert("아이디를 입력해 주세요.");
    			$('#id').val('').focus();
    			return false;
    		}else if(f.memPw.value == ""){
    			alert("비밀번호를 입력해 주세요.");
    			$('#pw').val('').focus();
    			return false;
    		}else if(frm.memPw.value !== frm.memPwc.value){
    			alert("비밀번호를 확인하세요.");
    			$('#pw').val('').focus();
    			$('#pwc').val('').focus();
    			return false;
    		}else if(f.memName.value == ""){
    			alert("이름을 입력해 주세요.");
    			$('#name').val('').focus();
    			return false;
    		}else if(f.memPhone.value == ""){
    			alert("휴대폰 번호를 입력해 주세요.");
    			$('#phone').val('').focus();
    			return false;
    		}else{
    			return true;
    		}

    	}


    	function checkId(id) {
    		var f = document.memberForm;
    		if(id.length < 4){
    			alert("아이디는 4자 이상이여야 합니다. ");
    			$('#id').val('').focus();
    			return false;
    		}else{
    			return true;
    		}
    	}
    	
    	function checkPw(pw) {
    		var f = document.memberForm;
    		if(pw.length < 4){
    			alert("비밀번호는 4자 이상 입력하여야 합니다.");
    			$('#pw').val('').focus();
    			return false;
    		}else{
    			return true;
    		}
    	}
    
    	function checkName(name) {
    		var f = document.memberForm;
    		if(name.length < 2){
    			alert("이름은 2자 이상 입력하여야 합니다.");
    			$('#name').val('').focus();
    			return false;
    		}else{
    			return true;
    		}
    	}
    
    	function checkPhone(phone) {
    		var f = document.memberForm;
    		if(phone.length < 10){
    			alert("휴대폰 번호은 10자 이상 입력하여야 합니다.");
    			$('#phone').val('').focus();
    			return false;
    		}else{
    			return true;
    		}
    	}
	</script>
<jsp:include page="../static/footer.html"></jsp:include>