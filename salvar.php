<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Global Eletronics</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
<div class="container theme-showcase" role="main">

<?php
// Conexão com o banco de dados
//$conn = @mysql_connect("localhost", "root", "bruno") or die ("Problemas na conexão.");
//$db = @mysql_select_db("global", $conn) or die ("Problemas na conexão");

// Se o usuário clicou no botão cadastrar efetua as ações
//if (isset($_POST['cadastrar'])) {
$conn = mysqli_connect("localhost", "root", "bruno") or die ("Problemas na conexão.");
$db = mysqli_select_db($conn,"global") or die ("Problemas na conexão");

// Recupera os dados dos campos
$modulo = $_POST['modulo'];
$codigo = $_POST['codigo'];
$etapa = $_POST['etapa'];
$posicao = $_POST['posicao'];
$quantidade = $_POST['quantidade'];
$local = $_POST['local'];
$revisao = $_POST['revisao'];
$imagem = $_FILES["imagem"];
$nome_imagem = null ;

if($revisao == "" || $revisao == null || $local == "" || $local == null || $quantidade == "" || $quantidade == null || $posicao == "" || $posicao == null || $modulo == "" || $modulo == null || $codigo == "" || $codigo == null || $etapa == "" || $etapa == null ) { ?>  

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Erro ao cadastrar o usuário!</h4>
            </div>
            <div class="modal-body">                
              PREENCHA todos os campos            </div>
            <div class="modal-footer">
              <a href="cadastro.php"><button type="button" class="btn btn-danger">Ok</button></a>
            </div>
          </div>
        </div>
      </div>      

<script type="javascript">
 
 $(document).ready(function () {
          $('#myModal').modal('show');
        });

</script>

<?php } 
// Se a foto estiver sido selecionada
elseif (empty($imagem["name"])) { ?>
<div class="modal fade" i
d="fdp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Erro ao cadastrar o usuário!</h4>
            </div>
            <div class="modal-body">                
              teste pqpq vai
            </div>
            <div class="modal-footer">
              <a href="cadastro.php"><button type="button" class="btn btn-danger">Ok</button></a>
            </div>
          </div>
        </div>
      </div>      

<script>
  
  $(document).ready(function() {
$('fdp').modal('show');
});

//window.location.href='cadastro.php';
</script>
<?php }else {
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
String $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

// Caminho de onde ficará a imagem
$caminho_imagem = "fotos/" . $nome_imagem;

// Faz o upload da imagem para seu respectivo caminho
move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

$teste = "INSERT INTO formatacao( `modulo`, `codigo`, `etapa`, `posicao`, `quantidade`,`local`,`revisao`,`imagem` ) VALUES (
'".$modulo."',
'".$codigo."',
'".$etapa."',
'".$posicao."',
'".$quantidade."',
'".$local."',
'".$revisao."',
'".$nome_imagem."'
);";

} 
}
 ?>

<?php 

$checkn = "SELECT * FROM formatacao WHERE modulo = '".$modulo."' AND codigo = '".$codigo."';";
$sqlcheckn = mysqli_query($conn,$checkn);
$rowsn = mysqli_num_rows($sqlcheckn);

if ($rowsn == 0) {
$sql = mysqli_query($conn,$teste);
}
else
{
echo "<script language='javascript' type='text/javascript'>alert('JÁ EXISTEM REGISTROS!');window.location.href='cadastro.php'</script>"; // redireciona pra página de erro
}




// Se os dados forem inseridos com sucesso
if ($sql){
echo "<script language='javascript' type='text/javascript'>alert('Dados inseridos com sucesso!!');window.location.href='cadastro.php'</script>";
}



?>
</div>
</body>
</html>