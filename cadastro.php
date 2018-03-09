<?php
session_start();
$nivel_necessario = $_SESSION['nivel'];

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}
	if ($nivel_necessario < 2){
header('location:consulta.php');


	}
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Global Eletronics   </title>
<link rel='shortcut icon' href="globallogo.png" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap-3.3.7-dist\css\bootstrap.css" rel="stylesheet" media="screen">
		<link href="perso.css?version=12" rel="stylesheet">
	</head>
<style type="text/css">
body {background:  #e9ebee;}

.btsize {
height: 50px;
width: 150px;
}
.container {
margin: 0 auto;

}
.text-center .img-responsive {
    margin: 0 auto;
    padding: 0px;
}
label {

font-size: 17px;
color: black;
}

#selectsize {
width: 195px;
}
.navbar{
border-color:#03A1DC;
background-color: #03A1DC;
}
.teste{
margin: 2px;
}

.containertop{
margin-top: 80px;


}
body {background:#e9ebee;};
</style>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">


			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

			      <a href="consulta.php" style="color: #03A1DC;"><h1 class="teste" style="color: white; text-shadow: black 0.1em 0.1em 0.2em"><small style="color:white">Global Eletronics                <span class="
			      glyphicon glyphicon-globe" aria-hidden="true"></span></small></h1></a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



	 <form class="navbar-form navbar-right">
       <a href="consulta.php"> <button type="submit" class="btn btn-global"><b style="color: white; text-shadow: black 0.1em 0.1em 0.2em">INDÚSTRIA, IMPORTAÇÃO E EXPORTAÇÃO LTDA.</b>
				</button></a>
      </form>

</div>
</div>
	</nav>
		<div class="container containertop">
			<div class="row">
				<div class="col-xs-10">




					<h2  ><p style="font-family:;  color: white; text-shadow: black 0.1em 0.1em 0.2em">Global Eletronics</p> <small>Cadastro Módulos e Componentes <span class=" glyphicon glyphicon-floppy-saved" aria-hidden="true"></span></small></h2>
<br><br>
<form class="form-inline" action="salvar_registro.php" method="POST" enctype="multipart/form-data" name="cadastro" >
<table class="table">
<tr>
<td><label style="font-family: Comic Sans;font-size:20px; ">Módulo:</label></td>
<td><input class="form-control" type="text" name="modulo" ></td>

<td><label style="font-family: Comic Sans;font-size:20px;" >Código componente:</label></td>
<td><input class="form-control" type="text" name="codigo"></td>
</tr>
<tr>
<td><label style="font-family: Comic Sans;font-size:20px;">Etapa:</label></td>
<td><select id ="selectsize" class="form-control" name="etapa">
  <option>1ª Etapa</option>
  <option>2ª Etapa</option>
  <option>3ª Etapa</option>
  <option>Pré-Formatação</option>
 <option>Pré-Formatação 2ª Etapa</option>
 <option>Complementação</option>
	<option>Teste</option>
</select></td>

<td><label style="font-family: Comic Sans;font-size:20px;">Posicão:</label></td>
<td><input class="form-control" type="text" name="posicao" ></td>
</tr>
<tr>
<td><label style="font-family: Comic Sans;font-size:20px;">Quantidade:</label></td>
<td><input class="form-control" type="text" name="quantidade" ></td>
<td><label style="font-family: Comic Sans;font-size:20px;">Local:</label></td>
<td><input class="form-control" type="text" name="local" ></td>
</tr>
<tr>
<td><label style="font-family: Comic Sans;font-size:20px;">Revisão:</label></td>
<td><input class="form-control" type="text" name="revisao" ></td>
<td><label style="font-family: Comic Sans;font-size:20px;">Observações:</label></td>
<td><input class="form-control" type="text" name="obs" ></td>
</tr>
<tr>
<td><label style="font-family: Comic Sans;font-size:20px;">Imagem:</label></td>
<td><input class="form-control" type="file" name="imagem" ></td>
<td><label style="font-family: Comic Sans;font-size:20px;">Slide:</label></td>
<td><input class="form-control" type="text" name="slide" ></td>
</tr>
</table>
<table class="table">
<tr>
<td><button  name="cadastrar"  class="btn  btn-global  text-center">Inserir      <span style="margin: 0 auto;" class=" glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> </button></td>
<td><a class=" btn  btn-global" href="consulta.php" target="" role="button">Buscar  <span class=" glyphicon glyphicon-search" aria-hidden="true"></span></a></></td>


</tr>
</table>

</form>
</div>

<div class="col-xs-2">
</div>
                  <div class="col-lg-2 text-center" id="teste">
  <img src="globallogo.png" alt="" class="img-responsive" width="100px" height="100px">
<br><br><br>
<img   src="isoi.png" alt="" width="100px" height="100px" class="img-responsive ">

              </div>


			</div>
			<div class="row">
			<div class="col-xs-12">
				
			<a href="modulos_cadastrados.php"><button class="btn  btn-global">Verificar Módulos Cadastrados    <span class=" glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button></a>

			</div>	


			</div>
		</div>
		<script src="jquery/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
