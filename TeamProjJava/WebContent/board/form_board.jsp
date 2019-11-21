<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>게시글 입력폼</title>
<script>
	// 클라이언트에서 미리 체크할껀 체크하고 서버로 전송
	// 그래야만 서버프로그램의 부하를 줄일 수 있다. 
	function formCheck(frm) {
		if (frm.id.value == "") {
			alert("회원의 아이디는 반드시 넣어야 합니다.");
			frm.id.focus();
			return false;
		}

		if (frm.section.value == "수입" && frm.expense.value != 0) {
			alert("지출금액은 0이라야 합니다.");
			frm.expense.focus();
			return false;
		}

		if (frm.section.value == "지출" && frm.revenue.value != 0) {
			alert("수입금액은 0이라야 합니다.");
			frm.revenue.focus();
			return false;
		}
		// 서버에 리퀘스트를 보내는 작업 (get이나 post방식으로)
		document.getElementById('homebook_input').submit();

	}
</script>

</head>
<body>
<%
String id = (String) session.getAttribute("id");
%>
	<%
		//String loginOk = (String) session.getAttribute("loginOk");
		//String id = (String) session.getAttribute("id");
		//String name = (String) session.getAttribute("name");
		//if (!loginOk.equals("ok")) {
			//response.sendRedirect("../Main.jsp");
		//}
	%>
	<h1 align="center">게시글 입력
	</h1>
	<div align="right">
		<button type="button" onclick="history.go(-1)">뒤로</button>
	</div>
	<hr>

	<table border="1" align="center">
		<form id="homebook_input" onsubmit="return formCheck(this)"
			method="post" action="board.do">
			<tr>
				<th>아이디</th>
				<td><input type="text" name="userId" size='20' value="<%=id %>" readonly>
				</td>
			</tr>

			<tr>
				<th>관리번호</th>
				<td><input type="text" name="serialno" size='20' value="자동">
				</td>
			</tr>

			<tr>
				<th>일자</th>
				<td><input type="date" name="day" size='20'></td>
			</tr>

			<tr>
				<th>수지구분</th>
				<td><input type="radio" name="section" value="수입">수입 <input
					type="radio" name="section" value="지출" checked>지출</td>
			</tr>

			<tr>
				<th>계정과목</th>
				<td><select name="accountTitle">
						<optgroup label="수입항목">
							<option value="월급">월급</option>
							<option value="상여금">상여금</option>
							<option value="잡수입">잡수입</option>
						</optgroup>

						<optgroup label="지출항목">
							<option value="피복비">피복비</option>
							<option value="외식비">외식비</option>
							<option value="식재료비">식재료비</option>
							<option value="공과금">공과금</option>
							<option value="자산매입">자산매입</option>
							<option value="소모품비">소모품비</option>
							<option value="차량유지비">차량유지비</option>
							<option value="접대비">접대비</option>
							<option value="모임회비">모임회비</option>
							<option value="기타잡비">기타잡비</option>

						</optgroup>

				</select></td>

			</tr>
			<tr>
				<th>적요(수지내역)</th>
				<td><input type="text" name="remark" size="70"></td>
			</tr>

			<tr>
				<th>수입(차변)</th>
				<td><input type="text" name="revenue" size="50" value="0"></td>
			</tr>
			<tr>
				<th>지출(대변)</th>
				<td><input type="text" name="expense" size="50" value="0"></td>
			</tr>
			
			
			<tr>
				<td colspan="2" align="right"><input type="submit" value="자료입력">
					<input type="reset" value="다시작성">
					<button type="button" onclick="location.href='datadisp2.jsp'">입력자료출력</button>	
				</td>
			</tr>

		</form>


	</table>



</body>
</html>