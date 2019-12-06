<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<jsp:include page="../static/header.jsp"></jsp:include>
<!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
				회원탈퇴
            </h2>
        </div>
        <hr>
        <div class="memberForm_box">
        	<form name="memberForm" action="./member_delete_action.php"  onSubmit="return insertOk(this)" method="post">
        		<div class="ID_form">
        			<input class="id" id="id" type="text" name="memId" placeholder="&nbsp;&nbsp;아이디">
        		</div>
        		<div class="PW_form">
        			<input class="pw" id="pw" type="password" name="memPw" placeholder="&nbsp;&nbsp;비밀번호">
        		</div>
        		<div class="subM_form">
        			<input class="memBtn" id="memBtn" name="memBtn" type="submit" value="회원탈퇴">
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
    		}else if(f.memBtn){
    			alert("정말로 탈퇴하시겠습까?");
    			return true;
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
	</script>
<jsp:include page="../static/footer.html"></jsp:include>
</body>
</html>