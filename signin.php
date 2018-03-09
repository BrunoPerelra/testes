<?php
	include_once("conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Global Eletronics </title>
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<script src="jquery/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="bootstrap-3.3.7-dist\css\bootstrap.css" rel="stylesheet" media="screen">
	</head>

<style type="text/css">

body {background:  #E0ECF8 ;}


</style>


	<body>

<?php

	$login = $_POST['login'];
  $entrar = $_POST['entrar'];
	  $senha = md5($_POST['senha']);
	//$confirmarsenha = md5($_POST['confirmarsenha']);
  $db = mysqli_select_db($conn ,'global');

		if (isset($entrar)) {
				$verifica = mysqli_query($conn,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");

				if (mysqli_num_rows($verifica) > 0){
					$nivel = mysqli_fetch_assoc($verifica);
					$_SESSION['login'] = $login;
					$_SESSION['senha'] = $senha;
					$_SESSION['nivel'] = $nivel['nivel'];
					header("Location:imprimeDados.php");


							}else{
					?>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
										</div>
										<div class="modal-body">
											<h5>Login ou senha incorretos!</h5>
										</div>
										<div class="modal-footer">
											<a href="index.php"><button type="button" class="btn btn-info">Continuar</button></a>
										</div>
									</div>
								</div>
							</div>
							<script>
								$(document).ready(function () {
									$('#myModal').modal('show');
								});


							</script>
				 <?php
        }
    }

?>

</body>
</html>
