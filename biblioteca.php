<?php 
session_start();
$nivel_necessario = $_SESSION['nivel'];
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}
if($nivel_necessario  <= 2){
	header('location:consulta.php');
}
include_once("conexao.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca Global</title>

<link rel='shortcut icon' href="globallogo.png" />
<script src="jquery/jquery.min.js"></script>
	<link href="bootstrap4\css\glyphicons.css" rel="stylesheet" media="screen">
<script src="jquery/jquery-latest.js"></script>
<link href="bootstrap4\css\bootstrap.css" rel="stylesheet" media="screen">
<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<script src="bootstrap4\js\bootstrap.min.js"></script>

<link href="perso.css?version=12" rel="stylesheet">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/simple-sidebar.css?version=12" rel="stylesheet">
<link rel="stylesheet" href="jquery/jquery.fancybox.min.css" />
<script src="jquery/jquery.fancybox.min.js"></script>
<style type="text/css">
	body{
  background: url(dark.jpg) no-repeat center center fixed;
  background-size: cover; /*Css padrão*/
  -webkit-background-size: cover; /*Css safari e chrome*/
  -moz-background-size: cover; /*Css firefox*/
  -ms-background-size: cover; /*Css IE não use mer#^@%#*/
  -o-background-size: cover; /*Css Opera*/
}
.box{
	width:auto + 2px;
	height:auto;
	background-color:#343a40;
	border-radius: 5px;
	}
.img_color{

color:#17a2b8;

}	

</style>
<script type="text/javascript">
	
$(document).ready(function() {
   $(".meuselect").select2();
});

</script>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="biblioteca.php">Global Eletronis <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     	<li>
     	<div class="btn-group">
  <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menu
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="consulta.php">Início <span class="glyphicon glyphicon-check" aria-hidden="true"></span></a>
    <a class="dropdown-item" href="cf.php">Componentes CF <span class="glyphicon glyphicon-remove-sign"></span></a>
    
  </div>
</div>	

     	</li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
<div class="container" style="margin: 0 auto;margin-top: 80px;">
		<div class="row">
			<div class="col-xs-1"><img  src="globallogo.png" alt="" class="img-responsive" width="80px" height="80px" style="margin: 0 auto;"></div>
			<div class="col-lg-5">
				<h4 style="color:white;">Biblioteca Global <span class="glyphicon glyphicon-book" aria-hidden="true"></span> <small>Cadastro Livros <span class="glyphicon glyphicon-save" aria-hidden="true"></span></small>  </h4><br><br>
										</div>
										

										<div class="col-xs-6"><h4 style="color:white;">Retirada de Livros  <span class="glyphicon glyphicon-book" aria-hidden="true"></span> <small>Controle de Aluguéis e Reservas  <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span></small></h4>


									</div>
								</div>

	<div class="row">
	
							
						

								<div class="col-lg-5">	
								<form method="POST" action="#" name="cadastrar" enctype="multipart/form-data">
										
						<div class="form-row align-items-center">
						<div class="col-auto">
															<label for="nome" class="box" style="color:white;">Titulo:</label>
											<input  type="text" name="titulo" class="form-control form-control-sm">
											</div>
						<div class="col-auto">
						<label for="autor" class="box" style="color:white;">Autor:</label>
									<input type="text" name="autor" class="form-control form-control-sm">
								</div>
							</div>
								<div class="form-row align-items-center">
						<div class="col-auto">
						
						<label  for="edicao" class="box" style="color:white;">Edição:</label>
						<input type="text" name="edicao" class="form-control form-control-sm">
							</div>
						<div class="col-auto">
							<label  for="imagem" class="box" style="color:white;">Imagem:</label></td>
							<input style="width: 190px;" type="file" name="imagem" class="form-control form-control-sm">
								</div>
							</div>
									<br>
									 <button class="btn btn-info btnteste" name="enviar">Salvar <span class="glyphicon glyphicon-saved" aria-hidden="true"></span></button>
							
									 </form>
								
								
								</div>
									
									 

									 
								
									<div class="col-lg-7">
 
<form name="produto" method="post" action="#">
 

<div class="form-row align-items-center">
 	<div class="col-auto">

<label for="dtRetirada" class="box" style="color:white;">Data Retirada:</label>
<?php $data2 = date("Y-m-d", time());
$data3 = implode("/", array_reverse(explode("-", $data2))); 
$aux = date('Y-m-d',strtotime("+15days",strtotime($data2)));
$dataEntrega = implode("/", array_reverse(explode("-", $aux))); 
 
 ?>	

<input type="text" name="dtRetirada" class="form-control form-control-sm text-center" style="width: 110px;" value="<?php echo $data3?>">
</div>
	<div class="col-auto">
<label for="dtEntrega" class="box" style="color:white;">Data Entrega:</label>	
										<input style="width: 110px;" type="text" name="" value="<?php echo $dataEntrega?> " class="form-control form-control-sm text-center">
										<input type="hidden" name="dtEntrega" value="<?php echo $aux?> ">
										</div>

							<div class="col-auto">
										
			
										<label for="livro" class="box" style="color:white;">Selecione um Livro:</label>
										 <select class="form-control form-control-sm" style="width: 150px;" name="livro">
										 <option>Selecione...</option>
										 
										 <?php 
										 mysqli_select_db($conn,"biblioteca");
										 $query = mysqli_query($conn,"SELECT * FROM livros ORDER BY titulo ASC;");

										 while($book = mysqli_fetch_array($query)) { ?>
										 <option  value="<?php echo $book['id'] ?>"><?php echo $book['titulo'] ?></option>
										 <?php } ?>
										 
										 </select>
																				

										 </div>
										

										<div class="col-auto">	


															<label for="colaborador" style="color:white;" class="box">Colaborador:</label>
														
															 <select class="form-control form-control-sm" style="	width:150px;" name="colaborador">														
															 <option>Selecione...</option>
															 
															 <?php 
															 mysqli_select_db($conn,"biblioteca");
															 $query = mysqli_query($conn,"SELECT * FROM usuarios ORDER BY nome ASC;");

															 while($prod = mysqli_fetch_array($query)) { ?>
															 <option  value="<?php echo $prod['id'] ?>"><?php echo $prod['nome'] ?></option>
															 <?php } ?>
															 
															 </select>

</div>
</div>
<br>
<div class="form-row align-items-center">
	<div class="col-auto">	
		
	<div class="custom-control custom-radio radio-inline">
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="alugado">
															
  <label class="custom-control-label box" for="customRadio1" style="color:white;">Alugar o Livro</label>
</div>
</div>
<div class="col-auto">
<div class="custom-control custom-radio radio-inline">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="reservado">
															
  <label class="custom-control-label box" for="customRadio2" style="color:white;">Reservar o Livro</label>
</div>
</div>
	<div class="col-auto">	
<div class="radio-inline">
<button class="btn btn-info" name="book">Salvar <span class="glyphicon glyphicon-saved" aria-hidden="true"></span></button>	</div>
</div>
</div>	

</form>




									</div>

								

					</div>		
										<br>
						<div class="row">
											<div class="col-xs-12">		
												<form action="#" name="search" method="POST">
												<div class="form-row">	
													<div class="col-auto">
															
															<label for="campoSearch" style="color:white;" class="box">Buscar por Titulo:</label>	
															</div>
															<div class="col-auto">
															<input type="text" name="campoSearch" class="form-control form-control-sm">
															</div>
															<div class="col-auto">
															
															<label for="colSearch" style="color:white;" class="box">Buscar por Colaborador:</label>	
															</div>
															<div class="col-auto">
															<input type="text" name="colSearch" class="form-control form-control-sm">	</div>
															<div class="col-auto">
													
															<button  class="btn btn-info" name="search" >Aluguéis <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
															</div>
															<div class="col-auto">
															<button  class="btn btn-info" name="search2">Reservas <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
															</div>
															<div class="col-auto">	<button  class="btn btn-info" name="search3">Livros <span class="glyphicon glyphicon-book" aria-hidden="true"></span> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>		


													</div>
												</div>
  
											</form>
										
									</div>

								</div>
								<br>
<?php 

if(isset($_POST['search3'])){
$search = $_POST['campoSearch'];
$col = $_POST['colSearch'];
$banco = mysqli_select_db($conn,"biblioteca");

$sql = mysqli_query($conn,"SELECT * FROM livros WHERE titulo LIKE '%$search%' ;") or die ("erro");
echo "<table class='table table-bordered table-hover table-info table-sm table-dark'>";
echo "<thead class='thead-dark'>";
echo "<th class='text-center'>#</th>";
echo "<th class='text-center'>Titulo</th>";
echo "<th class='text-center'>Autor</th>";
echo "<th class='text-center'>Edição</th>";
echo "<th class='text-center'>Imagem</th>";
echo "</thead>";
echo "<tbody>";
$y = 1;
while($result = mysqli_fetch_array($sql)){
echo "<form action='".$_SERVER['PHP_SELF']."' method='POST' name='reservas'>";
echo "<tr class='text-center'>";
echo "<td>".$y."</td>";
echo "<td>".$result['titulo']."</td>";
echo "<td>".$result['autor']."</td>";
echo "<td>".$result['edicao']."</td>";

echo"<td><a data-fancybox='gallery' href='livros/".$result['imagem']."'><i class='img_color'><span class='glyphicon glyphicon-picture' aria-hidden='true'></span></i></a></td>";
echo "</tr>";
echo "</form>";
$y++;
}
echo "</tbody>";
echo "</table>";
}
if(isset($_POST['search'])){

$search = $_POST['campoSearch'];
$col = $_POST['colSearch'];
mysqli_select_db($conn,"biblioteca");



$sql = mysqli_query($conn,"SELECT titulo,usuarios.nome ,status.status,status.dtRetirada,status.dtEntrega,livros.id,status.id_aluguel FROM livros
INNER JOIN status ON status.id_livro = livros.id  
INNER JOIN usuarios ON usuarios.id = status.id_usuario WHERE livros.titulo LIKE '%$search%' AND usuarios.nome LIKE '%$col%';");

$verifica = mysqli_num_rows($sql);

if($verifica == 0){

?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Nenhum Registro Encontrado</h5>
							</div>
							<div class="modal-footer">
								<a href="biblioteca.php"><button type="button" class="btn btn-global">Continuar</button></a>
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
	
	
	echo "<table class='table table-bordered table-hover table-sm table-dark'>";
	echo "<thead class='thead-dark'>";
	echo "<th>#</th>";
	echo "<th class='text-center'>Titulo</th>";
	echo "<th class='text-center'>Nome Colaborador</th>";
	echo "<th class='text-center'>Status</th>";
	echo "<th class='text-center'>Data Retirada</th>";
	echo "<th class='text-center'>Data Entrega</th>";
	echo "<th class='text-center'>Excluir</th>";
	
	echo "</thead>";
	echo "<tbody>";
	$i = 1;
while ($array = mysqli_fetch_array($sql)) {
		
	$aux1 = implode("/", array_reverse(explode("-", $array['dtRetirada']))); 
	$aux2 = implode("/", array_reverse(explode("-", $array['dtEntrega'])));
	echo "<form action='".$_SERVER['PHP_SELF']."' name='reservar' method='POST'>";
	echo "<tr class='text-center'>";	
 	echo "<input type='hidden' name='idlivros' value='".$array['id']."'>";	
	echo "<td>".$i."</td>";
	echo "<td><input type='hidden' name='livroreserva' value='".$array['titulo']."'> ".$array['titulo']."</td>";
    echo "<td>".$array['nome']."</td>";
	echo "<td>".$array['status']."</td>";
	echo "<td>".$aux1."</td>";
	echo "<td><input type='hidden' name='dtEntregaReserva' value='".$array['dtEntrega']."'>".$aux2."</td>";
	echo "<td><input type='submit' class='btn btn-danger btn-sm' name='excluirAluguel' value='Excluir'></td>";	
	echo "<input type='hidden' name='campoIdAluguel' value='".$array['id_aluguel']."'>";
	
	echo "</tr>";
	echo "</form>";	
$i++;}

echo "<tbody>";
echo "</table>";


}
}




if(isset($_POST['book'])){

$dtRetirada = implode("-", array_reverse(explode("/", $_POST['dtRetirada'])));
$aux = $_POST['dtEntrega'];
$dtEntrega = $aux;
$livro = $_POST['livro'];
$colaborador = $_POST['colaborador'];
$status = $_POST['customRadio'];
$dtReserva = date('Y-m-d',strtotime("+1days",strtotime($_POST['dtEntrega'])));

$banco = mysqli_select_db($conn,"biblioteca");
$check = mysqli_query($conn,"SELECT * FROM status WHERE id_livro = '$livro';") or die ("erro ao executar comando mysql");
$verifica = mysqli_num_rows($check);
if($verifica != 0 && $status == 'alugado'){
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Este livro já está locado , você pode reserva-lo</h5>
							</div>
							<div class="modal-footer">
								<a href="biblioteca.php"><button type="button" class="btn btn-global">Continuar</button></a>
							</div>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function () {
						$('#myModal').modal('show');
					});
			</script>		
			<?php exit; }elseif($status == 'alugado'){



$query = mysqli_query($conn,"INSERT INTO status (id_livro,id_usuario,dtRetirada,dtEntrega,status) 
	VALUES 
	('$livro',
	'$colaborador',
	'$dtRetirada',
	'$dtEntrega',
	'$status');") or die ("erro");


}elseif($status == 'reservado' ){

$checar = mysqli_query($conn, "SELECT * FROM reservas WHERE id_livro = '$livro';");

$checkr = mysqli_num_rows($checar);

if($checkr != 0){
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Este livro já está reservado!</h5>
							</div>
							<div class="modal-footer">
								<a href="biblioteca.php"><button type="button" class="btn btn-global">Continuar</button></a>
							</div>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function () {
						$('#myModal').modal('show');
					});
			</script>		
			<?php exit; }elseif($checkr == 0){

				mysqli_select_db($conn,"biblioteca");

				$verificar = mysqli_query($conn,"SELECT id_livro FROM status WHERE id_livro = '$livro';");
				$rowns = mysqli_num_rows($verificar);
				if($rowns == 0 ){
					?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Este livro não está alugado!</h5>
							</div>
							<div class="modal-footer">
								<a href="biblioteca.php"><button type="button" class="btn btn-global">Continuar</button></a>
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

$query2 = mysqli_query($conn,"INSERT INTO reservas (id_livro,id_usuario,data_reserva) 
	VALUES 
	('$livro',
	'$colaborador',
	'$dtReserva');") or die ("erro");
}

			

			}
}

if($query && $status == 'alugado'){
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Livro Alugado com Sucesso!</h5>
							</div>
							<div class="modal-footer">
								<a href="biblioteca.php"><button type="button" class="btn btn-global">Continuar</button></a>
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
if($query2 && $status == 'reservado')
{ ?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Livro Reservado Com sucesso!</h5>
							</div>
							<div class="modal-footer">
								<a href="biblioteca.php"><button type="button" class="btn btn-global">Continuar</button></a>
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

if(isset($_POST['search2'])){

$search = $_POST['campoSearch'];
$col = $_POST['colSearch'];

$banco = mysqli_select_db($conn,"biblioteca");

$sql = mysqli_query($conn,"SELECT titulo,usuarios.nome ,livros.id,reservas.id_usuario,reservas.data_reserva,reservas.id_reserva FROM livros
INNER JOIN reservas ON reservas.id_livro = livros.id  
INNER JOIN usuarios ON usuarios.id = reservas.id_usuario WHERE livros.titulo LIKE '%$search%' AND usuarios.nome LIKE '%$col%';");
$verifica = mysqli_num_rows($sql);

if($verifica == 0){

?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Nenhum Registro Encontrado</h5>
							</div>
							<div class="modal-footer">
								<a href="biblioteca.php"><button type="button" class="btn btn-global">Continuar</button></a>
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


echo "<table class='table table-bordered table-hover table-sm table-dark'>";
echo "<thead>";
echo "<th class='text-center'>#</th>";
echo "<th class='text-center'>Titulo</th>";
echo "<th class='text-center'>Nome Colaborador</th>";
echo "<th class='text-center'>Data para retirada</th>";
echo "<th class='text-center'>Status</th>";
echo "<th class='text-center'>Excluir</th>";
echo "</thead>";
echo "<tbody>";
$y = 1;
while($result = mysqli_fetch_array($sql)){
echo "<form action='".$_SERVER['PHP_SELF']."' method='POST' name='reservas'>";
$aux = implode("/", array_reverse(explode("-", $result['data_reserva'])));
echo "<tr class='text-center'>";
echo "<td>".$y."</td>";
echo "<td>".$result['titulo']."</td>";
echo "<td>".$result['nome']."</td>";
echo "<td>".$aux."</td>";
echo "<td>Reservado</td>";
echo "<input type='hidden' name='excluirReserva' value='".$result['id_reserva']."'>";
echo "<td><input type='submit' class='btn btn-danger btn-sm' name='excluir' value='Excluir'></td>";
	
echo "</tr>";
echo "</form>";
$y++;
}
echo "</tbody>";
echo "</table>";

}
}

if(isset($_POST['enviar'])){

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$edicao = $_POST['edicao'];
$imagem = $_FILES['imagem'];
$nome_imagem = null;


preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
$caminho_imagem = "livros/" . $nome_imagem;
move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

mysqli_select_db($conn,'biblioteca');

$query = "INSERT INTO livros (titulo,autor,edicao,imagem) VALUES ('$titulo','$autor','$edicao','$nome_imagem');";
$sql = mysqli_query($conn,$query);

if($sql){
	?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Cadastro realizado com Sucesso!</h5>
							</div>
							<div class="modal-footer">
								<a href="biblioteca.php"><button type="button" class="btn btn-global">Continuar</button></a>
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


}else
{
	echo "<script>alert('erro');</script>";
}
}
if(isset($_POST['excluirAluguel'])){

$idAluguel = $_POST['campoIdAluguel'];
echo $id_aluguel;
$banco = mysqli_select_db($conn,"biblioteca");

$sql = mysqli_query($conn,"DELETE  FROM status WHERE id_aluguel = '$idAluguel';") or die ("Problema ao executar o comando SQL");
?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Registro deletado com sucesso!</h5>
							</div>
							<div class="modal-footer">
								<a href="biblioteca.php"><button type="button" class="btn btn-global">Continuar</button></a>
							</div>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function () {
						$('#myModal').modal('show');
					});
			</script>
			<?php }

if(isset($_POST['excluir'])){

$idReserva = $_POST['excluirReserva'];
echo $id_aluguel;
$banco = mysqli_select_db($conn,"biblioteca");

$sql = mysqli_query($conn,"DELETE  FROM reservas WHERE id_reserva = '$idReserva';") or die ("errouuuuuu");
?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Registro deletado com sucesso!</h5>
							</div>
							<div class="modal-footer">
								<a href="biblioteca.php"><button type="button" class="btn btn-global">Continuar</button></a>
							</div>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function () {
						$('#myModal').modal('show');
					});
			</script>
			<?php }



?>



</div>

</body>
</html>