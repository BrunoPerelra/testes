<?php

include_once("conexao.php");

mysqli_select_db($conn,"global");

$sql = mysqli_query($conn,"SELECT * FROM formatacao WHERE modulo LIKE '%rc%' ORDER BY slide ASC; ");
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
	
.teste{

	margin-left: 50px;
}

</style>

<body>




<?php
$teste = 3;
foreach ($sql as $key => $value) {
		echo "<div class='container'>";
				echo "<div class='row'>";
						echo "<div class='col-lg-8'>";
		echo "<table class='table table-hover'>";
		
		echo "<tr>";
		echo "<td>";
		echo "<label>teste</label>";
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>";
		
		echo $value['id'];
		echo "</td>";
		
		echo "<td>";
		echo $key;
		echo "</td>";
		echo "<td>";
		echo $value['modulo'];
		echo "</td>";
		echo "<td>";
		echo $value['slide'];
		echo "</td>";
		
		echo "</tr>";
						echo "</div>";			
				echo "</div>";
		echo "</div>";				
		mysqli_query($conn,"UPDATE formatacao SET slide = '".$teste."' WHERE id = '".$value['id']."';");
		$teste++;
		$key++;
		}


?>

</body>
</html>