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




include_once("conexao.php");

mysqli_select_db($conn,"global");

$sql = mysqli_query($conn,"SELECT DISTINCT modulo , etapa FROM formatacao; ");
?>

<!DOCTYPE html>
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


<link rel="stylesheet" href="jquery/jquery.fancybox.min.css" />
<script src="jquery/jquery.fancybox.min.js"></script>
<!--<script src="fancybox-master\dist\jquery.fancybox.js"></script>
<script src="fancybox-master\dist\jquery.fancybox.css"></script>-->


</head>
<style type="text/css">
	
.container{
margin: 0 auto ;


}


.navbar{
border-color:#03A1DC;
background-color: #03A1DC;
height: 25px;

}	

.teste{
	margin-top: 3px;

}

</style>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">


			<div class="navbar-header">
				

			      <h1 class="teste"  href="consulta.php"><small style="font-family:serif;color: white; text-shadow: black 0.1em 0.1em 0.2em">Global Eletronics                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></small></h1>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



	 <form class="navbar-form navbar-right">
        <button type="submit" class="btn btn-global"><b style="font-family:serif;color: white; text-shadow: black 0.1em 0.1em 0.2em">INDÚSTRIA, IMPORTAÇÃO E EXPORTAÇÃO LTDA.</b>
				</button>
      </form>

</div>
</div>
	</nav>
<div class='container text-center'>
			<div class='row'>
						<div class="col-xs-5">
							

						</div>
					<div class='col-xs-2 text-center'>
							<table style="margin-top: 70px;" class='table table-hover table-bordered'>
							
<?php




foreach ($sql as $key => $value) {
		

		echo "<tr>";
		
	echo "<td>";
		echo "<h5 style='font-size:16px;font-family:arial;'><b>".$value['modulo']."</b></h5>";
	echo "</td>";
		echo "<td>";
		echo "<h5 style='font-size:16px;font-family:Arial;'><b>".$value['etapa']."</b></h5>";
	echo "</td>";
	
		echo "</tr>";
						
		}


?>
	
</tr>
						</table>
			</div>
	<div class="col-xs-5"><a href="cadastro.php"><input type="submit" name="voltar" class="btn btn-lg btn-global" value="Voltar" style="margin-top: 70px;"></input></a></div>
	</div>
</div>
</body>
</html>