<?php

session_start();
$nivel_necessario = $_SESSION['nivel'];
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
}
if($nivel_necessario <= 2){
header('location:imprimeDados.php');

}
include_once("conexao.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Global Eletronics</title>
	<link rel='shortcut icon' href="globallogo.png" />
	<script src="jquery/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>

<script src="jquery/jquery-latest.js"></script>
	<link href="bootstrap4\css\bootstrap.css" rel="stylesheet" media="screen">
	<link href="bootstrap4\css\glyphicons.css" rel="stylesheet" media="screen">
	<script src="bootstrap4\js\bootstrap.min.js"></script>
	<script src="js.js?v=12"></script>

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

		}

		.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
			background-color:;
			}@keyframes spin {
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


				.label-file {

				  background-color: #17a2b8;
				  border-radius: 5px;
				  color: #fff;
				  cursor: pointer;
				  margin: 1px;
				  padding: 0px 5px
				}
				@font-face {
			font-family: Coustard-Regular;
			src: url('googleFonts/Coustard-Regular.ttf');
			}
		 @font-face {
	font-family: MinhaFonte2;
	src: url('googleFonts/Lobster-Regular.ttf');
	}
	@font-face {
font-family: MinhaFonte3;
src: url('googleFonts/Pacifico-Regular.ttf');
}
@font-face {
font-family: MinhaFonte4;
src: url('googleFonts/Sh-Regular.ttf');
}
@font-face {
font-family: MinhaFonte5;
src: url('googleFonts/Bangers-Regular.ttf');
}
@font-face {
font-family: MinhaFonte6;
src: url('googleFonts/Amaranth-Regular.ttf');
}
@font-face {
font-family: Alike;
src: url('googleFonts/Alike-Regular.ttf');
}

			</style>




		</head>

<body>
  <nav class="navbar fixed-top navbar-dark bg-info navbar-expand-lg ">
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
  				<a style="font-family:Coustard-Regular, Cursive;" class="nav-link" href="http://globaleletronics.ind.br/">Site</a>
  			</li>

  			<li class="nav-item">
  				<a class="nav-link active" style="font-family:Coustard-Regular, Cursive;" href="http://smileboard.global.redware.com.br">Quadro Emocional</a>
  			</li>
  		</ul>

  	</div>
  </nav>
<div class="container" style="margin-top:80px;">
		<div class="row">
			<div class="col-12">
				<h3 style="font-family:MinhaFonte3, Cursive;">Atualizar dados  <span class='glyphicon glyphicon-refresh' aria-hidden='true'></span></h3>
			</div>
		</div>
		<div class="row" id="menu">
          <div class="col-12">

              <div class="card">
                  <div class="card-header" style="font-family:MinhaFonte6, Cursive;">Atualizar Módulos/Componentes/Blocos
                    <span class="glyphicon glyphicon-refresh" aria-hidden="true">
                    </span>
                    </div>
                  <div class="card-body">
                        <form action="#" method="POST">
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                              <!-- ........................ -->
                              <label style="font-family:MinhaFonte6, Cursive;" for="">Módulo:</label>
                              <span class="atualizarModulo btn btn-sm btn-outline-info
															glyphicon glyphicon-plus-sign" aria-hidden="true"
                              data-element="#atModulo"></span>
                              <!-- ........................ -->
                              <label style="font-family:MinhaFonte6, Cursive;" for="">Componentes:</label>
                              <span class="atualizarComp btn btn-sm btn-outline-info
															glyphicon glyphicon-plus-sign" aria-hidden="true"
                              data-element="#atComp"></span>
                              <!-- .........................-->
                              <label style="font-family:MinhaFonte6, Cursive;" for="">Blocos de Montagem:</label>
                              <span class="atualizarBlocos btn btn-sm btn-outline-info
															glyphicon glyphicon-plus-sign" aria-hidden="true"
                              data-element="#atBlocos"></span>
														</div>
													</div>
											</form>

              </div><!-- card body -->
							<div class="card-footer"></div>
          </div> <!-- card -->
				</div><!-- Colunas col -->
			</div> <!-- linhas row -->
			<!-- NOVA ROW -->
			<div class="row" id="atModulo" style="display:none;">
					<div class="col-12">
									<form action="#" method="POST">
												<div class="card">
												<div class="card-header" style="font-family:MinhaFonte6, Cursive;">Atualizar Módulos:</div>
												<div class="card-body">
														<div class="form-row align-items-center">
																<div class="col-auto">
																		<label for="searchModulo" style="font-family:MinhaFonte6, Cursive;">Buscar Módulo:</label>
																	</div> <!-- col auto -->
																	<div class="col-auto">
																		<input type="text" class="form-control form-control-sm"
																		name="searchModulo">
																</div> <!-- col auto -->
																<div class="col-auto">
																	<button type="submit" class="btn btn-sm btn-outline-info"
																	name="btnSearchModulo"
																	style="font-family:MinhaFonte6, Cursive;">Buscar</button>
																</div>
																	<div class="col-auto">
																	<button class="voltar btn btn-sm btn-outline-info"
																	data-element="#menu">
																	<span class="glyphicon glyphicon-minus-sign" aria-hidden="true">
																		</span></button>

																</div>


														</div> <!-- form row -->

												</div> <!-- card body -->
												<div class="card-footer"></div>
											</div><!-- card -->
									</form>

					</div>
			</div><!-- row -->
			<div class="row" id="atComp" style="display:none;">
					<div class="col-12">
									<form action="#" method="POST">
												<div class="card">
												<div class="card-header" style="font-family:MinhaFonte6, Cursive;">Atualizar Componentes</div>
												<div class="card-body">
														<div class="form-row align-items-center">
																<div class="col-auto">
																		<label for="searchComponente" style="font-family:MinhaFonte6, Cursive;">Buscar Componente</label>
																	</div> <!-- col auto -->
																	<div class="col-auto">
																		<input type="text" class="form-control form-control-sm"
																		name="searchComponente">
																</div> <!-- col auto -->
																<div class="col-auto">
																	<button type="submit" class="btn btn-sm btn-outline-info"
																	name="btnSearchComponente"
																	style="font-family:MinhaFonte6, Cursive;">Buscar</button>
																</div> <!-- col auto -->
																<div class="col-auto">
																<button class="voltar btn btn-sm btn-outline-info"
																data-element="#menu">
																<span class="glyphicon glyphicon-minus-sign" aria-hidden="true">
																	</span></button>

															</div>
														</div> <!-- form row -->

												</div> <!-- card body -->
												<div class="card-footer"></div>
											</div><!-- card -->
									</form>

					</div> <!-- fechamento col -->
			</div> <!-- fechamento row -->
			<div class="row" id="atBlocos" style="display:none;">
					<div class="col-12">
									<form action="#" method="POST">
												<div class="card">
												<div class="card-header" style="font-family:MinhaFonte6, Cursive;">Atualizar Blocos Montagem
													<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
												</div>
												<div class="card-body">
														<div class="form-row ">
																<div class="col-auto">
																		<label for="searchBlocos" style="font-family:MinhaFonte6, Cursive;">Buscar Blocos:</label>

																		<!-- SELECT -->
																		<?php
																		mysqli_select_db($conn,"newGlobal");
																		$nomeModulo = mysqli_query($conn,"SELECT * FROM modulo ;");
																		?>
																		<select
																				name="searchBlocos"
																				class="selectpicker form-control form-control-sm"
																				data-live-search="true"
																				data-dropup-auto="false"
						 														multiple data-max-options="1"
																				>

						 														<option disabled selected>Buscar Bloco</option>
																			<?php
																			foreach ($nomeModulo as $key => $value) {

																				?>
																				<option value="<?php echo $value['id_modulo'];?>">
																					<?php echo $value['nome_modulo'];?></option>
																				<?php
																				}
																				?>
																			</select>
																		<!-- SELECT -->
																</div> <!-- col auto -->
																<div class="col-auto">
																	<button type="submit" class="btn btn-sm btn-outline-info"
																	name="btnSearchBlocos"
																	style="font-family:MinhaFonte6, Cursive;margin-top:55%;">Buscar</button>
																</div> <!-- col auto -->
																<div class="col-auto">
																<button class="voltar btn btn-sm btn-outline-info"
																style="margin-top: 100%;"
																data-element="#menu">
																<span class="glyphicon glyphicon-minus-sign" aria-hidden="true">
																	</span></button>

															</div>
														</div> <!-- form row -->

												</div> <!-- card body -->
												<div class="card-footer">Blocos de montagem</div>
											</div><!-- card -->
									</form>

					</div> <!-- fechamento col -->
			</div> <!-- fechamento row -->
			<div class="row">
					<div class="col-12">
								<?php
									if(isset($_POST['btnSearchModulo'])){
									$searchModulo = $_POST['searchModulo'];
									mysqli_select_db($conn,"newGlobal");
									$query = mysqli_query($conn,"SELECT * FROM modulo WHERE nome_modulo LIKE '%$searchModulo%';");
									$verifica = mysqli_num_rows($query);
									if($verifica == 0 || $searchModulo == ""){
										?>
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myModalLabel" style="font-family:MinhaFonte6, Cursive;">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
													</div>
													<div class="modal-body">
														<h6>Nenhum Registro Encontrado</h6>
													</div>
													<div class="modal-footer">
														<a href="newGlobalUpdate.php"><button type="button" class="btn btn-outline-info">Continuar</button></a>
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
									<div class="card">
										<div class="card-header" style="font-family:MinhaFonte6, Cursive;">Atualizar informações Módulo
											<span class="glyphicon glyphicon-refresh" aria-hidden="true">
											</span>
										</div>
											<div class="card-body">
									<table class="table table-sm table-hover table-bordered">
											<thead class="thead-light text-center" style="font-family:MinhaFonte6, Cursive;">
												<th>Módulo</th>
												<th>Índice</th>
												<th>Revisão</th>
												<th>Salvar</th>
											</thead>
											<tbody>
										<?php
											while ($resultado2 = mysqli_fetch_assoc($query)) {
												$resultado = implode(";",$resultado2);
												list($id_modulo,$nome_modulo,$indice,$revisao) = explode(";",$resultado);
												echo "<form action='#' method='POST'>";
												echo "<tr class='text-center' >";
												echo "<input type='hidden' name='id_modulo' value='".$id_modulo."'>";
												echo "<td>".$nome_modulo."</td>";
												echo "<td><input  type='text' class='form-control
												form-control-sm text-center' value='".$indice."' name='campoIndice'></td>";
												echo "<td><input  type='text' class='form-control
												form-control-sm text-center' value='".$revisao."' name='campoRevisao'></td>";
												echo "<td><button type='submit' class='btn btn-outline-info btn-sm' name='salvarModulo'>
													Salvar
												</button>";
												echo "</tr>";
												echo "</form>";
											}
											?>
									</tbody>
									</table>
								</div>
							</div>
									<?php
								}
								?>
						</div>
			</div>
			<div class="row">
					<div class="col-12">
								<?php
									if(isset($_POST['btnSearchComponente'])){
									$searchComponente = $_POST['searchComponente'];
									mysqli_select_db($conn,"newGlobal");
									$query = mysqli_query($conn,"SELECT * FROM componentes WHERE codigo LIKE '%$searchComponente%';");
									$verifica = mysqli_num_rows($query);
									if($verifica == 0 || $searchComponente == ""){
										?>
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myModalLabel" style="font-family:MinhaFonte3, Cursive;">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
													</div>
													<div class="modal-body">
														<h6>Nenhum Registro Encontrado</h6>
													</div>
													<div class="modal-footer">
														<a href="newGlobalUpdate.php"><button type="button" class="btn btn-outline-info">Continuar</button></a>
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
									<div class="card">
										<div class="card-header" style="font-family:MinhaFonte6, Cursive;">Atualizar informações Componentes
											<span class="glyphicon glyphicon-refresh" aria-hidden="true">
											</span>
										</div>
											<div class="card-body">
									<table class="table table-sm table-hover table-bordered">
											<thead class="thead-light text-center" style="font-family:MinhaFonte6, Cursive;">
												<th>Código</th>
												<th>Local</th>
												<th>Descrição</th>
												<th>Salvar</th>
											</thead>
											<tbody>
										<?php
											while ($resultado2 = mysqli_fetch_assoc($query)) {
												$resultado = implode(";",$resultado2);
												list($id_componente,$codigo,$local,$descricao) = explode(";",$resultado);
												echo "<form action='#' method='POST'>";
												echo "<tr class='text-center' style='font-family:Arial'>";
												echo "<input type='hidden' name='id_componente' value ='".$id_componente."'>";
												echo "<td style='font-size:15px;'>".$codigo."</td>";
												echo "<td><input  type='text' class='form-control
												form-control-sm text-center' value='".$local."' name='campoLocal'></td>";
												echo "<td><input  type='text' class='form-control
												form-control-sm text-center' value='".$descricao."' name='campoDescricao'></td>";
												echo "<td><button type='submit' class='btn btn-outline-info btn-sm' name='salvarComp'>
													Salvar
												</button>";
												echo "</tr>";
												echo "</form>";
											}
											?>
									</tbody>
									</table>
								</div>
							</div>
									<?php
								}
								?>
						</div>
			</div>
			<div class="row">
					<div class="col-12">
								<?php
								if(isset($_POST['btnSearchBlocos'])){
									$searchBlocos = $_POST['searchBlocos'];
									$idModulo = $searchBlocos;
									mysqli_select_db($conn,"newGlobal");
									//query
									$search_blocos2 = "SELECT id,modulo.nome_modulo,
									modulo.indice,modulo.revisao,componentes.codigo,
									componentes.local,etapa.etapa,etapa.id_etapa,placa.quantidade,placa.slide,
									placa.posicao,placa.id_placa,imagens.imagem,imagens.id_imagem FROM registros
									INNER JOIN modulo ON modulo.id_modulo = registros.id_modulo
									INNER JOIN etapa ON etapa.id_etapa = registros.id_etapa
									INNER JOIN componentes ON  componentes.id_componente = registros.id_componente
									INNER JOIN imagens ON  imagens.id_imagem = registros.id_imagem
									INNER JOIN placa ON placa.id_placa = registros.id_placa
									WHERE modulo.id_modulo = '$searchBlocos';";
									//query
									$search_blocos = mysqli_query($conn,$search_blocos2);
									$buscarNomeModulo = mysqli_query($conn,"SELECT * FROM modulo WHERE id_modulo = '$idModulo';");
									$verifica = mysqli_num_rows($search_blocos);
									if($verifica == 0 ){
										?>
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myModalLabel" style="font-family:MinhaFonte3, Cursive;">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
													</div>
													<div class="modal-body">
														<h6>Nenhum Registro Encontrado</h6>
													</div>
													<div class="modal-footer">
														<a href="newGlobalUpdate.php"><button type="button" class="btn btn-outline-info">Continuar</button></a>
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






									$array = mysqli_fetch_assoc($buscarNomeModulo);
									$result = implode(";",$array);
									list($id_modulo,$nome_modulo,$indice,$revisao) = explode(";",$result);
									?>
									<div class="card">
											<div class="card-header"><?php echo "<h6 style='font-family:Arial, Cursive;'><code>ID(".$id_modulo.")
											</code>   Componentes do Módulo: <strong>".$nome_modulo."
											</strong> Revisão:<strong> ".$revisao."  </strong> Índice:  <strong>".$indice."</strong>
											</h6>"; ?>
										</div>
														<div class="card-body">
									<?php
									echo "<table class='table table-bordered table-hover text-center table-sm'>";
									echo "<thead class='text-center thead-light' style='font-family:Arial, Cursive;
									font-size:14px;'>";
									echo "<th class='text-center'>#</th>";
									echo "<th class='text-center'>Código:</th>";

									echo "<th class='text-center'>Etapa:</th>";
									echo "<th class='text-center'>Quantidade:</th>";
									echo "<th class='text-center'>Posição:</th>";
									echo "<th class='text-center'>Slide:</th>";
									echo "<th class='text-center'>Imagem:</th>";
									echo "<th class='text-center'>Salvar:</th>";
										echo "<th class='text-center'>Excluir:</th>";
									echo "</thead>";
									echo "<tbody>";
									$h =1;
									$queryEtapa = mysqli_query($conn,"SELECT * FROM etapa ;");
									foreach ($search_blocos as $key => $value) {

										?>
										<form action="#" method="POST" enctype="multipart/form-data">
											<?php
										echo "<tr class='text-center' style='font-family:Arial;'>";
										echo "<input type='hidden' name='id' value='".$value['id']."'>";
										echo "<input type='hidden' name='idPlaca' value='".$value['id_placa']."'>";
										echo "<input type='hidden' name='idEtapa' value='".$value['id_etapa']."'>";
										echo "<input type='hidden' name='oldImg' value='".$value['imagem']."'>";
										echo "<input type='hidden' name='idImagem' value='".$value['id_imagem']."'>";
										echo "<td class='align-items-center'>".$h."</td>";
										echo "<td style='font-size:15px;'>".$value['codigo']."</td>";
										//--

										//0--------
										echo "<td><select name='atualizarEtapa' class='form-control form-control-sm'

										>";
															echo "<option value='".$value['id_etapa']."'>".$value['etapa']."</option>";
															foreach($queryEtapa as $ki => $valor){
																echo "<option value='".$valor['id_etapa']."'>";
																echo $valor['etapa'];
															}
																echo "</option>";
																echo "</select></td>";
										//--
										echo "<td><input type='text' class='form-control form-control-sm text-center'
										value='".$value['quantidade']."' name='atualizarQTD' ></td>";
										//--
										echo "<td><input type='text' class='form-control form-control-sm text-center'
										value='".$value['posicao']."' name='atualizarPosicao'></td>";
										echo "<td><input type='text' class='form-control form-control-sm text-center'
										value='".$value['slide']."' name='atualizarSlide'></td>";
										//imagem
										echo"<td>
										<div class='form-row' style='margin-left:5px;' >
										<div class='col-auto' >
										<a  class='img-color' data-fancybox='gallery' href='testesNewGlobal/".$value['imagem']."'>
										<span class='glyphicon glyphicon-picture img_color' aria-hidden='true'>
										</span>
										</a>
										</div>
										<div class='col-auto'>
											<label class=''>
  										<input type='file'style='display:none;' name='imagemNew'/ >
  										<span class='img_color glyphicon glyphicon-share' aria-hidden='true'></span>
											</label>

										</div>
										</div>
										</td>";

										//imagem
										echo "<td><button type='submit' class='btn btn-sm btn-outline-info' name='btnSalvarBloco'>Salvar</button></td>";
										echo "<td><button type='submit' class='btn btn-sm btn-outline-danger' name='btnExcluirBloco'>Excluir</button></td>";
										echo "</tr>";
										?>
									</form>
										<?php

										$h++;

									}
									echo "</tbody>";
									echo "</table>";
									?>
								</div>
							</div>
									<?php

								}

								?>


					</div>
			</div>
<?php
if(isset($_POST['btnSalvarBloco'])){
$id_imagem = $_POST['idImagem'];
$id_placa = $_POST['idPlaca'];
$id_etapa = $_POST['atualizarEtapa'];
$id = $_POST['id'];
$atualizarLocal = $_POST['atualizarLocal'];
$atualizarQtd = $_POST['atualizarQTD'];
$atualizarPosicao = $_POST['atualizarPosicao'];
$atualizarSlide = $_POST['atualizarSlide'];
$imagem2 = $_FILES['imagemNew'];
$old_imagem = $_POST['oldImg'];
if (!empty($imagem2["name"])) {

preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem2["name"], $ext);
$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
$caminho_imagem = "testesNewGlobal/" . $nome_imagem;
move_uploaded_file($imagem2["tmp_name"], $caminho_imagem);
unlink("testesNewGlobal/".$old_imagem."");
}else {

	$nome_imagem = $old_imagem;
}

//echo $nome_imagem;
mysqli_select_db($conn,"newGlobal");
$query_img = mysqli_query($conn,"UPDATE imagens SET imagem = '$nome_imagem'
WHERE id_imagem = '$id_imagem';")or die ("erro");

$query_posicao = mysqli_query($conn,"UPDATE placa SET posicao = '$atualizarPosicao'
,quantidade = '$atualizarQtd',slide = '$atualizarSlide' WHERE id_placa = '$id_placa';");

$query_etapa = mysqli_query($conn,"UPDATE registros SET id_etapa = '$id_etapa'
WHERE id = '$id';");

echo $id_etapa;
if($query_etapa && $query_img && $query_posicao){

	?>

	<div class="modal fade" id="mBlocos" tabindex="-1" role="dialog" aria-labelledby="loadingModal_blocos">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
				</div>
				<div class="modal-body">
					<div class='alert' role='alert'>
						<center>
							<div class="loader" id="loaderBlocos"></div><br>
							<h4><b id="loadingModal_blocos"></b></h4>
						</center>
					</div>
				</div>
				<div class="modal-footer" id="rodapeBlocos">

				</div>
			</div>
		</div>
	</div>
	<script>

		blocos();

	</script>
<?php

}else {echo "erro";}


}




if(isset($_POST['salvarComp'])){
$id_componente = $_POST['id_componente'];
$local = $_POST['campoLocal'];
$descricao = $_POST['campoDescricao'];
mysqli_select_db($conn,"newGlobal");


$query_update = mysqli_query($conn,"UPDATE componentes SET local = '".$local."',
descricao = '".$descricao."' WHERE id_componente = '".$id_componente."';")or die("erro");
if($query_update){
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
exit;}
}

if(isset($_POST['salvarModulo'])){
//recebe informações para dar update na tabela $modulo
$id_modulo = $_POST['id_modulo'];
$revisao = $_POST['campoRevisao'];
$indice = $_POST['campoIndice'];

$atualizar_modulo = "UPDATE modulo SET revisao = '$revisao',
																				indice = '$indice'
																				WHERE id_modulo = '$id_modulo';";

$query = mysqli_query($conn,$atualizar_modulo);

if($query){
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



}

}

?>

</div> <!-- container -->
<div class="footerFooter bg-info text-left"
style="font-family:MinhaFonte4, Cursive; font-size:12px;">Powered By P&B Deseveloper ©</div>

</body>
</html>
