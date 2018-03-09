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
	header('location:imprimeDados.php');



}


include_once("conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Global Eletronics</title>
<link rel='shortcut icon' href="globallogo.png" />
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-latest.js"></script>
	<link href="bootstrap4\css\glyphicons.css" rel="stylesheet" media="screen">
<link href="bootstrap4\css\bootstrap.css" rel="stylesheet" media="screen">
<link href="bootstrap4\css\bootstrap.min.css" rel="stylesheet" media="screen">
<script src="bootstrap4\js\bootstrap.min.js"></script>

<link href="perso.css?version=12" rel="stylesheet">
<link rel="stylesheet" href="csstablet.css" media="screen and (max-width: 1259px)" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="jquery/jquery.fancybox.min.css" />
<script src="jquery/jquery.fancybox.min.js"></script>

</head>
<style type="text/css">

	body {background:white ;}
.container{

	margin: 0 auto;
	margin-top: 20px;
}
.camposSize{

width: 20px;

}


}
body{background: ;}

.teste1{

background-color: : red;
border-color: red;




}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color:#81BEF7 ;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #58ACFA;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #F3F781;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #F4FA58;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #F78181;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #FA5858;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #81F781;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #82FA58;
}

.teste{
margin-top: 0px;
}

.tt{text-transform: uppercase;}
.sizepadrao{width: 130px;}
.app-table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}

.app-table-responsive.table-bordered {
  border: 0;
}
</style>

<body>
	<nav class="navbar fixed-top navbar-dark bg-info navbar-expand-lg ">
	<a class="navbar-brand" href="cf.php">Global Eletronics  <span class='glyphicon glyphicon-globe' aria-hidden='true'></span></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">

		<ul class="navbar-nav mr-auto">

			<li class="nav-item active">
				<a class="nav-link" href="imprimeDados.php">Inicio <span class="glyphicon glyphicon-home"
					aria-hidden="true"></span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#">Site</a>
			</li>



			</ul>

		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
			<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Buscar</button>
		</form>
	</div>
</nav>

<div class="container" style="margin-top: 90px;">

	<div class="row">



		<div class="col-sm-6">

			<h3 style="font-family:serif;">Componentes faltantes <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>              <span class="badge badge-info">Global Eletronics   <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></span></h3>



		</div>
			 	<div class="col-sm-2"><?php echo "<b>Bem vindo    </b><i class='tt'><span class='badge badge-info'> ".$_SESSION['login']."</span></i>   <span class='glyphicon glyphicon-user' aria-hidden='true'></span>";?></div>
			<div class="col-md-4">
					<form name="datinha" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
					<div class="form-row align-items-center">
							<div class="col-auto">
					<?php


					$dataatualizada = mysqli_query($conn,"SELECT data FROM atualizar");
					$arrayMostrar = mysqli_fetch_assoc($dataatualizada);
				$resultado2 = implode (";", $arrayMostrar);
list($data) = explode(";" , $resultado2);
					$datales = implode("/", array_reverse(explode("-", $data)));

					echo "<label style='font-size: 14px;' for='atualizada'>Ultima Atualização: </label>	";
					?></div><div class="col-auto"><?php
					echo "<input style='width:120px;' type='text' name='atualizada' class='form-control form-control-sm text-center' value='$datales'></input>";
					?></div><div class="col-auto"><?php
					echo "<button type='submit' name='datinha' class='btn btn-outline-info' '><span class='glyphicon glyphicon-refresh' aria-hidden='true'></span> </button>";


					?>
				</div>

					</div>
					</form>
			</div>

<?php

if(isset($_POST['datinha'])){


$dataatualizar = $_POST['atualizada'];
$nova_data = implode("-", array_reverse(explode("/", $dataatualizar)));

$controle = mysqli_query($conn,"UPDATE atualizar SET data = '$nova_data'");

if($controle){
?>
<script type="text/javascript">alert("Cadastro realizado");header("location:cf.php")</script>
<?php
}
else{
?>
<script type="text/javascript">alert("Ocorreu alguma divergencia de dados ,tente novamente!");header("location:cf.php")</script><?php
}

}





?>
	</div><br>


	<div class="row">

		<div class="col-sm-10">
				<form action="#" method="POST" enctype="multipart/form-data" name="consulta" class="">

					<div class="card">
						<div class="card-header"><h6>Cadastrar Componentes em Falta <span class="badge badge-info"><span class="glyphicon glyphicon-saved" aria-hidden="true"></span></span></h6></div>
								<div class="card-body">
						<div class="form-row align-items-center">



			<div class="col-auto">
				<label for="modulo">Módulo:</label>
				<input  type="text" name="modulo"  class="sizepadrao form-control form-control-sm" placeholder="Módulo">
			</div>

				<div class="col-auto">
				<label for="qtd_op">Quantidade OP:</label>
				<input  type="text" name="qtd_op" class="sizepadrao form-control form-control-sm" placeholder="">
				</div>
				<div class="col-auto">
					<label for="cpnt_ft">Componente FT:</label>
					<input type="text" name="cpnt_ft" class=" sizepadrao form-control form-control-sm" placeholder="">
				</div>
					<div class="col-auto">
					<label for="qtd_ft">Quantidade FT:</label>
					<input  type="text" name="qtd_ft" class="sizepadrao form-control form-control-sm" placeholder="">
					</div>
					<?php $data2 = date("Y-m-d", time());
                    $hora = date("H:i:s", time());

                   $data3 = implode("/", array_reverse(explode("-", $data2))); ?>
				   	<div class="col-auto">
				   	<label for="insercao">Data Inserção:</label>
				   <input  type="text" name="insercao" value="<?php echo $data3;  ?>" class=" sizepadrao form-control form-control-sm text-center" placeholder="">

				</div>

				<div class="col-auto">
					<button type="submit" style="position:absolute;top:5%;" class="btn  btn-outline-info" name="registrar">Registrar <span class="glyphicon glyphicon-save" aria-hidden="true"></span> </button>

				</div>





		</div>
	</div>
</div>
		</div>



								<div class="col-sm-1"><img  src="globallogo.png" alt="" class="img-responsive" width="80px" height="80px" style="margin: 0 auto;"></div>
										<div class="col-sm-1"><img width="80px" height="80px" src="isoi.png" alt="" class="text-center img-responsive">
								</div>

</form>

<?php

if(isset($_POST['registrar'])) {


$modulo = $_POST['modulo'];
$qtd_op = $_POST['qtd_op'];
$cpnt_ft = $_POST['cpnt_ft'];
$qtd_ft = $_POST['qtd_ft'];
$fornecedor = $_POST['fornecedor'];
$data_chegada = $_POST['data_chegada'];
$insercao = implode("-", array_reverse(explode("/", $_POST['insercao'])));

if(empty($_POST['data_chegada'])){

$data_chegada = '11/11/1111';
$teste = 1;
}
$data = $data_chegada;
$nova_data = implode("-", array_reverse(explode("/", $data)));






$banco = mysqli_select_db("global");
$sql = mysqli_query($conn,"INSERT INTO cf (modulo,qtd_op,cpnt_ft,qtd_ft,mp_liberada,mp_separada,quarentena,insercao,nf,fornecedor,data_chegada) VALUES ('$modulo','$qtd_op','$cpnt_ft','$qtd_ft','.','.','.','$insercao','','','1111-11-11')");

if($sql){

?>
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<p>Registro cadastrado com Sucesso!</p>
							</div>
							<div class="modal-footer">
								<a href="cf.php"><button type="button" class="btn btn-outline-info">Continuar</button></a>
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

?>
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Ocorreu alguma divergência de dados!       <small>Verifique os dados inseridos e tente novamente!</small></h5>
							</div>
							<div class="modal-footer">
								<a href="cf.php"><button type="button" class="btn btn-outline-danger">Continuar</button></a>
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


	</div>
	<br>
	<div class="row">
				<div class="col-sm-12">
				<h6>Buscar Componentes ou módulos <span class="badge badge-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span></h6>

				</div>

	</div>
		<div class="row">
			<div class="col-sm-2">
					<div class="card  mb-3 text-center">

							<div class="card-block">
				<label style="font-size: 12px;"><i><b>QTD OP = Quantidade OP</b></i></label><br>
				<label style="font-size: 12px;"><i><b>QTD FT = Quantidade Faltando</b></i></label>
						</div>
					</div>


			</div>
					<div class="col-sm-7">
					<form action="#" method="POST" name="buscar" >

							<div class="form-row align-items-center">
					<div class="col-auto">
					<label for="search">Código Componente:</label>
					</div>
					<div class="col-auto">
					<input type="text" name="search" class="form-control form-control-sm" style="width:120px; ">
					</div>
					<div class="col-auto">
					<label for="modulob">Módulo:</label>
					</div>
					<div class="col-auto">
					<input type="text" name="modulob" class="form-control form-control-sm" style="width: 120px;">
					</div>
					<div class="col-auto">
					<button type="submit" name="buscar" class="btn btn-outline-info buscar" id="buscar">Buscar <span class=" glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</div>
				</div>








			<div class="form-row align-items-center" style="margin-left: 70px;">
					<div class="col-auto">
		<div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" name="liberada" id="CheckLiberada" value="liberada">
      <label class="custom-control-label" for="CheckLiberada"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>  Liberado</label>
      </div>
  </div>
  <div class="col-auto">
    <div  class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" name="separada" id="CheckSeparada" value="separada">
     <label class="custom-control-label" for="CheckSeparada"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Separado</label></div>
    </div>
  <div class="col-auto">

    <div  class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" name="quarentena" id="CheckQuarentena" value="quarentena">
      <label class="custom-control-label" for="CheckQuarentena"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>  Quarentena</label></div>
      </div>
  <div class="col-auto">

    <div  class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" name="faltando" id="CheckFaltando" value="faltando">
      <label class="custom-control-label" for="CheckFaltando"><span class="glyphicon glyphicon-glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Faltando</label></div>
</div>
  </div>

    		</form>
					</div>



					<div class="col-sm-3">


						<table class="table table-sm text-center" style="float:center;">
							<tr>
					 <td style="background: #F78181;">Faltando</td>
					 <td style="background:#81BEF7;color:black">Liberado</td>
								</tr>
								<tr>
									<td style="background: #81F781">Separado</td>
									<td style="background:#F3F781;">Quarentena</td>
						</tr>
						</table>


				</div>

		</div>


		<div class="row">
			<div class="col-sm-12 col-lg-12 col-md-12">





			<?php

if (isset($_POST['buscar'])){

$buscar = $_POST['search'];
$liberada = $_POST['liberada'];
$separada = $_POST['separada'];
$quarentena = $_POST['quarentena'];
$faltando = $_POST['faltando'];
$modulob = $_POST['modulob'];
if(    $buscar == ""
	&& $buscar == NULL
	&& $liberada == ''
	&& $liberada == NULL
	&& $modulob == ''
	&& $modulob == NULL
	&& $separada == ''
	&& $separada == NULL
	&& $quarentena == ''
	&& $quarentena == NULL
	&& $faltando == ''
    && $faltando == NULL
){
?>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
            </div>
            <div class="modal-body">
              <hp>Nenhum filtro selecionado!</hp>
            </div>
            <div class="modal-footer">
              <a href="cf.php"><button type="button" class="btn btn-outline-info">Continuar</button></a>
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

if($faltando != '' && $faltando != NULL){

$search = mysqli_query($conn, "SELECT * FROM `cf` WHERE
	`mp_liberada` != 'liberada'
	AND
	`mp_separada` != 'separada'
	AND
	`quarentena` != 'quarentena'
	or
	`mp_liberada` IS NULL
	AND
	`mp_separada` IS NULL
	AND
	`quarentena` IS NULL

	ORDER BY id DESC;") ;
}else{


$search = mysqli_query($conn,"SELECT * FROM cf WHERE
	modulo LIKE '%$modulob%'
	AND
	cpnt_ft LIKE '%$buscar%'
	AND mp_liberada LIKE '%$liberada%'
  AND mp_separada LIKE '%$separada%'
  AND quarentena LIKE '%$quarentena%'
  ORDER BY id DESC;");
}

if(mysqli_num_rows($search) == 0 ){
 ?>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
            </div>
            <div class="modal-body">
              <p>Nenhum registro encontrado!</p>
            </div>
            <div class="modal-footer">
              <a href="cf.php"><button type="button" class="btn btn-outline-info">Continuar</button></a>
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



    echo "<table class='table table-bordered table-hover table-sm text-center' >";
	echo"<thead class='text-center thead-light'>";
	echo "<th class='cabecalho'>#</th>";
	echo "<th class='cabecalho'>Módulo</th>";
	echo "<th class='cabecalho'>QTD OP</th>";
	echo "<th class='cabecalho'>Componente Faltando</th>";
	echo "<th class='cabecalho'>QTD FT</th>";
	echo "<th class='cabecalho'>Data Inserção</th>";
	echo "<th class='cabecalho'>QTD Separada</th>";
	echo "<th class='cabecalho'>Fornecedor</th>";
	echo "<th class='cabecalho'>Previsão Chegada</th>";
	echo"</thead>";
	$ii =1;
	$pol =1 ;
			while($arrayMostrar = mysqli_fetch_assoc($search)){
				$resultado = implode (";", $arrayMostrar);
list($id, $modulo, $qtd_op, $cpnt_ft ,$qtd_ft,$mp_liberada,$mp_separada,$quarentena,$insercao,$nf,$fornecedor,$data_chegada) = explode(";" , $resultado);


			echo "<form action='#' method='POST' enctype='multipart/form-data' name='consulta' class='form-inline'>";

            ?>

            <tr class="<?php if($mp_liberada == 'liberada' ){echo 'info';}else if ($mp_separada == 'separada'){echo 'warning';}else if ($quarentena == 'quarentena'){echo 'success';}else{echo 'danger';} ?>">
			<?php
			echo "<input type='hidden' value ='".$id."' name='id'>";
			echo "<td>".$ii."</td>";
			echo "<td >".$modulo."</td>";
			echo "<td style='width:80px;text-align: center;'>".$qtd_op."</td>";
			echo "<td style='width:140px;text-align: center;'>".$cpnt_ft."</td>";

			echo "<td style='width:140px;text-align: center;'>".$qtd_ft."</td>";
						$data_insercao = implode("/", array_reverse(explode("-", $insercao)));
			echo "<td style='width:90px;text-align: center;'>".$data_insercao."</td>";
			echo "<td><input type='text' class='form-control form-control-sm text-center' value='".$nf."' name='nf'></td>";



			echo "<td><input type='text' class='form-control form-control-sm text-center' name='fornece' value='".$fornecedor."' style='width:100px;'></td>";
			$datales = implode("/", array_reverse(explode("-", $data_chegada)));
			echo "<td><input type='text' class='form-control form-control-sm text-center' name='datales' style='width:90px;' value='".$datales."'></td>";

			?>
		<td>
			<div class='custom-control custom-checkbox'>
    		<input type='checkbox' class='custom-control-input' name='liberada' value='liberada' <?php if($mp_liberada =='liberada'){echo 'checked';}else{echo '';}   ?> id="<?php echo "TCheckLiberada1{$pol}";?>">
      <label class="custom-control-label" for="<?php echo "TCheckLiberada1{$pol}";?>">Liberado</label></div></td>

    <td>

    <div class='custom-control custom-checkbox'>
      <input type='checkbox' class='custom-control-input' name='separada' value='separada' <?php if($mp_separada =='separada'){echo 'checked';}else{echo '';}   ?> id="<?php echo "TCheckSeparada1{$pol}";?>">
      <label class="custom-control-label" for="<?php echo "TCheckSeparada1{$pol}";?>">Separado</label></div></td>
<td>

    <div class='custom-control custom-checkbox'>
      <input type='checkbox' class='custom-control-input' name='quarentena' value='quarentena' <?php if($quarentena =='quarentena'){echo 'checked';}else{echo '';}   ?> id="<?php echo "TCheckQuarentena1{$pol}";?>">
      <label class="custom-control-label" for="<?php echo "TCheckQuarentena1{$pol}";?>">Quarentena</label></div></td>
<?php
    echo "<td style='width:140px;text-align: center;'><input type='submit' name='salvar' value='Salvar' class='btn btn-info btn-sm'></td>";
     echo "<td style='width:140px;text-align: center;'><input type='submit' name='excluir' value='Excluir' class='btn btn-danger btn-sm'></td>";
			echo "</tr>";


			echo"</form>";
			$pol++;
			$ii++;
			}

echo "</table>";


}


?>
</div>
</div>
<div class="row" id="tabela">
		<div class="col-md-12 col-sm-12 col-lg-12">
<?php

$search = mysqli_query($conn,"SELECT * FROM cf ORDER BY id DESC");


echo "<div class='card border-0'>";

  echo "<div class='card-header'><h6>Componentes e módulos em falta <span class='badge badge-info'> <span class='glyphicon glyphicon-remove-circle'
  aria-hidden='true'>
  </span></span></h6></div>";
echo "<div class='card-body p-0'>";

echo "<table class='table table-bordered table-hover table-sm table-light'> ";
			echo"<thead class='text-center thead-light'>";
		echo "<th class='cabecalho'>#</th>";
		echo "<th class='cabecalho'>Módulo</th>";
			echo "<th class='cabecalho'>QTD OP</th>";
	echo "<th class='cabecalho'>Componente Faltando</th>";
	echo "<th class='cabecalho'>QTD FT</th>";
	echo "<th class='cabecalho'>Data Inserção</th>";
	echo "<th class='cabecalho'>QTD separada</th>";
	echo "<th class='cabecalho'>Fornecedor</th>";
	echo "<th class='cabecalho'>Previsão Chegada</th>";
		echo"</thead>";
		$i = 1;
		$pol = 0 ;
			while($arrayMostrar = mysqli_fetch_assoc($search)){
				$resultado = implode (";", $arrayMostrar);
list($id, $modulo, $qtd_op, $cpnt_ft ,$qtd_ft,$mp_liberada,$mp_separada,$quarentena,$insercao,$nf,$fornecedor,$data_chegada) = explode(";" , $resultado);


			echo "<form action='#' method='POST' enctype='multipart/form-data' name='consulta' class='form-inline'>";

            ?>
            <tbody>
            <tr class="<?php if($mp_liberada == 'liberada' ){echo 'info';}else if ($mp_separada == 'separada'){echo 'warning';}else if ($quarentena == 'quarentena'){echo 'success';}else{echo 'danger';} ?>">

			<?php
			echo " <td>".$i."</td>";
			echo "<input type='hidden' value ='".$id."' name='id'>";
			echo "<input type='hidden' value ='".$cpnt_ft."' name='cpnt_ft'>";
			echo "<td  style='width:170px;text-align: center;'>".$modulo."</td>";
			echo "<td style='width:80px;text-align: center;'>".$qtd_op."</td>";
			echo "<td style='width:140px;text-align: center;'>".$cpnt_ft."</td>";

			echo "<td style='width:140px;text-align: center;'>".$qtd_ft."</td>";
						$data_insercao = implode("/", array_reverse(explode("-", $insercao)));
			echo "<td style='width:140px;text-align: center;'>".$data_insercao."</td>";
			echo "<td style='width:120px;text-align: center;'><input type='text' style='width:70px;'class='form-control form-control-sm text-center' style='width:60px;' value='".$nf."' name='nf'></td>";



			echo "<td style='width:140px;text-align: center;'><input type='text' class='form-control form-control-sm' name='fornece' value='".$fornecedor."' style='width:100px;'></td>";
			$datales = implode("/", array_reverse(explode("-", $data_chegada)));
			echo "<td style='width:140px;text-align: center;'><input type='text' class='form-control form-control-sm' name='datales' style='width:90px;' value='".$datales."'></td>";

			?>
		<td>
			<div class='custom-control custom-checkbox'>
    		<input type='checkbox' class='custom-control-input' name='liberada' value='liberada' <?php if($mp_liberada =='liberada'){echo 'checked';}else{echo '';}   ?>
    		id="<?php echo "TCheckLiberada{$pol}";?>">
      <label class="custom-control-label" for="<?php echo "TCheckLiberada{$pol}";?>">Liberado</label></div></td>

    <td>

    <div class='custom-control custom-checkbox'>
      <input type='checkbox' class='custom-control-input' name='separada' value='separada' <?php if($mp_separada =='separada'){echo 'checked';}else{echo '';}   ?> id="<?php echo "TCheckSeparada{$pol}";?>">
      <label class="custom-control-label" for="<?php echo "TCheckSeparada{$pol}";?>">Separado</label></div></td>
<td>

    <div class='custom-control custom-checkbox'>
      <input type='checkbox' class='custom-control-input' name='quarentena' value='quarentena' <?php if($quarentena =='quarentena'){echo 'checked';}else{echo '';}   ?> id="<?php echo "TCheckQuarentena{$pol}";?>">
      <label class="custom-control-label" for="<?php echo "TCheckQuarentena{$pol}";?>">Quarentena</label></div></td>
<?php
    echo "<td style='width:140px;text-align: center;'><input type='submit' name='salvar' value='Salvar' class='btn btn-info btn-sm'></td>";
     echo "<td style='width:140px;text-align: center;'><input type='submit' name='excluir' value='Excluir' class='btn btn-danger btn-sm'></td>";
			echo "</tr>";
			echo "</tbody>";

			echo"</form>";
			$i++;
			$pol++;

			}

echo "</table>";
echo "</div>";
echo "</div>";


?>

</div>



			</div>

			<?php

			if(isset($_POST['excluir'])){
				$cpnt_ft = $_POST['cpnt_ft'];
			$id = $_POST['id'];

			?>
			<form method="POST" action="excluirCF.php" name="deeletar">
	 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				 <div class="modal-dialog" role="document">
					 <div class="modal-content">
						 <div class="modal-header">
							 <h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
						 </div>
						 <div class="modal-body">
							 <p>Você tem certeza disso ?</p>
							 <?php
							 echo "<input type ='hidden' value ='".$id."' class='fsize form-control' name='id' id='id'>";
						  			echo "<h5> Componente a ser excluído </h5><h3><b><i>".$cpnt_ft."</i></b></h3>";
							 ?>
						 </div>
						 <div class="modal-footer">
							 <a href="cf.php"><button type="button" class="btn btn-outline-info">Cancelar</button></a>

							 <input type="submit" name="confirmado" value="Confirmar"	class="btn btn-outline-danger">
						 </div>
					 </div>
				 </div>
			 </div>
		 </form>
			 <script>
				 $(document).ready(function () {
					 $('#myModal').modal('show');
				 });
					 //break;

			 </script>
             <?php




			}



			if(isset($_POST['salvar'])){
				$id = $_POST['id'];
				$separada = $_POST['separada'];
				$liberada = $_POST['liberada'];
				$quare = $_POST['quarentena'];
				$fornece = $_POST['fornece'];
				$nf = $_POST['nf'];
				$date = $_POST['datales'];
				$nova_date = implode("-", array_reverse(explode("/", $date)));

				$query = mysqli_query($conn,"UPDATE cf SET  mp_separada = '$separada',
															mp_liberada = '$liberada',
															quarentena = '$quare',
															fornecedor = '$fornece',
															data_chegada = '$nova_date',
															nf = '$nf'  WHERE id = '$id'");

				if($query){
					?>
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<p>Registro Atualizado com Sucesso!</p>
							</div>
							<div class="modal-footer">
								<a href="cf.php"><button type="button" class="btn btn-global">Continuar</button></a>
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


						echo "<script>alert('Houve');window.location.href ='cf.php';</script>";}




			}



			 ?>





</div>


</body>
</html>
