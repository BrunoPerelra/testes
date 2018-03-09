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
	header('location:consulta.php');



}



	include_once("conexao.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="bootstrap-3.3.7-dist\css\bootstrap.css" rel="stylesheet" media="screen">
<script src="jquery/jquery-latest.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<link href="perso.css?version=12" rel="stylesheet">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Global Eletronics</title>
<link rel='shortcut icon' href="globallogo.png" />
</head>

<style type="text/css">
img{border-radius: 10px;}

#teste {
margin-top: 35px;
}
.containertop{
margin-top:80px;
}
.teste{
margin-top:10px;
}
.container {
margin: 0 auto;
}
.text-center .img-responsive {
    margin: 0 auto;
	}
body {
 background: white  ;
}
.btsize {

height: auto;
width: 120px;
}
.fsize {

width: 170px;
height: 35px;

}
hr {
      color: #03A1DC;
      background-color: #03A1DC;
      height: 5px;
    }

		.navbar{
		border-color:#03A1DC;
		background-color: #03A1DC;
		}

body{background:#e9ebee};

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

            <h1 class="teste" href="consulta.php"><small style="font-family:serif;color: white; text-shadow: black 0.1em 0.1em 0.2em">Global Eletronics                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></small></h1>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



   <form class="navbar-form navbar-right">
        <button target="consulta.php" type="submit" class="btn btn-global"><b style="font-family:serif;color: white; text-shadow: black 0.1em 0.1em 0.2em">INDÚSTRIA, IMPORTAÇÃO E EXPORTAÇÃO LTDA.</b>
        </button>
      </form>

</div>
</div>
  </nav>

<div class="container" style="margin-top:45px">
      <div class="row">
          <div class="col-xs-10">
						<br><br><br>

<h2>Global Eletronics <small>Atualizar informações <span class=" glyphicon glyphicon-floppy-saved" aria-hidden="true"></span></small></h2>
<br><br>
<form class="form-inline" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="atualiza" >
<div class="form-group">
    <label for="modulo"><h3><b>Módulo:</b></h3></label>
    <input type="text" class="form-control" id="campobusca" name="campobusca" placeholder="Módulo">
  </div>
  <div class="form-group">
    <label for="codigo"><h3><b>Código:</b></h3></label>
    <input type="text" class="form-control" name="campocodigo" id="campocodigo" placeholder="Código">

  </div>
	<div class="form-group">
    <label for="codigo"><h3><b>Etapa:</b></h3></label>
    <select class="form-control  selectsize" name="campoetapa" id="campoetapa">
			<option>1ª Etapa</option>
			<option>2ª Etapa</option>
			<option>3ª Etapa</option>
			<option>Pré-Formatação</option>
			<option>Pré-Formatação 2ª Etapa</option>
      <option>Complementação</option>
			<option>Teste</option>
		</select>
  </div>
  <br><br><br>


<input type="submit" name="buscar" value="Buscar" class="btn  btn-global btsize" />
<a href="consulta.php" class="btn  btn-global btsize text-center">Voltar</a>

</form>
                   </div>
              <div class="col-xs-2">
</div>
                  <div class="col-lg-2 text-center" id="teste">
  <img src="globallogo.png" alt="" class="img-responsive">
<br><br><br>
<img src="isoi.png" alt="" class="img-responsive " width="100px" height="100px">
              </div>
             </div>
<?php
if (isset($_POST['buscar'])) {
$campobusca = $_POST['campobusca'];
$campocodigo = $_POST['campocodigo'];
$campoetapa = $_POST['campoetapa'];
$slideteste = null;
$formatacao = mysqli_select_db($conn ,"global") or die ("Problemas na conexão2");
$sql = mysqli_query($conn ,"SELECT * FROM formatacao WHERE
	modulo LIKE '%$campobusca%'
	AND
	codigo LIKE '%$campocodigo%'
	AND
	etapa = '".$campoetapa."' ORDER BY slide ASC;");

if(mysqli_num_rows($sql) == 0 || $campobusca == "" && $campocodigo == ""){
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
              <a href="upload.php"><button type="button" class="btn btn-info">Continuar</button></a>
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




while($formatacao = mysqli_fetch_assoc($sql)){
$resultado = implode (";", $formatacao);
list($id, $modulo, $codigo, $etapa ,$slide, $posicao , $quantidade , $local ,$revisao,$obs,$imagem) = explode(";" , $resultado);

echo"<hr>";
echo "<form action='".$_SERVER['PHP_SELF']."' method='post' enctype='multipart/form-data' name='atualiza' >";
echo "<div class='row'>";
	echo "<div class='col-xs-12'>";

	echo"<table class='table'>";
echo "<td><input type='submit' name='atualizar' id='atualizar' value='Atualizar' class='btn  btn-global btsize'></td>";
	echo "<td><input type='submit' name='slide' id='' value='Voltar' class='btn  btn-global btsize' ></td>";
echo "<td><input type='submit' name='deletar' id='' value='Deletar' class='btn  btn-danger btsize' ></td>";

echo "<h3> Atualizar Módulos e Componentes  <span class='glyphicon glyphicon-globe' aria-hidden='true'></span></h3>";
echo"<br>";
	echo "</tr>";
echo"</table>";
echo "</div>";
echo "</div>";
echo "<br>";
echo "<div class='row'>";
	echo "<div class='col-xs-5'>";
  echo "<table class='table table-hover table-bordered'>";
  echo "<thead>";
  echo "<th>#</th>";
  echo "<th>#</th>";
  echo "</thead>";
  echo "<input type ='hidden' value ='".$id."' class='fsize form-control' name='id' id='id'>";
  echo "<input type ='hidden' value ='".$imagem."' class='form-control' name='nao_imagem' id='nao_imagem'></input>";
	echo "<input type ='hidden' value ='".$slide."' class='form-control' name='testeslide' id='testeslide'></input>";
echo "<tr>";
  echo "<th>Módulo:</th><td><input type ='text' value ='".$modulo."' class='fsize form-control' name='cmatualizar' id='cmatualizar'></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Código componente:</th><td><input type='text' value='" .$codigo. "' class='fsize form-control' id='ccatualizar' name='ccatualizar'></td>";
  echo "</tr>" ;

  echo "<tr>";
  echo "<th>Etapa:</th><td><input type='text' value='" .$etapa. "' class='fsize form-control' name='ceatualizar' id='ceatualizar'></td>";
  echo "</tr>" ;

 echo "<tr>";
  echo "<th>Posição:</th><td><input type='text' value='" .$posicao. "' class='fsize form-control' name='cpatualizar' id='cpatualizar'>";
  echo "</tr>" ;

  echo "<tr>";
  echo "<th>Quantidade:</th><td><input type='text' value='" .$quantidade. "' class='fsize form-control' name='cqatualizar' id='cqatualizar'></td>";
  echo "</tr>" ;

  echo "<tr>";
  echo "<th>Local:</th><td><input type='text' value='" .$local. "' class='fsize form-control' name='clatualizar' id='clatualizar'></td>";
  echo "</tr>" ;
  echo "<tr>";
  echo "<th>Revisão:</th><td><input type='text' value='" .$revisao. "' class='fsize form-control' name='cratualizar' id='cratualizar'></td>";
  echo "</tr>" ;
  echo "<tr>";
  echo "<th>Observações:</th><td><input type='text' value='" .$obs. "' class='fsize form-control' name='coatualizar' id='coatualizar'></td>";
  echo "</tr>" ;
	echo "<tr>";
  echo "<th>Slide:</th><td><input type='text' value='" .$slide. "' class='fsize form-control' name='csatualizar' id='csatualizar'></td>";
  echo "</tr>" ;

	echo "<tr>";
  echo "<th>Imagem:</th>";
  echo "<td><input class='fsize form-control' type='file' name='imagem' id='imagem'></td>";
  echo "</tr>";
echo "</table>";
echo "</div>";

echo "<div class='col-xs-7'>";
echo "<img src='fotos/".$imagem."' alt='Foto de exibição' width='700' height='450' class='mostrarimg'>";
echo "<b>ID única da imagem</b> " ,$imagem;
echo "</div>";
echo "</div>";

  echo "</form>";


}

}

if (isset($_POST['deletar'])) {
$id = $_POST['id'];
$deletarimagem = $_POST['nao_imagem'];

	?>
	<form method="POST" action="deletarbanco.php" name="deeletar">
	 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				 <div class="modal-dialog" role="document">
					 <div class="modal-content">
						 <div class="modal-header">
							 <h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
						 </div>
						 <div class="modal-body">
							 <h5>Você tem certeza disso ?</h5>
							 <?php
							 echo "<input type ='hidden' value ='".$id."' class='fsize form-control' name='id' id='id'>";
						   echo "<input type ='hidden' value ='".$deletarimagem."' class='form-control' name='nao_imagem' id='nao_imagem'></input>";
							 ?>
						 </div>
						 <div class="modal-footer">
							 <a href="upload.php"><button type="button" class="btn btn-info">Cancelar</button></a>

							 <input type="submit" name="confirmado" value="Confirmar"	class="btn btn-danger">
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









if (isset($_POST['atualizar'])) {
// Recupera os dados dos campos
  $id = $_POST['id'];
  $cmatualizar = $_POST['cmatualizar'];
  $ccatualizar = $_POST['ccatualizar'];
  $ceatualizar = $_POST['ceatualizar'];
	$csatualizar = $_POST['csatualizar'];
	$cpatualizar = $_POST['cpatualizar'];
  $cqatualizar = $_POST['cqatualizar'];
  $clatualizar = $_POST['clatualizar'];
  $cratualizar = $_POST['cratualizar'];
  $coatualizar = $_POST['coatualizar'];
  $imagem = $_FILES['imagem'];
$testeslide = $_POST['testeslide'];
//$nome_imagem = null;e
  // Se a foto estiver sido slecionada
  if (!empty($imagem["name"])) {

    // Largura máxima em pixels
    $largura = 2048;
    // Altura máxima em pixels
    $altura = 1920;
    // Tamanho máximo do arquivo em bytes
    $tamanho = 3000000;

    $error = array();

      // Verifica se o arquivo é uma imagem
      if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])){
         $error[1] = "Isso não é uma imagem.";
      }

    // Pega as dimensões da imagem
    $dimensoes = getimagesize($imagem["tmp_name"]);

    // Verifica se a largurawq da imagem é maior que a largura permitida
    if($dimensoes[0] > $largura) {
      $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
    }

    // Verifica se a altura da imagem é maior que a altura permitida
    if($dimensoes[1] > $altura) {
      $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
    }

    // Verifica se o tamanho da imagem é maior que o tamanho permitido
    if($imagem["size"] > $tamanho) {
        $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
    }

    // Se não houver nenhum erro
    if (count($error) == 0) {

      // Pega extensão da imagem
      preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

          // Gera um nome único para a imagem
          $nome_imagem = md5(uniqid(time())) . "." . $ext[1];


          $caminho_imagem = "fotos/" . $nome_imagem;


      move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
			unlink("fotos/".$_POST['nao_imagem']."");
		}
    }
    else {
						$nome_imagem = $_POST['nao_imagem'];
			}


$db = mysqli_select_db($conn ,"global") or die ("Probllemas na conexão2");

$sql = mysqli_query($conn,"UPDATE formatacao SET
modulo = '".$cmatualizar."' ,
codigo ='".$ccatualizar."' ,
etapa = '".$ceatualizar."',
slide = '".$csatualizar."',
posicao = '".$cpatualizar."',
quantidade = '".$cqatualizar."' ,
local ='".$clatualizar."',
revisao = '".$cratualizar."',
obs = '".$coatualizar."' ,
imagem = '".$nome_imagem."'
WHERE id = '".$id."';")or die ("Problema na execução do comando sql");




      // Se os dados forem inseridos com sucesso
      if ($sql){
        ?>
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
                   </div>
                   <div class="modal-body">
                     <h5>Dados atualizados com sucesso!</h5>
                   </div>
                   <div class="modal-footer">
                     <a href="upload.php"><button type="button" class="btn btn-info">Continuar</button></a>
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
        }

  }
?>
</div>
</body>
</html>
