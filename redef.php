<?php
session_start();

if(isset($_GET['mensagem'])){
    $cor = $_SESSION['cor'];
    $msg = $_GET['mensagem'];
    $not =  "md.showNotification('top','right','".$msg.", ".strtoupper($_SESSION['nomeuser'])."!"."','".$cor."')";
}else{
    $cor = null;
    $msg = null;
    $not = null;
}

?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Refefinição de Senha</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body onload="<?php echo $not;?>">
	<div class="main-bg">
		<!-- title -->
		<h1>Primeiro Acesso, Redefina sua Senha</h1>
		<!-- //title -->
		<div class="sub-main-w3">
			<div class="image-style">

			</div>
			<!-- vertical tabs -->
			<div class="vertical-tab">
				<div id="section1" class="section-w3ls">
					<input type="radio" name="sections" id="option1" checked>
					<label for="option1" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>Primeiro Acesso</label>
					<article>
						<form action="controllers/ctrl_primeiro_acesso.php" method="post">
							<h3 class="legend">Definir Primeira Senha</h3>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Senha" name="senha" id="senha" required />
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Confirme a senha" name="senha" id="confirme_senha" required />
							</div>
							<button type="submit" class="btn submit">Redefinir</button>
							<a  class="bottom-text-w3ls">&nbsp</a>
						</form>
					</article>
				</div>
				<div id="section2" class="section-w3ls">
					<input type="radio" name="sections" id="option2" disabled="">
					<label for="option2" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>&nbsp</label>
					<article>
						<form action="#" method="post">
							<h3 class="legend">&nbsp</h3>
							<div class="input">
								<span class="fa fa-user-o" aria-hidden="true"></span>
								<input type="text" placeholder="Username" name="name" required />
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password" name="password" required />
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Confirm Password" name="password" required />
							</div>
							<button type="submit" class="btn submit">Register</button>
						</form>
					</article>
				</div>
				<div id="section3" class="section-w3ls">
					<input type="radio" name="sections" id="option3" disabled="">
					<label for="option3" class="icon-left-w3pvt"><span class="fa fa-lock" aria-hidden="true"></span>&nbsp</label>
					<article>
						<form action="#" method="post">
							<h3 class="legend last">Reset Password</h3>
							<p class="para-style">Enter your email address below and we'll send you an email with instructions.</p>
							<p class="para-style-2"><strong>Need Help?</strong> Learn more about how to <a href="#">retrieve an existing
									account.</a></p>
							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="email" placeholder="Email" name="email" required />
							</div>
							<button type="submit" class="btn submit last-btn">Reset</button>
						</form>
					</article>
				</div>
			</div>
			<!-- //vertical tabs -->
			<div class="clear"></div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<h2>&copy; 2019 Triple Forms. All rights reserved | Design by
				<a href="http://w3layouts.com" target="_blank">W3layouts</a>
			</h2>
		</div>
		<!-- //copyright -->
	</div>
<?php include_once 'assets/carregaJS.php';?>
	<script>
		var password = document.getElementById("senha"),
		 confirm_password = document.getElementById("confirme_senha");

		function validatePassword(){
		  if(password.value != confirm_password.value) {
		    confirm_password.setCustomValidity("Senhas diferentes!");
		  } else {
		    confirm_password.setCustomValidity('');
		  }
		}
		  password.onchange = validatePassword;
		  confirm_password.onkeyup = validatePassword;

		$(document).ready(function(){
		  $('select').formSelect();
		});
	</script>

</body>

</html>