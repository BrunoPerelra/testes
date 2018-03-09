<?php
include_once("conexao.php");

?>
<html>
<head>
	<title>Global Eletronics</title>
	<link rel='shortcut icon' href="globallogo.png" />
	<script src="jquery/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>

<script src="jquery/jquery-latest.js"></script>
	<link href="bootstrap4\css\bootstrap.css" rel="stylesheet" media="screen">
	<link href="bootstrap4\css\glyphicons.css" rel="stylesheet" media="screen">
	<script src="bootstrap4\js\bootstrap.min.js"></script>
	<script src="js.js?v=12"></script>

	<link rel="stylesheet" href="bootstrap-select/css/bootstrap-select.min.css">
<script src="bootstrap-select/js/bootstrap-select.min.js"></script>
</head>
<body>
<div class="container">
			<div class="row">
						<div class="col-12">

										<?php
											mysqli_select_db($conn,"test");
											$select = mysqli_query(
												$conn,
												"SELECT * FROM testes;
												;");
													echo "<form action='#' method='POST'>";
													?>
													<table>
													<th>id</th>
													<th>dados</th>
													<?php

													foreach ($select as $key => $value) {

														echo "<tr>";
														echo "<td><input type='hidden'
														name='arrayID[]' value='".$value['id']."'></td>";
														echo "<td><input type='text' name='arrayNome[]'
															value='".$value['dados']."'></td>";

														echo "</tr>";

													}

															echo "</form>";
														?>

													</table>
													<button type='submit' name='salvar'>
													salvar
													</button>
														<?php





													?>




						</div>
			</div>
	<?php
if(isset($_POST['salvar'])){

$teste = array_filter($_POST['array']);
mysqli_select_db($conn,"test");

$arrayNome = $_POST['arrayNome'];
$arrayID = $_POST['arrayID'];

for($i = 0; $i < count($arrayID); $i++) {
    echo "| $arrayID[$i] | $arrayNome[$i] |<br>";


$query = mysqli_query($conn,"UPDATE testes SET
dados = '".$arrayNome[$i]."' WHERE id ='".$arrayID[$i]."';");
}






if($query){
	?>
	<script>alert("inserdo");</script>
	<?php


}



	}

	?>
</div>



</body>
</html>
