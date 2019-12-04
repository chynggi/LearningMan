<!DOCTYPE html>
<html lang="ko">

<head>

<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Clean Blog - Start Bootstrap Theme</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
	type="text/css">
<link
	href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="css/clean-blog.css" rel="stylesheet">

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top"
		id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="index.php">Learning Man</a>
			<button class="navbar-toggler navbar-toggler-right" type="button"
				data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu <i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="index.php">About</a>
					</li>
					<li class="nav-item"><a class="nav-link"
						href="OOP_Board/oop_B_index.php">OOP</a></li>
					<li class="nav-item"><a class="nav-link" href="post.html">DBMS</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="contact.html">Server
							Side</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.html">Frame
							Works</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.html">Data
							Analystics</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Header -->
	<header class="masthead"
		style="background-image: url('img/home-bg.jpg')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<span class="subheading">Team Project</span>
						<h1>Learning Man</h1>
						<p class="M_btn">
							<a class="col-lg-8 col-md-10 mx-auto" href="loginorReg.php">로그인</a> <a
								class="col-lg-8 col-md-10 mx-auto" href="loginorReg.php">회원가입</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</header>
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
								<label class="sr-only" for="form-first-name">First name</label>
								<input type="text" name="form-first-name"
									placeholder="First name..."
									class="form-first-name form-control" id="form-first-name">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-last-name">Last name</label> <input
									type="text" name="form-last-name" placeholder="Last name..."
									class="form-last-name form-control" id="form-last-name">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-email">Email</label> <input
									type="text" name="form-email" placeholder="Email..."
									class="form-email form-control" id="form-email">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-about-yourself">About yourself</label>
								<textarea name="form-about-yourself"
									placeholder="About yourself..."
									class="form-about-yourself form-control"
									id="form-about-yourself"></textarea>
							</div>
							<button type="submit" class="btn">Sign me up!</button>
						</form>
					</div>
				</div>

			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Login/Register form Originally Made by Anli Zaimi at <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a> 
        					having a lot of fun. <i class="fa fa-smile-o"></i></p>
        			</div>
	</div>

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<ul class="list-inline text-center">
						<li class="list-inline-item"><a href="#"> <span
								class="fa-stack fa-lg"> <i class="fas fa-circle fa-stack-2x"></i>
									<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a></li>
						<li class="list-inline-item"><a href="#"> <span
								class="fa-stack fa-lg"> <i class="fas fa-circle fa-stack-2x"></i>
									<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
							</span>
						</a></li>
						<li class="list-inline-item"><a href="#"> <span
								class="fa-stack fa-lg"> <i class="fas fa-circle fa-stack-2x"></i>
									<i class="fab fa-github fa-stack-1x fa-inverse"></i>
							</span>
						</a></li>
					</ul>
					<p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Custom scripts for this template -->
	<script src="js/clean-blog.min.js"></script>

</body>

</html>
