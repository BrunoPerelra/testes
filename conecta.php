<?php
  $conexao = mysql_connect("localhost", "root", "bruno");
   
  if($conexao)
  {
  $baseSelecionada = mysql_select_db("global" , "formatacao");
  if (!$baseSelecionada) {
      die ('Não foi possível conectar a base de dados: ' . mysql_error());
  } } else {
      die('Não conectado : ' . mysql_error());
  }
  ?>