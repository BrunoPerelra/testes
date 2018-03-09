<?php

session_start();
$nivel_necessario = $_SESSION['nivel'];
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
}
if(isset($_POST['sair'])) {
unset($_SESSION['login']);
unset($_SESSION['senha']);
header('location:index.php');
exit;}

include_once("conexao.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Global Eletronics</title>
	<link rel='shortcut icon' href="globallogo.png" />
	<script src="jquery/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.min.js"></script>
	<script src="jquery/jquery-latest.js"></script>
	<link href="bootstrap4\css\bootstrap.css" rel="stylesheet" media="screen">
	<link href="bootstrap4\css\glyphicons.css" rel="stylesheet" media="screen">
	<script src="bootstrap4\js\bootstrap.min.js"></script>
	<script src="jsnewGlobal.js?12"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap-select/css/bootstrap-select.min.css">
<script src="bootstrap-select/js/bootstrap-select.min.js"></script>
	<link rel="stylesheet" href="jquery/jquery.fancybox.min.css" />

<script src="jquery/jquery.fancybox.min.js"></script>

		<style type="text/css">
		.footerFooter {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;

    color: white;
    text-align: center;
}

		.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
			background-color:;
			}
			@keyframes spin {
				0% { transform: rotate(0deg); }
				100% { transform: rotate(360deg); }
			}
			/*Mudando o tamanho do icone de resposta*/
			div.glyphicon {
				color:#9AC0CC;
				font-size: 38px;
			}
			/*Classe que mostra a animacao 'spin'*/
			.loader {
				border: 16px solid #f3f3f3;
				border-radius: 50%;
				border-top: 16px solid #17a2b8;
				width: 80px;
				height: 80px;
				-webkit-animation: spin 2s linear infinite;
				animation: spin 2s linear infinite; }
				.color_text{color:blue;}
				.tt{text-transform: uppercase;}
				.corgly{color:green;}
				.img_color{color:#17a2b8;}
				@font-face {
				font-family: MinhaFonte4;
				src: url('googleFonts/Sh-Regular.ttf');
				}
				@font-face {
			font-family: MinhaFonte3;
			src: url('googleFonts/Pacifico-Regular.ttf');
			}
			@font-face {
		font-family: Coustard-Regular;
		src: url('googleFonts/Coustard-Regular.ttf');
		}
		@font-face {
		font-family: Amaranth-Regular;
		src: url('googleFonts/Amaranth-Regular.ttf');
		}


			</style>
			<script type="text/javascript">
			$(document).ready(function(e) {
				/* Multiple Item Picker */
				  $('.selectpicker').selectpicker({
						style: 'btn-outline-info btn-sm',


					});
});
			</script>
		</head>
		<body style="background:">
<!--
Inserindo informações de módulo
--><nav class="navbar fixed-top navbar-dark bg-info navbar-expand-lg ">
	<a class="navbar-brand" href="#" style="font-family:MinhaFonte3, Cursive;">Global Eletronics  <span class='glyphicon glyphicon-globe' aria-hidden='true'></span></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="imprimeDados.php" style="font-family:Coustard-Regular, Cursive;">Inicio <span class="glyphicon glyphicon-home"></span></a>
			</li>
			<li class="nav-item active">

				 <a class="nav-link" href="newGlobalUpdate.php"  style="font-family:Coustard-Regular, Cursive;">Atualizações
					 <span class="glyphicon glyphicon-refresh">
					 </span>
					 </a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="cf.php" style="font-family:Coustard-Regular, Cursive;">Componentes CF
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
					</span>
				</a>
			</li>


			<li class="nav-item dropdown active">
        <a style="font-family:Coustard-Regular, Cursive;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Links úteis <span class="glyphicon glyphicon-thumbs-up" aira-hidden="true"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://smileboard.global.redware.com.br">Quadro Emocional</a>
          <a class="dropdown-item" href="http://192.168.3.210:8080/Tecnicon/Portal">Tecnicon</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://globaleletronics.ind.br/">Site Global</a>
        </div>
      </li>

		</ul>
		<ul class="navbar-nav mr-auto nav-right">
			<li class="nav-item">

			</li>
		</ul>
		
	</div>
</nav>
<div class="container" style="margin-top: 80px;">

	<div style="display: none;" class="modal fade" data-backdrop="static" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModal_label">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="loadingModal_label">
						Aguarde...
						<span class="glyphicon glyphicon-refresh"></span>

					</h5>
				</div>
				<div class="modal-body">
					<div class='alert' role='alert'>
						<center>
							<div class="loader" id="loader"></div><br>
							<h4><b id="loadingModal_content"></b></h4>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<h2 style="font-family:MinhaFonte3, Cursive;">
				Produtos
				<span class='glyphicon glyphicon-globe' aria-hidden='true'>
				</span></h2>
		</div>

		<div class="col-md-4 text-right">
					<form action="#" method="POST">
							<div class="form-row align-items-center" style="float: right;">
									<div class="col-auto pt-2">
										<a
										data-toggle="collapse"
										href="#collapseExample" role="button" aria-expanded="false"
										aria-controls="collapseExample"
										class="btn btn-sm btn-info tt" style="margin-top:0px;">
										<?php echo $_SESSION['login'];?>
										<span class="badge badge-light">0</span>
									</a>

			</div>


			<div class="col-auto">
				<button type="submit" class="btn btn-sm btn-outline-info " name="sair"
				style="margin-top:8px;">
					Sair
					<span class="glyphicon glyphicon-log-out" aria-hidden="true">
					</span>
				</button>
			</div>

		</div>
	</form>
	<div class="collapse" id="collapseExample">
		<div class="card">
			<div class="card-header text-left">Global News
				<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
			</div>
		<div class="card-body text-center">
			<p>Nenhuma notificação disponível</p>
		</div>

	<div class="card-footer"></div></div>
</div>
		</div>
	</div>
	<div class="row" id="mostrarmodulo" style="display: none;">
		<div class="col col-xs-8">

			<form  action="#" method="POST" name="cadastro_modulo">
						<div class="card">
								<div class="card-header bg-info"><h5 style="color:white;font-family: Amaranth-Regular, Cursive;">
									Cadastro Módulo <span class='glyphicon glyphicon-floppy-saved' aria-hidden='true'></span></h5></div>
										<div class="card-body">
				<div class="form-row align-items-center">
					<div class="col-auto">
						<label for="nome_modulo" style="font-family: Amaranth-Regular, Cursive;">Módulo:</label>
					</div>
					<div class="col-auto">
						<input type="text" name="nome_modulo" class="form-control form-control-sm">
					</div>
					<div class="col-auto">
						<label for="indice" style="font-family: Amaranth-Regular, Cursive;">Índice:</label>
					</div>
					<div class="col-auto">

						<input type="text" name="indice" class="form-control form-control-sm">
					</div>
					<div class="col-auto">
						<label for="revisao" style="font-family: Amaranth-Regular, Cursive;">Revisão:</label>
					</div>
					<div class="col-auto">
						<input type="text" name="revisao" class="form-control form-control-sm"
						style="font-family: Amaranth-Regular, Cursive;">
					</div>
					<div class="col-auto">

						<button type="submit" name="cadastrar_modulo"  class="btn btn-sm btn-outline-info">
							Salvar
						</button>
					</div>
					<div class="col-auto">
						<span class="mostrardiv btn btn-sm btn-outline-info glyphicon glyphicon-minus" aria-hidden='true' id="startbutton"
						data-element="#moduloesconde">
					</span></div>
				</div>

				</div>
				<div class="card-footer" style="font-family: Amaranth-Regular, Cursive;">Registrar módulo <span class="glyphicon glyphicon-saved" aria-hidden="true"></span></div>
		</div>
			</form>
		</div> <!-- col-xs-8-->
	</div>

	<div class="row" id="escondediv">

		<div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div class="card">
						<div class="card-header"><h6 style="font-family:Arial;"><span class="badge badge-info"><span class="glyphicon glyphicon-align-justify"></span> Menu

						</span>
					</h6>

					</div>
						<div class="card-body">
			<label for="testebtn" style="font-family:Amaranth-Regular, Cursive;">Cadastro Módulo</label>
			<span class="modulo btn btn-sm btn-outline-info glyphicon glyphicon-plus" aria-hidden='true'
			data-element="#mostrarmodulo"
			></span>
			<label for="testebtn1" style="font-family: Amaranth-Regular, Cursive;">Cadastro Componentes</label>
			<span class="componente btn btn-sm btn-outline-info glyphicon glyphicon-plus" aria-hidden='true' id="startbutton"
			data-element="#mostrarcomp"></span>

			<label for="testebtn1" style="font-family: Amaranth-Regular, Cursive;">Registrar Bloco Montagem</label>
			<span class="mostrarReg btn btn-sm btn-outline-info glyphicon glyphicon-plus" aria-hidden='true' id="startbutton"
			data-element="#mostrarRegistro"></span>
		</div>
		</div>
		</div>

	<div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-4">

<div style="position:relative;top:10%;" id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="width:300px;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="preferencial2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="peferencial3.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="preferencial2.png" alt="Third slide">
		</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="preferencial.png" alt="Forth slide">
			</div>
    </div>
</div>
</div>
	</div>

	<div class="row" style="display: none;" id="mostrarcomp">
		<div class="col col-xs-12">

			<form  action="#" method="POST" name="cadastro_componentes">
			<div class="card">
							<div class="card-header bg-info"><h5 style="color:white;font-family: Amaranth-Regular, Cursive;">Cadastro de Componentes <span class='glyphicon glyphicon-floppy-saved' aria-hidden='true'></span></h5></div>
									<div class="card-body">
				<div class="form-row align-items-center">
					<div class="col-auto">
						<label for="codigo" style="font-family: Amaranth-Regular, Cursive;">Código:</label>
					</div>
					<div class="col-auto">
						<input type="text" name="codigo" class="form-control form-control-sm">
					</div>
					<div class="col-auto">
						<label for="local" style="font-family: Amaranth-Regular, Cursive;">Local:</label>
					</div>
					<div class="col-auto">

						<input type="text" name="local" class="form-control form-control-sm">
					</div>
					<div class="col-auto">
						<label for="local" style="font-family: Amaranth-Regular, Cursive;">Descrição:</label>
					</div>
					<div class="col-auto">

						<input type="text" name="descricao" class="form-control form-control-sm">
					</div>
					<div class="col-auto">

						<button type="submit" name="cadastrar_componente" class="btn btn-sm btn-outline-info"
						style="font-family: Amaranth-Regular, Cursive;">
							Salvar
						</button>
					</div>
					<div class="col-auto">


						<span class="mostrardiv  btn btn-sm btn-outline-info glyphicon glyphicon-minus" aria-hidden='true' id="startbutton"
						data-element="#moduloesconde">

					</span></div>
				</div><!-- fechar o card aqui -->

			</div>
			<div class="card-footer" style="font-family: Amaranth-Regular, Cursive;">Registrar componente <span class="glyphicon glyphicon-save" aria-hidden="true"></span></div>
		</div>
			</form>

		</div>
	</div>

	<div class="row" id="mostrarRegistro" style="display:none;">
		<div class="col col-xs-12 ">


					<div class="card">
							<div class="card-header bg-info"><h5 style="color:white;font-family: Amaranth-Regular, Cursive;">
								Inserir Registro <span class='glyphicon glyphicon-floppy-saved' aria-hidden='true'>
								</span></h5></div>
								<div class="card-body">
									<form action="#" method="POST" enctype="multipart/form-data" name="teste_query"
									class="">
									<div class="form-row">
					<?php mysqli_select_db($conn,"newGlobal");
					$query_modulos = mysqli_query($conn,"SELECT * FROM modulo ;");
					$query_componentes = mysqli_query($conn,"SELECT * FROM componentes");
					$query_etapa = mysqli_query($conn,"SELECT * FROM etapa;");
					?>
					<div class="col-auto">

						<label for="registro_modulo" style="font-family: Amaranth-Regular, Cursive;">Módulo:</label>
						<select class="selectpicker form-control form-control-sm"  name="registro_modulo" data-live-search="true"
						 multiple data-max-options="1">
								<option disabled selected >Módulos</option>
							<?php foreach ($query_modulos as $key => $value) {
								?>

								<option value="<?php echo $value['id_modulo'];?>"><?php echo $value['nome_modulo'];?>
								</option>
								<?php
							}
							?>

						</select>

					</div>
					<div class="col-auto">

						<label for="registro_componente" style="font-family: Amaranth-Regular, Cursive;">
							Componente:</label>
						<select class="selectpicker form-control form-control-sm " name="registro_componente"
						multiple data-max-options="1"  data-live-search="true">
						<option disabled selected >Componentes</option>
							<?php foreach ($query_componentes as $key => $value) {
								?>

								<option value="<?php echo $value['id_componente'];?>"><?php echo $value['codigo'];?>
								</option>
								<?php
							}
							?>

						</select>

					</div>
					<div class="col-auto">

						<label for="registro_etapa" style="font-family: Amaranth-Regular, Cursive;">Etapa:</label>
						<select class="selectpicker form-control form-control-sm" name="registro_etapa" id="registro_etapa"
						multiple data-max-options="1"  data-live-search="true">
						<option disabled selected >Etapa</option>
							<?php foreach ($query_etapa as $key => $value) {
								?>

								<option value="<?php echo $value['id_etapa'];?>"><?php echo $value['etapa'];?></option>
								<?php
							}
							?>

						</select>
					</div>
						<div class="col-auto">
							<label for="imagemID form-control"  style="font-family: Amaranth-Regular, Cursive;">Imagem:</label>

							<label  for="fileInput" name="imagemID" class="btn btn-sm btn-outline-info form-control"
							id="imagemID"
							>Upload
								<span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
							</label>
							<input type="FILE" name="imagem" class="form-control form-control-sm" style="display:none;" id="fileInput">
						</div>

						<div class="col-auto" style="font-family: Amaranth-Regular, Cursive;">
							<label for="posicao" >Posição:</label>
							<input type="text" name="posicao" class="form-control form-control-sm" placeholder="Posição"
							style="width: 70px;"
							>
						</div>

						<div class="col-auto" style="font-family: Amaranth-Regular, Cursive;">
							<label for="quantidade">Quantidade:</label>
							<input type="text" name="quantidade" class="form-control form-control-sm" placeholder="Quantidade"
							style="width:90px;"
							>
						</div>
						<div class="col-auto" style="font-family: Amaranth-Regular, Cursive;">
							<label for="slide" >Slide:</label>
							<input type="text" name="slide" class="form-control form-control-sm" placeholder="slide"
							style="width: 50px;"
							>
						</div>

						<div class="col-auto">
							<input type="submit" name="enviar_imagem" style="font-family: Amaranth-Regular, Cursive;
							margin-top:45%;"
							class="btn btn-outline-info btn-sm" value="Registrar">
						</div>

						<div class="col-auto" >
							<button class="mostrardiv btn btn-sm btn-outline-info text-center" style="margin-top:100%;">
								<span class="glyphicon glyphicon-minus" aria-hidden='true' id="startbutton"
							data-element="#moduloesconde"></button>

						</span>
					</div>
</div>
							</form><!-- fechar o card aqui -->
					</div>
					<div class="card-footer" style="font-family: Amaranth-Regular, Cursive;"
					>Registrar bloco de montagem <span class="glyphicon glyphicon-save" aria-hidden="true"></span></div>



				</div>

			</div>
		</div>
			<br>
			<div class="row">

				<div class="col-12">

						<form action="#" method="POST" >
							<div class="card">
										<div class="card-header"><h5><span class="badge badge-info"
										style="font-family: Arial, Cursive;"
										>Buscar componentes ou módulos <span class="glyphicon glyphicon-search" aria-hidden="true"></span></span></h5></div>
											<div class="card-body">
						<div class="form-row align-items-center">
							<div class="col-auto">
								<label for="searchModulo"
								style="font-family: Amaranth-Regular, Cursive;"
								>Componentes por Módulo:</label>

								<select class="selectpicker form-control form-control-sm"
								multiple data-max-options="1"  data-live-search="true" data-dropup-auto="false"
								name="registro_modulo_search"
								>
									<option disable selected >Buscar Módulos</option>
									<?php foreach ($query_modulos as $key => $value) {
										?>

										<option value="<?php echo $value['id_modulo'];?>"><?php echo $value['nome_modulo'];?></option>
										<?php
									}
									?>

								</select>
							</div>
							<div class="col-auto">
								<button type="submit" name="searchButtonComp"
								class="btn-outline-info btn btn-sm"
								style="font-family: Amaranth-Regular, Cursive;margin-top:45%;">
									Buscar
									<span class='glyphicon glyphicon-search' aria-hidden='true'></span>
								</button>
							</div>
							<div class="col-auto mb-12">
								<label for="searchButton"
								style="font-family: Amaranth-Regular, Cursive;"
								>Buscar Componentes:</label>


								<input type="text" name="searchComponentes" class="form-control form-control-sm">
							</div>
							<div class="col-auto mb-12" >
								<label for="search"
								style="font-family: Amaranth-Regular, Cursive;">
								Módulos:</label>

							<input type="text" class="form-control form-control-sm" name="search">
						</div>
						<div class="col-auto mb-6">
							<button type="submit" class="btn btn-outline-info btn-sm" name="searchButton"
							style="font-family: Amaranth-Regular, Cursive;margin-top:45%;">
								<span class='glyphicon glyphicon-search' aria-hidden='true'></span>
							Buscar</button>
						</div>
					</div><!-- fechar o card aqui -->
				</div>
			</div>
					</form>


				</div><!-- div col -->

			</div>

			<br>
			<?php






			if(isset($_POST['searchButtonComp'])){
				$registro_modulo_search = $_POST['registro_modulo_search'];
				$aux = $registro_modulo_search;
				mysqli_select_db($conn,"newGlobal");


				$query_search = "SELECT modulo.nome_modulo,
				modulo.indice,modulo.revisao,
				componentes.codigo,componentes.local,etapa.etapa,

			  placa.quantidade,placa.posicao,placa.slide,imagens.imagem FROM registros
				INNER JOIN modulo ON modulo.id_modulo = registros.id_modulo
				INNER JOIN etapa ON etapa.id_etapa = registros.id_etapa
				INNER JOIN componentes ON  componentes.id_componente = registros.id_componente
				INNER JOIN imagens ON  imagens.id_imagem = registros.id_imagem
				INNER JOIN placa ON placa.id_placa = registros.id_placa
				WHERE modulo.id_modulo = '$registro_modulo_search';";


				$query = mysqli_query($conn,$query_search);

				$verifica = mysqli_num_rows($query);

				if($verifica == 0 ){
					?>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
								</div>
								<div class="modal-body">
									<h6>Nenhum Registro Encontrado</h6>
								</div>
								<div class="modal-footer">
									<a href="imprimeDados.php"><button type="button" class="btn btn-outline-info">Continuar</button></a>
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





					exit;}elseif($verifica != 0){

						?>
						<div class="modal fade" id="modalComp" tabindex="-1" role="dialog" aria-labelledby="loadingModal_label3">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
									</div>
									<div class="modal-body">
										<div class='alert' role='alert'>
											<center>
												<div class="loader" id="loader3"></div><br>
												<h4><b id="loadingModal_content3"></b></h4>
											</center>
										</div>
									</div>
									<div class="modal-footer" id="rodapecomp">

									</div>
								</div>
							</div>
						</div>
						<script>

							mComponente();

						</script>

						<?php
					}

					$query_modulo = mysqli_query($conn,"SELECT * FROM modulo  WHERE id_modulo = '$aux';");
					$array = mysqli_fetch_assoc($query_modulo);
					$resultado = implode (";", $array);
					list($id_modulo,$nome_modulo,$indice,$revisao) = explode(";",$resultado);
					$h = 1 ;
					?>
					<div class="row" id="MostrarResultados">
						<div class="col-lg-12">

							<?php


							echo "<br>";
							?>
							<div class="card">
									<div class="card-header"><?php echo "<h6 style='font-family: Arial;'><code>ID(".$id_modulo.")</code>
									Componentes do Módulo: <strong>".$nome_modulo."</strong> Revisão:<strong> ".$revisao."
									</strong> Índice:  <strong>".$indice."</strong>   </h6>"; ?></div>
												<div class="card-body">
							<?php
							echo "<table class='table table-bordered table-hover text-center table-sm'>";
							echo "<thead class='text-center thead-light' style='font-family:Amaranth-Regular, Cursive;'>";
							echo "<th class='text-center'>#</th>";
							echo "<th class='text-center'>Código:</th>";
							echo "<th class='text-center'>Local:</th>";
							echo "<th class='text-center'>Etapa:</th>";
							echo "<th class='text-center'>Quantidade:</th>";
							echo "<th class='text-center'>Posição:</th>";
							echo "<th class='text-center'>Slide:</th>";
							echo "<th class='text-center'>Imagem:</th>";
							echo "</thead>";
							echo "<tbody>";
							foreach ($query as $key => $value) {
								echo "<tr style='font-family: Arial;'>";
								echo "<td>".$h."</td>";
								echo "<td font-size:15px;>".$value['codigo']."</td>";
								echo "<td>".$value['local']."</td>";
								echo "<td>".$value['etapa']."</td>";
								echo "<td>".$value['quantidade']."</td>";
								echo "<td>".$value['posicao']."</td>";
								echo "<td>".$value['slide']."</td>";
								echo"<td><a data-fancybox='gallery' href='testesNewGlobal/".$value['imagem']."'>
								<i class='img_color'><span class='glyphicon glyphicon-picture' aria-hidden='true'></span></i>
								</a></td>";
								echo "</tr>";
								$h++;
							}
							echo "</tbody>";
							echo "</table>";
							?>
						</div>
					</div>
						</div>
					</div>
					<br>
					<br>
					<?php
				}



				if(isset($_POST['searchButton'])){
$search = $_POST['search'];
$searchComponentes = $_POST['searchComponentes'];
mysqli_select_db($conn,"newGlobal");

if($search != "" && $searchComponentes == ""){

$query_modulos = mysqli_query($conn,"SELECT * FROM
modulo WHERE nome_modulo LIKE '%$search%'");

$NumReg = mysqli_num_rows($query_modulos);
if($NumReg == 0 ){
	?>

	<div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
				</div>
				<div class="modal-body">
					<p>Nenhum Registro Encontrado</p>
				</div>
				<div class="modal-footer">
					<a href="imprimeDados.php"><button type="button" class="btn btn-outline-info">Continuar</button></a>
				</div>
			</div>
		</div>
	</div>
	<script>
		mComponente()
	</script>		;
	<?php
	exit;}
	?>
	<div class="card">
		<div class="card-header" style="font-family:Arial, Cursive;">Módulos cadastrados..
			<span class="glyphicon glyphicon-ok" aria-hidden="true">
			</span>
		</div>
			<div class="card-body">
	<table class="table table-sm table-hover table-bordered">
			<thead class="thead-light text-center" style="font-family:Arial, Cursive;">
				<th>Módulo</th>
				<th>Índice</th>
				<th>Revisão</th>

			</thead>
			<tbody>
		<?php
			foreach ($query_modulos as $key => $value) {
			  echo "<tr class='text-center' >";

				echo "<td>".$value['nome_modulo']."</td>";
				echo "<td>".$value['indice']."</td>";
				echo "<td>".$value['revisao']."</td>";
				echo "</tr>";
				echo "</form>";
			}
			?>
	</tbody>
	</table>
	</div>
	</div>
	<br><br>
<?php
exit;}


//$query_search = "SELECT  modulo.nome_modulo,modulo.indice,modulo.revisao,componentes.codigo,componentes.local,etapa.etapa,placa.quantidade,placa.posicao,imagens.imagem FROM registros
//INNER JOIN modulo ON modulo.id_modulo = registros.id_modulo
//INNER JOIN etapa ON etapa.id_etapa = registros.id_etapa
//INNER JOIN imagens ON  imagens.id_imagem = registros.id_imagem
//INNER JOIN placa ON placa.id_placa = registros.id_placa
//WHERE modulo.nome_modulo LIKE '%$searchComponentes%';";

//$query = mysqli_query($conn,$query_search);

					$query = mysqli_query($conn,"SELECT * FROM componentes WHERE codigo LIKE '%$searchComponentes%';")or die ("erro");

					$verifica = mysqli_num_rows($query);
					$queryaux = $query;

					foreach ($queryaux as $key => $value) {
						$aux++;
					}



					if($verifica == 0 || $searchComponentes == ""){
						?>

						<div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
									</div>
									<div class="modal-body">
										<p>Nenhum Registro Encontrado</p>
									</div>
									<div class="modal-footer">
										<a href="imprimeDados.php"><button type="button" class="btn btn-outline-info">Continuar</button></a>
									</div>
								</div>
							</div>
						</div>
						<script>
							mComponente()
						</script>		;
						<?php
						exit;}

						elseif($verifica != 0){

							?>
							<div class="modal fade" id="modalComp" tabindex="-1" role="dialog" aria-labelledby="loadingModal_label3">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
										</div>
										<div class="modal-body">
											<div class='alert' role='alert'>
												<center>
													<div class="loader" id="loader3"></div><br>
													<h4><b id="loadingModal_content3"></b></h4>
												</center>
											</div>
										</div>
										<div class="modal-footer" id="rodapecomp">

										</div>
									</div>
								</div>
							</div>
							<script>

								mComponente();

							</script>


							<?php
						}
						?>
						<div class="row" id="MostrarResultados2">
							<div class="col-lg-12">

								<?php
								$w = 1 ;
								?>
									<div class="card">
											<div class="card-header"><?php echo "<h6 style='font-family:Arial;'><i>Registros Encontrados</i>   '".$searchComponentes."'<strong>   " .$aux."</strong></h6>"; ?></div>

												<div class="card-body">
								<?php

								echo "<table class='table table-hover table-bordered text-center table-sm table-responsive-md'>";
								echo "<thead class='text-center thead-light'>";
								echo "<th class='text-center'>#</th>";
                echo "<th class='text-center'>Código:</th>";
								echo "<th class='text-center'>Descrição:</th>";
								echo "<th class='text-center'>Local:</th>";

								echo "</thead>";
								echo "<tbody>";
								foreach ($query as $key => $value) {

									echo "<tr>";
									echo "<td><code>".$w."</code></td>";

									echo "<td>".$value['codigo']."</td>";
									echo "<td>".$value['descricao']."</td>";
									echo "<td>".$value['local']."</td>";

									echo "</tr>";
									$w++;

								}
								echo "</tbody>";
								echo "</table>";

								?>
										</div>
									</div>

							</div>
						</div>
						<br><br>
						<?php
					}




					if(isset($_POST['enviar_imagem']) && $nivel_necessario > 2){

						$registro_modulo = $_POST['registro_modulo'];
						$registro_componente = $_POST['registro_componente'];
						$registro_etapa= $_POST['registro_etapa'];
						$posicao = $_POST['posicao'];
						$quantidade = $_POST['quantidade'];
						$imagem = $_FILES['imagem'];
						$nome_imagem = null;
						$slide = $_POST['slide'];

						preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
						$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
						$caminho_imagem = "testesNewGlobal/" . $nome_imagem;
						move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
						mysqli_select_db($conn,"newGlobal");
						$sql_imagem = mysqli_query($conn,"INSERT INTO imagens (id_modulo,id_componente,id_etapa,imagem)
							VALUES
							(
							'$registro_modulo',
							'$registro_componente',
							'$registro_etapa',
							'$nome_imagem');")or die ("problema imagem sql");

						$sql_placa = mysqli_query($conn,"INSERT INTO placa (posicao,quantidade,slide) VALUES ('$posicao','$quantidade','$slide');");

						$query_registrar_imagem = mysqli_query($conn,"SELECT id_imagem FROM imagens WHERE imagem ='$nome_imagem';");

						foreach ($query_registrar_imagem as $key => $value) {
							$id_imagem = $value['id_imagem'];
						}

						$select_placa_id = mysqli_query($conn,"SELECT MAX(id_placa) FROM placa ;");
						foreach ($select_placa_id as $key => $value) {
							$placa = $value['MAX(id_placa)'];
						}

						$verifica_antes_inserir = mysqli_query($conn,"SELECT * FROM
							registros WHERE id_modulo = '$registro_modulo' AND id_componente = '$registro_componente'");

						$confirma = mysqli_num_rows($verifica_antes_inserir);

						if($confirma != 0 ){
							?>
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
										</div>
										<div class="modal-body">
											<p>Este componente já está cadastrado neste módulo</p>
										</div>
										<div class="modal-footer">
											<a href="imprimeDados.php"><button type="button" class="btn btn-primary">Continuar</button></a>
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
							exit;}
		#header("location:imprimeDados.php");}

							$registro_final = mysqli_query($conn,"INSERT INTO
								registros(id_modulo,id_componente,id_etapa,id_placa,id_imagem)VALUES
								(
								'$registro_modulo',
								'$registro_componente',
								'$registro_etapa',
								'$placa',
								'$id_imagem');") or die ("problema no registro final");
							if($sql_imagem && $registro_final){
								?>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
											</div>
											<div class="modal-body">
												<p>Upload de imagem e registros realizados com sucesso!</p>
											</div>
											<div class="modal-footer">
												<a href="imprimeDados.php"><button type="button" class="btn btn-outline-info">Continuar</button></a>
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
								exit;}


							}
							elseif(isset($_POST['enviar_imagem']) && $nivel_necessario < 2){
								?>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
											</div>
											<div class="modal-body">
												<p><b>Você não possui privilégios para realizar cadastros!</b><br>
												Contate o administrador do sistema!</p>
											</div>
											<div class="modal-footer">
												<a href="imprimeDados.php"><button type="button" class="btn btn-outline-primary">Continuar</button></a>
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
								exit;}

							if (isset($_POST['cadastrar_componente']) && $nivel_necessario > 2) {

								$codigo = $_POST['codigo'];
								$local = $_POST['local'];
								$descricao = $_POST['descricao'];
								if($codigo == "" || $local =="")
									{
										?>
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
													</div>
													<div class="modal-body">
														<h5><b>Por favor , preencha todos as informações solicitadas!</b></h5>
													</div>
													<div class="modal-footer">
														<a href="imprimeDados.php"><button type="button" class="btn btn-outline-primary">Continuar</button></a>
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
										exit;}


										mysqli_select_db($conn,"newGlobal");

										$sql_componentes = mysqli_query($conn,"INSERT INTO componentes(
											codigo,
											local,
											descricao) VALUES(
											'$codigo',
											'$local',
											'$descricao');");


										if($sql_componentes){
											?>
												<div class="modal fade" id="mCadastroC" tabindex="-1" role="dialog" aria-labelledby="loadingModal_label5">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
															</div>
															<div class="modal-body">
																<div class='alert' role='alert'>
																	<center>
																		<div class="loader" id="loader5"></div><br>
																		<h4><b id="loadingModal_content5"></b></h4>
																	</center>
																</div>
															</div>
															<div class="modal-footer" id="rodapeComponente">

															</div>
														</div>
													</div>
												</div>
												<script>

													mCadastroComp();

												</script>
												<?php
											exit;}


											$teste = mysqli_query($conn,"SELECT id_componente FROM componentes WHERE codigo = '$codigo';");

											foreach ($teste as $key => $value) {
												$id_compo = $value['id_componente'];


											}


										}elseif(isset($_POST['cadastrar_componente']) && $nivel_necessario < 2){
											?>
											<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
														</div>
														<div class="modal-body">
															<p><b>Você não possui privilégios para realizar cadastros!</b><br>
															Contate o administrador do sistema!</p>
														</div>
														<div class="modal-footer">
															<a href="imprimeDados.php"><button type="button" class="btn btn-outline-primary">Continuar</button></a>
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
											exit;}

#Verifcando se o botão foi acionado
										if (isset($_POST['cadastrar_modulo']) && $nivel_necessario > 2) {
#Variavéis para receber o metodo POST//
											$nome_modulo = $_POST['nome_modulo'];
											$indice = $_POST['indice'];
											$revisao = $_POST['revisao'];
#selecionando base de dados
											mysqli_select_db($conn,"newGlobal");

											$query = "INSERT INTO modulo (nome_modulo,indice,revisao) VALUES ('$nome_modulo','$indice','$revisao');";

											$sql_query_modulo = mysqli_query($conn,$query) or die ("problema ao executar o comando SQL!");




											if($sql_query_modulo){
												?>
												<div class="modal fade" id="mModulo" tabindex="-1" role="dialog" aria-labelledby="loadingModal_label2">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
															</div>
															<div class="modal-body">
																<div class='alert' role='alert'>
																	<center>
																		<div class="loader" id="loader2"></div><br>
																		<h4><b id="loadingModal_content2"></b></h4>
																	</center>
																</div>
															</div>
															<div class="modal-footer" id="rodapemodulo">

															</div>
														</div>
													</div>
												</div>
												<script>

													mModulo();

												</script>
												<?php
												exit;}else{
													?>
													<script type="text/javascript">alert("Problemas ao efetuar o cadastro!");header("location:imprimeDados.php");</script>

													<?php

												}
											}elseif(isset($_POST['cadastrar_modulo']) && $nivel_necessario < 2){
												?>
												<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
															</div>
															<div class="modal-body">
																<p><b>Você não possui privilégios para realizar cadastros!</b><br>
																Contate o administrador do sistema!</p>
															</div>
															<div class="modal-footer">
																<a href="imprimeDados.php"><button type="button" class="btn btn-outline-primary">Continuar</button></a>
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
												exit;}

											?>

										</div>
										<div class="footerFooter bg-info text-left"
										style="font-family:MinhaFonte4, Cursive; font-size:12px;">Powered By P&B Deseveloper ©</div>
									</body>
									</html>
