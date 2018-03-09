<?php
session_start();
$nivel_necessario = $_SESSION['nivel'];
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}
if($nivel_necessario < 2){
header('location:consulta.php');
}

	include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Global Eletronics   <span class=" glyphicon glyphicon-floppy-saved" aria-hidden="true"></span></title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="bootstrap-3.3.7-dist\css\bootstrap.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class="container">
		<?php
$modulo = $_POST['modulo'];
$codigo = $_POST['codigo'];
$etapa = $_POST['etapa'];
$posicao = $_POST['posicao'];
$quantidade = $_POST['quantidade'];
$local = $_POST['local'];
$revisao = $_POST['revisao'];
$obs = $_POST['obs'];
$slide =$_POST['slide'];
$imagem = $_FILES['imagem'];

$nome_imagem = null;
$rowsn = null ;
		
if($etapa == '1ª Etapa'){
$id_etapa = 1;	
}
if($etapa == '2ª Etapa'){
$id_etapa = 2 ;	
}
if($etapa == 'Pré-Formatação'){
$id_etapa = 3;
}
if($etapa == 'Pré-Formatação 2ª Etapa'){
$id_etapa = 4 ;	
}
if($etapa == 'Complementação'){
$id_etapa = 5;	
}

		if($revisao == "" ||$local == "" ||$quantidade == "" ||$posicao == "" ||$modulo == "" ||$codigo == "" ||$etapa == "" ){ ?>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Global Eletronics <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
						</div>
						<div class="modal-body">
							<p><h5>Somente o campo observação não necessita preenchimento!</h5></p>

						</div>
						<div class="modal-footer">
					<a href="cadastro.php"><button type="button" class="btn  btn-info">Continuar</button></a>

						</div>
					</div>
				</div>
			</div>

			<script>
				$(document).ready(function () {
					$('#myModal').modal('show');
				});

			</script>
		<?php exit;}
		elseif(empty($imagem["name"])) {

		 ?>
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Global Eletronics  <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
						</div>
						<div class="modal-body">
							<p><h5>A imagem deve ser selecionada!</h5></p>
						</div>
						<div class="modal-footer">
							<a href="cadastro.php"><button type="button" class="btn btn-info">Continuar</button></a>
						</div>
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function () {
					$('#myModal').modal('show');
				});


			</script>
			<?php exit;}else {

preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
$caminho_imagem = "fotos/" . $nome_imagem;
move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

$checkn = "SELECT * FROM formatacao WHERE modulo = '".$modulo."' AND codigo = '".$codigo."' AND etapa = '".$etapa."';";
$sqlcheckn = mysqli_query($conn,$checkn);
$rowsn = mysqli_num_rows($sqlcheckn);
}
if($rowsn != 0) {
?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Global Eletronics  <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
						</div>
						<div class="modal-body">
							<p><h5>Já existem registros!</h5></p>
						</div>
						<div class="modal-footer">
							<a href="cadastro.php"><button type="button" class="btn btn-info">Continuar</button></a>
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
}else{

	$sql = mysqli_query($conn,"INSERT INTO formatacao(
		`modulo`,
		`codigo`,
		 `etapa`,
		 `posicao`,
			`quantidade`,
			`local`,
			`revisao`,
			`obs`,
			`slide`,
			`id_etapa`,
			`imagem` )
			VALUES (
			'".$modulo."',
			'".$codigo."',
			'".$etapa."',
			'".$posicao."',
			'".$quantidade."',
			'".$local."',
			'".$revisao."',
			'".$obs."',
			'".$slide."',
			'".$id_etapa."',
			'".$nome_imagem."');
			");
?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Global Eletronics <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
						</div>
						<div class="modal-body">
							<h5>Cadastro realizado com sucesso!</h5>
						</div>
						<div class="modal-footer">
							<a href="cadastro.php"><button type="button" class="btn btn-info">Confirmar</button></a>
						</div>
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function () {
					$('#myModal').modal('show');
				});
				</script>

<?php }?>
		</div>
	</body>
</html>
