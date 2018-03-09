<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Global Eletronics</title>
<link rel='shortcut icon' href="globallogo.png" />
<link href="bootstrap-3.3.7-dist\css\bootstrap.css" rel="stylesheet" media="screen">
<script src="jquery/jquery-latest.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>

<link href="perso.css" rel="stylesheet">
<link rel="stylesheet" href="csstablet.css" media="screen and (max-width: 1259px)" />
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="jquery/jquery.fancybox.min.css" />
<script src="jquery/jquery.fancybox.min.js"></script>
    </head>
<style type="text/css">
body {background:#2E2E2E  ;}
.text-center .img-responsive {
    margin: 0 atuo;
}

.container{

margin: 0 auto;

}
.btnmargin{margin-top: 20px;}
</style>


		<body>
		

		<div class="container">
				<div class="row">
				
				<div class="col-xs-1">
					
					<a href="consulta.php" class="btn btn-small btn-primary btnmargin" name="voltar">Voltar</a>
				</div>	
				<div class="col-xs-11 text-center">
			<?php			

$linhamodulo = $_POST['linhamodulo'];
$linhaetapa = $_POST['linhaetapa'];

$formatacao = mysqli_select_db($conn ,"global") or die ("Problemas na conexão2");
$sql = mysqli_query($conn,"SELECT * FROM formatacao WHERE modulo LIKE '%$linhamodulo%' 
  AND etapa LIKE '%$linhaetapa%'  ORDER BY slide ASC;");

while ($formatacao = mysqli_fetch_object($sql)) {


echo "<br>";
echo"<a data-fancybox='gallery' href='fotos/".$formatacao->imagem."'><img src='fotos/".$formatacao->imagem."' alt='Foto de exibição' width='700px' height='450px'></a>";
echo "<br>";
}

?>



			</div>
			
	</div>

</div>
		<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    </body>
</html>
