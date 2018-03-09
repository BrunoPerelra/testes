<?php
session_start();
$nivel_necessario = $_SESSION['nivel'];
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}
if($nivel_necessario  <= 2){
	header('location:cf.php');

}else{


include_once("conexao.php");


$id = $_POST['id'];


$resul = mysqli_query($conn,"DELETE FROM cf WHERE id ='$id'");
header('location:cf.php');
}
?>