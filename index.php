
<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link href="bootstrap-3.3.7-dist\css\bootstrap.css" rel="stylesheet" media="screen">
<script src="jquery/jquery-latest.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>

<link href="perso.css" rel="stylesheet">
<script src="jquery/jquery-3.2.1.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Global Eletronics</title>
<link rel='shortcut icon' href="globallogo.png" />
<script type="text/javascript">
$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
</script>

</head>

<style type="text/css">
body {
    padding-top: 90px;
    background:#03A1DC ;
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}
</style>
<body>

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
            <div class="row">
              <div class="col-lg-12">
                <h1 ><small>Global Eletronics   <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></small></h1>

            </div>
            </div>
            <br><br>
            <div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Entrar</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Registrar</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="signin.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="login" id="login" tabindex="1" class="form-control" placeholder="Usuário" value="">
									</div>
									<div class="form-group">
										<input type="password" name="senha" id="senha" tabindex="2" class="form-control" placeholder="senha">
									</div>
								     <div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
                        <br><br>
                        <input type="submit" name="entrar" id="entrar" tabindex="4" class="form-control btn btn-login" value="Entrar">
											</div>
										</div>
									</div>

                  <div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
                            <br><br>
                          <a href="http://globaleletronics.ind.br/" tabindex="5" class="forgot-password">Copyright 2017 © Global Eletronics. Todos os direitos reservados</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="cadastrousuario.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="login" id="login" tabindex="1" class="form-control" placeholder="Usuário" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email " value="">
									</div>
									<div class="form-group">
										<input type="password" name="senha" id="senha" tabindex="2" class="form-control" placeholder="senha">
									</div>
									<div class="form-group">
										<input type="password" name="confirmarsenha" id="confirmarsenha" tabindex="2" class="form-control" placeholder="Confirmar senha">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrar Agora">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>