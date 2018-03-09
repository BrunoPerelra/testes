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
h4{

font-size: 15px;

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
<div class='container'>
			<div class='row'>
						
						<div class="col-xs-8">
						<table class="table table-hover table-bordered" style="margin-top: 70px;">
							

						<tr><td><a href="instrucoes/IN 021 - INSTRUÇÃO DE INSPEÇÃO.pdf"><h4 style="color: black;">IN 21- INSTRUÇÃO DE INSPEÇÃO</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 022 - INSTRUÇÃO DE PRE-FORMATAÇÃO E GRAVAÇÃO DE CHIP.pdf"><h4 style="color: black;">IN 022 - INSTRUÇÃO DE PRE-FORMATAÇÃO E GRAVAÇÃO DE CHIP</h4></a></td></tr>
						<tr><td><a href="instrucoes/IN 024 - INSTRUÇÃO DE MONTAGEM NA BLACKEL.pdf"><h4 style="color: black;">IN 024 - INSTRUÇÃO DE MONTAGEM NA BLACKEL</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 025 - INSTRUÇÃO DE MONTAGEM MANUAL.pdf"><h4 style="color: black;">IN 025 - INSTRUÇÃO DE MONTAGEM MANUAL</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 026 - INSTRUÇÃO DE OPERAÇÃO DA MAQUINA DE SOLDA.pdf"><h4 style="color: black;">IN 026 - INSTRUÇÃO DE OPERAÇÃO DA MAQUINA DE SOLDA</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 027 - INSTRUÇÃO DE COMPLEMENTAÇÃO.pdf"><h4 style="color: black;">IN 027 - INSTRUÇÃO DE COMPLEMENTAÇÃO</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 028 - INSTRUÇÃO DE MONTAGEM SMT.pdf"><h4 style="color: black;">IN 028 - INSTRUÇÃO DE MONTAGEM SMT</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 029 - INSTRUÇÃO DE MANUTENÇÃO PREVENTIVA E CORRETIVA DA LINH.pdf	"><h4 style="color: black;">IN 029 - INSTRUÇÃO DE MANUTENÇÃO PREVENTIVA E CORRETIVA DA LINHA</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 030 - INSTRUÇÃO DE INTEGRAÇÃO.pdf"><h4 style="color: black;">IN 030 - INSTRUÇÃO DE INTEGRAÇÃO</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 031 - INSTRUÇÃO DE UTILIZAÇÃO DO TESTADOR DE PULSEIRAS, CALC.pdf"><h4 style="color: black;">IN 031 - INSTRUÇÃO DE UTILIZAÇÃO DO TESTADOR DE PULSEIRAS, CALC</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 032 - INSTRUÇÃO PARA LIGAR E DESLIGAR O COMPRESSOR DE AR.pdf"><h4 style="color: black;">IN 032 - INSTRUÇÃO PARA LIGAR E DESLIGAR O COMPRESSOR DE AR</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 033 - INSTRUÇÃO DE OPERAÇÃO DOS AR CONDICIONADOS.pdf"><h4 style="color: black;">IN 033 - INSTRUÇÃO DE OPERAÇÃO DOS AR CONDICIONADOS</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 034 - INSTRUÇÃO DE CADASTRO E ALTERAÇÃO DE ITENS E ENGENHARI.pdf	"><h4 style="color: black;">IN 034 - INSTRUÇÃO DE CADASTRO E ALTERAÇÃO DE ITENS E ENGENHARIA</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 036 - INSTRUÇÃO DE MANUTENÇÃO INDUSTRIAL.pdf"><h4 style="color: black;">IN 036 - INSTRUÇÃO DE MANUTENÇÃO INDUSTRIAL</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 037 - INSTRUÇÃO DE MATERIAIS EM QUARENTENA.pdf"><h4 style="color: black;">IN 037 - INSTRUÇÃO DE MATERIAIS EM QUARENTENA</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 043 - INSTRUÇÃO OPERACIONAL DO PROCESSO.pdf"><h4 style="color: black;">IN 043 - INSTRUÇÃO OPERACIONAL DO PROCESSO</h4> </a></td></tr>
						<tr><td><a href="instrucoes/IN 044 - INSTRUÇÃO DE CALCULO DE MINIMO E MAXIMO.pdf"><h4 style="color: black;">IN 044 - INSTRUÇÃO DE CALCULO DE MINIMO E MAXIMO</h4> </a></td></tr>

						
						</table>
					
						</div>
					
	<div class="col-xs-4 text-right"><a href="consulta.php"><input type="submit" name="voltar" class="btn btn-lg btn-global" value="Voltar" style="margin-top: 70px;"></input></a></div>
	</div>
</div>
</body>
</html>