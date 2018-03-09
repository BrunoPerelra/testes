<?php

	include_once("conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Global Eletronics   <span class=" glyphicon glyphicon-floppy-saved" aria-hidden="true"></span></title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="bootstrap-3.3.7-dist\css\bootstrap.css" rel="stylesheet" media="screen">
	</head>

<style type="text/css">

body {background:  #E0ECF8 ;}


</style>

	<body>

<?php
$rmodulo = $_POST['rmodulo'];
$rrevisao = $_POST['rrevisao'];
$retapa = $_POST['retapa'];


//$rmodulo = $_POST['rmodulo'];
//$rrevisao = $_POST['rrevisao'];
//$conn = mysqli_connect("localhost", "root", "bruno") or die ("Problemas na conexão.");
$db = mysqli_select_db($conn ,"global") or die ("Problemas na conexão2");

$teste = mysqli_query($conn ,"SELECT * FROM formatacao WHERE modulo = '".$rmodulo."' AND etapa = '".$retapa."' ;");

if(mysqli_num_rows($teste) == 0){
 ?>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
            </div>
            <div class="modal-body">
              <h5>Modúlo não cadastrado!</h5>
            </div>
            <div class="modal-footer">
              <a href="consulta.php"><button type="button" class="btn btn-info">Continuar</button></a>
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


  } else {
		 mysqli_query($conn,"UPDATE formatacao SET revisao = '".$rrevisao."'  WHERE modulo = '".$rmodulo."' AND ;")or die ("Problema na execução do comando sql");

			?>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		        <div class="modal-dialog" role="document">
		          <div class="modal-content">
		            <div class="modal-header">
		              <h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
		            </div>
		            <div class="modal-body">
		              <h5>Revisão atualizada com sucesso!</h5>
		            </div>
		            <div class="modal-footer">
		              <a href="consulta.php"><button type="button" class="btn btn-info">Continuar</button></a>
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
<?php }





?>
</body>
</html>
