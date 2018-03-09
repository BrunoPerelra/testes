<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}

include_once("conexao.php");
$id = $_POST['id'];
$deletarimagem = $_POST['nao_imagem'];


fclose();
unlink("fotos/".$deletarimagem."");
mysqli_select_db($conn,"global");
mysqli_query($conn,"DELETE FROM `formatacao` WHERE id = '".$id."';") or die ("NAO CONSEGUIU EXCLUIR");

header('location:upload.php')
?>
