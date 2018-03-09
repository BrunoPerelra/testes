<?php include_once("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca Global</title>

<link rel='shortcut icon' href="globallogo.png" />
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-latest.js"></script>
<link href="bootstrap-3.3.7-dist\css\bootstrap.css" rel="stylesheet" media="screen">


<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>

<link href="perso.css?version=12" rel="stylesheet">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/simple-sidebar.css?version=12" rel="stylesheet">



</head>
<body>

<?php 

$idUsuario = $_POST['colaborador'];
$id = $_POST['id'];
$dtRetiradaReserva = $_POST['dtEntrega'];

$banco = mysqli_select_db($conn, "biblioteca");
$query = mysqli_query($conn,"INSERT INTO reservas(id_livro,id_usuario,data_reserva) VALUES ('$id','$idUsuario','$dtRetiradaReserva');");

if($query){
	echo "<script>alert('Inserido com sucesso');</script>";
	header('location:biblioteca.php');	
	}
else
{
	echo "<script>alert('erro');header('location:biblioteca.php');</script>";
	header('location:biblioteca.php');
}

?>




</body>
</html>