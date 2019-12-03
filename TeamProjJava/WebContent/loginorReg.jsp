<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="ko">

<<<<<<< HEAD
<jsp:include page="header2.jsp"></jsp:include>


	<!-- Main Content -->
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="form-box">
					<div class="form-top">
						<div class="form-top-left">
							<h3>로그인</h3>
							<p>아이디와 비밀번호를 입력해주세요. </p>
						</div>
						<div class="form-top-right">
							<i class="fa fa-key"></i>
						</div>
					</div>
					<div class="form-bottom">
						<form role="form" action="" method="post" class="login-form">
							<div class="form-group">
								<label class="sr-only" for="form-username">ID</label> <input
									type="text" name="form-username" placeholder="ID..."
									class="form-username form-control" id="form-username">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-password">Password</label> 
								<input type="password" name="form-password" placeholder="Password..."
									   class="form-password form-control" id="form-password">
							</div>
							<button type="submit" class="btn">Sign in!</button>
						</form>
					</div>
				</div>				
			</div>
			<div class="col-sm-1 middle-border"></div>
			<div class="col-sm-1"></div>
			<div class="col-sm-5">
				<div class="form-box">
					<div class="form-top">
						<div class="form-top-left">
							<h3>회원가입</h3>
						</div>
						<div class="form-top-right">
							<i class="fa fa-pencil"></i>
						</div>
					</div>
					<div class="form-bottom">
						<form role="form" action="" method="post"
							class="registration-form">
							<div class="form-group">
								<label class="sr-only" for="form-first-name">이름</label>
								<input type="text" name="form-first-name"
									placeholder="First name..."
									class="form-first-name form-control" id="form-first-name">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-email">아이디</label> <input
									type="text" name="form-email" placeholder="ID..."
									class="form-email form-control" id="form-email">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-password">비밀번호</label> <input
									type="password" name="form-password" placeholder="Password..."
									class="form-password form-control" id="form-password">
							</div>
							<button type="submit" class="btn">Sign me up!</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<jsp:include page="static/footer.jsp"></jsp:include>
=======
<jsp:include page="header.jsp"></jsp:include>


	<style>
.M_btn>a {
	text-decoration: none;
	color: #fff;
}
.M_btn>a:hover {
	color: #000;
}
</style>
	<!-- Main Content -->
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="form-box">
					<div class="form-top">
						<div class="form-top-left">
							<h3>Login to our site</h3>
							<p>Enter username and password to log on:</p>
						</div>
						<div class="form-top-right">
							<i class="fa fa-key"></i>
						</div>
					</div>
					<div class="form-bottom">
						<form role="form" action="" method="post" class="login-form">
							<div class="form-group">
								<label class="sr-only" for="form-username">Username</label> <input
									type="text" name="form-username" placeholder="Username..."
									class="form-username form-control" id="form-username">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-password">Password</label> <input
									type="password" name="form-password" placeholder="Password..."
									class="form-password form-control" id="form-password">
							</div>
							<button type="submit" class="btn">Sign in!</button>
						</form>
					</div>
				</div>				
			</div>
			<div class="col-sm-1 middle-border"></div>
			<div class="col-sm-1"></div>
			<div class="col-sm-5">
				<div class="form-box">
					<div class="form-top">
						<div class="form-top-left">
							<h3>회원가입</h3>
						</div>
						<div class="form-top-right">
							<i class="fa fa-pencil"></i>
						</div>
					</div>
					<div class="form-bottom">
						<form role="form" action="" method="post"
							class="registration-form">
							<div class="form-group">
								<label class="sr-only" for="form-first-name">이름</label>
								<input type="text" name="form-first-name"
									placeholder="First name..."
									class="form-first-name form-control" id="form-first-name">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-email">아이디</label> <input
									type="text" name="form-email" placeholder="Email..."
									class="form-email form-control" id="form-email">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-password">비밀번호</label> <input
									type="password" name="form-password" placeholder="Password..."
									class="form-password form-control" id="form-password">
							</div>
							<button type="submit" class="btn">Sign me up!</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<jsp:include page="footer.jsp"></jsp:include>
>>>>>>> refs/remotes/origin/master
</body>
</html>