<?php
session_start();
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
include_once("conexao.php");
?>

<!DOCTYPE html >
<html>
<head>
<title>Global Eletronics</title>
<link rel='shortcut icon' href="globallogo.png" />
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-latest.js"></script>

<link href="bootstrap-3.3.7-dist\css\bootstrap.css" rel="stylesheet" media="screen">
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>

<link href="perso.css?version=12" rel="stylesheet">
<link rel="stylesheet" href="csstablet.css" media="screen and (max-width: 1259px)" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/simple-sidebar.css?version=12" rel="stylesheet">

<link rel="stylesheet" href="jquery/jquery.fancybox.min.css" />
<script src="jquery/jquery.fancybox.min.js"></script>
<!--<script src="fancybox-master\dist\jquery.fancybox.js"></script>
<script src="fancybox-master\dist\jquery.fancybox.css"></script>-->

</script>
<script type="text/javascript">

$(document).ready(function(){
$('#ocultar').click(function(event){
event.preventDefault();
$('#camadaefeitos').hide('slow');
});

$('#mostrar').click(function(event){
event.preventDefault();
$('#camadaefeitos').show('slow');
});
});



</script>
</head>

<style>
body {background: #e9ebee;}
#selectsize {

width: 195px;
}

.containertop{
margin-top: 80px;

}
.navbar{
border-color:#03A1DC;
background-color: #03A1DC;

}
.dropdown-hover{
	border-color:#03A1DC;
	background-color: #03A1DC;



}
.teste{
margin-top: 1px;


}
.table-hover{

background-color:;

}



.btn.btn-volume{
    	-webkit-box-shadow: inset 0 0 2px rgba(0,0,0,.5), inset 0 0px 0 rgba(255,255,255,.5), inset 0 -1px 0 rgba(0,0,0,.5), 0 1px 3px rgba(0,0,0,.4);
	-moz-box-shadow: inset 0 0 2px rgba(0,0,0,.5), inset 0 2px 0 rgba(255,255,255,.5), inset 0 -1px 0 rgba(0,0,0,.5), 0 1px 3px rgba(0,0,0,.4);
	box-shadow: inset 0 0 2px rgba(0,0,0,.5), inset 0 2px 0 rgba(255,255,255,.5), inset 0 -1px 0 rgba(0,0,0,.5), 0 1px 3px rgba(0,0,0,.4);
    text-shadow:none;
}

.btn.btn-volume:hover{
    -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,.5), inset 0 0px 0 rgba(255,255,255,.5), inset 0 -1px 0 rgba(0,0,0,.5), 0 1px 6px rgba(0,0,0,.8);
	-moz-box-shadow: inset 0 0 2px rgba(0,0,0,.5), inset 0 2px 0 rgba(255,255,255,.5), inset 0 -1px 0 rgba(0,0,0,.5), 0 1px 6px rgba(0,0,0,.8);
	box-shadow: inset 0 0 2px rgba(0,0,0,.5), inset 0 2px 0 rgba(255,255,255,.5), inset 0 -1px 0 rgba(0,0,0,.5), 0 1px 6px rgba(0,0,0,.8);
}

hr {
      color: #03A1DC;
      background-color: #03A1DC;
      height: 2px;
    }
.tt{text-transform: uppercase;} .lk{margin-top: 60px;}
.cabecalho{
text-align: center;
font-size: 15px;
font-weight: ;

}
</style>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="height: 10px;">
	  <div class="container-fluid">


			<div class="navbar-header">


			      <h1 class="teste" href="consulta.php"><small style="font-family:serif;color: white; text-shadow: black 0.1em 0.1em 0.2em">Global Eletronics                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></small></h1>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



	 <form class="navbar-form navbar-right">
        <button type="submit" class="btn btn-global"><b style="font-family:serif;color: white; text-shadow: black 0.1em 0.1em 0.2em">INDÚSTRIA, IMPORTAÇÃO E EXPORTAÇÃO LTDA.</b>
				</button>
      </form>


      <div class="navbar-left"><a href="#menu-toggle" id="menu-toggle"><button class="btn btn-global" style="font-family:serif;color: white; text-shadow: black 0.1em 0.1em 0.2em;margin-top: 8px; margin-left: 50px;">MENU</button></a></div>

</div>

</div>
	</nav>
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav lk">
                <li class="sidebar-brand">
                    <a href="#" style="color:white;">
                       Global Eletronics <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                    </a>
                </li>
                <li>
                    <a style="color:white;" href="cf.php">Controle CF <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> </a>
                </li>
                <li>
                    <a style="color:white;" href="smt.php">Montagem SMT <span class="glyphicon glyphicon-object-align-left" aria-hidden="true"></span> </a>
                </li>

                <li>
                    <a style="color:white;" href="imprimeDados.php">New Global </a>
                </li>

                <li>
                    <a style="color:white;" href="#">Procedimentos </a>
                </li>
                <li>
                    <a style="color:white;" href="biblioteca.php">Biblioteca Global <span class="glyphicon glyphicon-book" aria-hidden="true"></span></a>
                </li>
                <li>
                    <a style="color:white;" src="http://www.globaleletronics.ind.br">Site </a>
                </li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->


 <div id="page-content-wrapper">
<div class="container containertop">

<div class="row">
		<div class="col-xs-1"></div>
	<div class="col-xs-8">
		<h2 style="font-family:serif;">Consulta Módulos e Componentes <span class="glyphicon glyphicon-search" aria-hidden="true"></span>              <small>Global Eletronics   <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></small></h2>


	</div>
	<div class="col-xs-3">
	<h5 style="margin-top: 32px;"><b>Bem vindo</b> <i class="tt"><?php  echo $_SESSION['login'];?>   <span class=" glyphicon glyphicon-user" aria-hidden="true"></span></i></h5>


	</div>

</div>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="consulta" class="form-inline">
<div class="row">

					<div class="col-xs-1"></div>
					<div class="col-xs-10 text-center">


				<br><br>
  <button type="submit" class="btsize btn btn-lg btn-global" name="buscar" id="buscar">Buscar  <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
<a class="btn btn-lg btn-global btsize escondercadastrar" href="cadastro.php" target="" role="button">Cadastrar <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span></a>

<button type="submit" class="btsize btn btn-lg btn-global" name="linha" id="linha">linha <span class="glyphicon glyphicon-cog" aria-hidden="true"></span></button>
<a class="btn btn-lg btn-global btsize esconderatualizar" href="upload.php" target="" role="button">Atualizar <span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> </a>
<button type="submit" class="btsize btn btn-lg btn-global esconderrevisao" name="revisao" id="revisao">Revisão <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


<button  class="btn btn-lg btn-global btsize"  name="sair">Sair <span class="glyphicon glyphicon-off" aria-hidden="true"></span></button>
<br>


      </div>

			<div class="col-xs-1 text-center">




</div>
</div><br>
<div class="row">
	<div class="col-xs-1"><img  src="globallogo.png" alt="" class="img-responsive" width="100px" height="100px"></div>

	<div class="col-xs-10 text-center">

			<table class="table table-hovertable-bordered">
  <tr>
<td class="table-hover"><label for="modulo"  style="">Módulo:</label></td>
<td><input type="text" class="form-control" id="classsize campobusca" name="campobusca" placeholder="Módulo"></td>
<td><label for="codigo" style="">Código:</label></td>
<td><input type="text" class="form-control" name="campocodigo" id="classsize campocodigo" placeholder="Código"></td>
</tr>
<tr>
<td><label for="etapa" style="">Etapa:</label></td>
<td>
  <select id="selectsize"  class="form-control" name="campoetapa">
  <option>1ª Etapa</option>
  <option>2ª Etapa</option>
  <option>3ª Etapa</option>
  <option>Pré-Formatação</option>
  <option>Complementação</option>
	<option>Teste</option>
	<option value=""  selected>Buscar todos</option>
</select></td>

<td><label for="etapa" style="">Posição:</label></td>
<td><input type="text" class="form-control" name="campoposicao" id="campoposicao" placeholder="Posição"></td>
</table>



	</div>

	<div class="col-xs-1 text-center"><img width="100px" height="100px" src="isoi.png" alt="" class="text-center img-responsive"></div>


</div>



</form>
<br>
<br>



	<?php


	if(isset($_POST['linha'])) {


?>
<form method="post" action="linha.php" name="linhamontagem">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span>
							<small>         Linha de montagem</small></h4>
					</div>
					<div class="modal-body">

						<label>Módulo:</label>
						<br>
						<input type="text" name="linhamodulo" class="form-control">
						<br>
            <select id ="selectsize" class="form-control" name="linhaetapa">
              <option >1ª Etapa</option>
              <option >2ª Etapa</option>
              <option>3ª Etapa</option>
              <option>Pré-Formatação</option>
              <option>Complementação</option>
            	<option>Teste</option>
            </select>
					</div>


					<div class="modal-footer">
						<a href="consulta.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
						<input type="submit" class="btn btn-global" name="atualizarrevisao" value="Confirmar"></input>
					</div>
				</div>
			</div>
		</div>

	</form>
		<script>
			$(document).ready(function () {
				$('#myModal').modal('show');
			});
			</script>


<?php
}


if(isset($_POST['revisao'])) {

?>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span>
							<small>         Atualizar Revisão</small></h4>
					</div>
					<div class="modal-body" style="width: 200px;">

						<form method="post" action="salvarrevisao.php" name="atrevisao" class="form-inline">
						<label style="font-family:;">Módulo:</label>
							<select class='form-control' name="rmodulo" id="rmodulo">
								<option>Selecione..</option>
								<?php
								mysqli_select_db($conn,"global");
								$selecao = mysqli_query($conn,"SELECT DISTINCT modulo FROM formatacao ORDER BY modulo;") or die("erro");
									foreach ($selecao as $key => $value) {

											echo "<option><b>".$value['modulo']."</b></option>";
									}
									?>
								</select>

						<label>Revisão:</label>
						<br>
						<input type="text" name="rrevisao" id="rrevisao" class="form-control">

            <br>
            <label>Etapa:</label>
            <br>
            <select id ="selectsize" class="form-control" name="retapa" id="retapa">
              <option>1ª Etapa</option>
              <option>2ª Etapa</option>
              <option>3ª Etapa</option>
              <option>Pré-Formatação</option>
              <option>Complementação</option>
            	<option>Teste</option>
            </select>


					</div>


					<div class="modal-footer">
					<a href="consulta.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
					<input type="submit" class="btn btn-global" name="atualizarrevisao" value="Atualizar"></input>
						</form>
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

if (isset($_POST['buscar']))  {

$campobusca = $_POST['campobusca'];
$campocodigo = $_POST['campocodigo'];
$campoetapa = $_POST['campoetapa'];
$campoposicao = $_POST['campoposicao'];


$formatacao = mysqli_select_db($conn ,"global") or die ("Problemas na conexão2");
$sql = mysqli_query($conn,"SELECT * FROM formatacao WHERE modulo LIKE '%$campobusca%' AND codigo LIKE '%$campocodigo%'
  AND etapa LIKE '%$campoetapa%' AND posicao LIKE '%$campoposicao%' ORDER BY id_etapa,slide ASC;");

  if (mysqli_num_rows($sql) == 0 || $campobusca == "" && $campocodigo == "") {
    ?>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
							</div>
							<div class="modal-body">
								<h5>Nenhum registro encontrado!</h5>
							</div>
							<div class="modal-footer">
								<a href="consulta.php"><button type="button" class="btn btn-global">Continuar</button></a>
							</div>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function () {
						$('#myModal').modal('show');
					});
						//break;

				</script>
	     <?php
			exit;
		}
echo "<div class='row'>";
echo "<div class='col-xs-12'>";

echo "<table  class='table  table-hover table-bordered'>";
  	echo "<thead>";
   echo"<th class='cabecalho'>#</th>";
  echo"<th class='cabecalho'>Módulo</th>";
  	echo"<th class='cabecalho'>Código Componente</th>";
  	echo"<th class='cabecalho'>Etapa</th>";
  	echo"<th class='cabecalho'>Posição</th>";
  	echo"<th class='cabecalho'>Quantidade</th>";
  	echo"<th class='cabecalho'>Local</th>";
  	echo"<th class='cabecalho'>Revisão</th>";
  	echo"<th class='cabecalho'>Observação</th>";
  	echo"<th class='cabecalho'>Imagem <span class='glyphicon glyphicon-sunglasses' aria-hidden='true'></span></th>";
  	echo "</thead>";
  	echo "<tbody>";
$i = 1;
while ($formatacao = mysqli_fetch_object($sql)) {




    echo "<tr align='center' style='border:5px;'>";
	echo "<th>".$i."</th>";
	echo "<td class='cabecalho' style='align: center;'><i>" . $formatacao->modulo   .  "</i></td>";
    echo "<td class='cabecalho'><i>" . $formatacao->codigo   .  "</i></td>";
    echo "<td class='cabecalho'><i>" . $formatacao->etapa    .  "</i></td>";
    echo "<td class='cabecalho'><i>" . $formatacao->posicao  .  "</i></td>";
    echo "<td class='cabecalho'><i>" . $formatacao->quantidade. "</i></td>";
    echo "<td class='cabecalho'><i>" . $formatacao->local    .  "</i></td>";
    echo "<td class='cabecalho'><i>" . $formatacao->revisao  .  "</i></td>";
    echo "<td class='cabecalho'><i>" . $formatacao->obs      .  "</i></td>";
    echo"<td><a data-fancybox='gallery' href='fotos/".$formatacao->imagem."'><span class='glyphicon glyphicon-picture' aria-hidden='true'></span></a></td>";
       $i++;
       }
echo "</tbody>";

echo "</table>";
echo "</div>";
echo "</div>";}

?>
<div style="margin-top: 400px;" class="row"><div class="col-xs-12 text-center">
				<p style="font-family: serif;font-size: 15px;">Copyright 2018 © Global Eletronics. Todos os direitos reservados |B&P Developers ®</p>

	</div>

	</div>
</div>
</div>
</div>

<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Bootstrap core JavaScript -->


    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>
</html>
