<?php
$con = mysql_connect('localhost','root','bruno')or die(mysql_error());
($con) ? mysql_select_db('global',$con)or die(mysql_error());
 
if($_SERVER['REQUEST_METHOD']=='GET'){
    isset($_GET['id']) ? $busca=mysql_query("SELECT * FROM dados WHERE id='".$_GET['id']."'") : die(mysql_error());

    $dados = mysql_fetch_array($busca);

}elseif($_SERVER['REQUEST_METHOD']=='POST'){

$nome  = isset($_POST['nome']) ? $_POST['nome'] : '';
$idade = isset($_POST['idade']) ? $_POST['idade'] : false;
$sexo  = isset($_POST['sexo']) ? $_POST['sexo'] : '';

$atualizar = mysql_query("UPDATE dados SET nome='$nome',idade='$idade',sexo='$sexo' WHERE id='$id'")or die(mysql_error());

($atualizar) ? print 'Dados alterados com sucesso' : die('Falha ao alterar dados');
}
?>
<form name="teste2" id="teste2" action="" method="POST">
<input type="hidden" name="idreg" id="idreg" value="<?php echo $dados['id']; ?>">
Nome: <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" />
<br />
Idade: <input type="text" name="idade" value="<?php echo $dados['idade']; ?>" />(Max: 3 caracteres)
<br />
Sexo: Masculino: <input type="radio" name="sexo" id="sexo" value="M" /> Feminino: <input type="radio" name="sexo" id="sexo" value="F" />
<br />
<input type="submit" name="ok" value="cadastrar" />
</form>