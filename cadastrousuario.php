<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="bootstrap-3.3.7-dist\css\bootstrap.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<link href="perso.css?version=12" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Global Eletronics</title>
<link rel='shortcut icon' href="globallogo.png" />
	</head>

<style type="text/css">
body {background:  #E0ECF8 ;}
</style>
	<body>
    <?php
    $login = $_POST['login'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
		$confirmarsenha = md5($_POST['confirmarsenha']);
    $db = mysqli_select_db($conn,'global');
    $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
    $select = mysqli_query($conn,$query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['login'];
		if ($senha != $confirmarsenha) {
			?>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
								</div>
								<div class="modal-body">
									<h5>As senhnas não conferem!</h5>
								</div>
								<div class="modal-footer">
									<a href="index.php"><button type="button" class="btn btn-info">Continuar</button></a>
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






      if($login == "" || $login == null){
        ?>
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
                   </div>
                   <div class="modal-body">
                     <h4>O campo login deve ser preenchido !</h4>
                   </div>
                   <div class="modal-footer">
                     <a href="login.php"><button type="button" class="btn btn-info">Continuar</button></a>
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
        }else{
          if($logarray == $login){
							?>
             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
                       </div>
                       <div class="modal-body">
                         <h5>Esse login já existe!</h5>
                       </div>
                       <div class="modal-footer">
                         <a href="index.php"><button type="button" class="btn btn-info">Continuar</button></a>
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
                 die();

          }else{
            $query = "INSERT INTO usuarios (login,email,senha) VALUES ('$login','$email','$senha')";
            $insert = mysqli_query($conn,$query);

            if($insert){
              ?>
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <h4 class="modal-title" id="myModalLabel">Global Eletronics   <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></h4>
                         </div>
                         <div class="modal-body">
                           <h5>Cadastro efetuado com sucesso!</h5>
                         </div>
                         <div class="modal-footer">
                           <a href="index.php"><button type="button" class="btn btn-info">Continuar</button></a>
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
                 }else{
              echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
            }
          }
        }
    ?>
</body>
</html>
