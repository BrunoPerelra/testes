<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
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
	</head>
<style type="text/css">
body {background:  white ;}

.btsize {
height: 50px;
width: 150px;
}
.container {
margin: 0 auto;

}
.text-center .img-responsive {
    margin: 0 auto;
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

			      <h1 class="teste"><small style="color:white">Global Eletronics                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></small></h1>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-left">

	 <li class="dropdown">
		 <a href="#" style="color:white" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Global<span class="caret"></span></a>
		 <ul class="dropdown-menu">
			 <li><a href="#">Cadastro</a></li>
			 <li><a href="#">Revisão</a></li>
			 <li><a href="#">Atualizar</a></li>
			 <li><a href="#">Linha</a></li>
		 </ul>
	 </li>
 </ul>



	 <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
      </form>

</div>
</div>
	</nav>


		<div class="container containertop">
			<div class="row">
				<div class="col-xs-10">




					<h2>Global Eletronics <small>Inserir slide adicional <span class=" glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></small></h2>
<br><br>
<form class="form-inline" action="salvar_registro.php" method="POST" enctype="multipart/form-data" name="cadastro" >
<table class="table">
<tr>
<td><label>Módulo:</label></td>
<td><input class="form-control" type="text" name="modulo" ></td>

<td><label>Código componente:</label></td>
<td><input class="form-control" type="text" name="codigo"></td>
</tr>
<tr>
<td><label>Etapa:</label></td>
<td><select id ="selectsize" class="form-control" name="etapa">
  <option>1ª Etapa</option>
  <option>2ª Etapa</option>
  <option>3ª Etapa</option>
  <option>Pré-Formatação</option>
  <option>Complementação</option>
	<option>Teste</option>
</select></td>

<td><label>Posicão:</label></td>
<td><input class="form-control" type="text" name="posicao" ></td>
</tr>
<tr>
<td><label>Quantidade:</label></td>
<td><input class="form-control" type="text" name="quantidade" ></td>
<td><label>Local:</label></td>
<td><input class="form-control" type="text" name="local" ></td>
</tr>
<tr>
<td><label>Revisão:</label></td>
<td><input class="form-control" type="text" name="revisao" ></td>
<td><label>Observações:</label></td>
<td><input class="form-control" type="text" name="obs" ></td>
</tr>
<tr>
<td><label>Imagem:</label></td>
<td><input class="form-control" type="file" name="imagem" ></td>
</tr>
</table>
<table class="table">
	<tr>
	<td><label style="color:red">Módulo:</label></td>
	<td><input class="form-control" type="text" name="aftercodigo" ></td>
	<td><label style="color:red">Código:</label></td>
	<td><input class="form-control" type="text" name="aftercodigo" ></td>
	</tr>
</table>



<table class="table">
<tr>
<td><input type="submit" name="cadastrar" value="Inserir" class="btn btn-lg btn-info btsize" /></td>
<td><a class="btsize btn btn-lg btn-success" href="consulta.php" target="" role="button">Consulta</a></></td>


</tr>
</table>

</form>
</div>

<div class="col-xs-2">
</div>
                  <div class="col-lg-2 text-center" id="teste">
  <img src="globallogo.png" alt="" class="img-responsive">
<br><br><br>
<img   src="isoi.png" alt="" width="100px" height="100px" class="img-responsive ">

              </div>


			</div>

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
