<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="bootstrap-3.3.7-dist\css\bootstrap.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<script type="text/javascript" src="planofundo.js"></script>
<link href="css.css" rel="stylesheet">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Global Eletronics</title>
</head>

<style type="text/css">

#teste {

margin-top: 35px;

}

.container {

margin-top:30px;

}
.text-center .img-responsive {
    margin: 0 auto;
}

body {
 background:  #E0ECF8;



}
#fundo-externo {
    overflow: hidden; /* para que não tenha rolagem se a imagem de fundo for maior que a tela */
    width: 100%;
    height: 100%;
    position: relative; /* criamos um contexto para posicionamento */
}

#fundo {
    position: fixed; /* posição fixa para que a possível rolagem da tela não revele espaços em branco */
    width: 100%;
    height: 100%;
}

#fundo img {
    width: 100%; /* com isso imagem ocupará toda a largura da tela. Se colocarmos height: 100% também, a imagem irá distorcer */
    position: absolute;
}

#site {
    position: absolute;
    top: 20px;
    left: 30%;
    width: 1000px;
    height: 550px;
    padding: 20px;
    margin-left: -300px; /* por causa do posicionamento absoluto temos que usar margem negativa para centralizar o site */
    background: #FFF; /* fundo branco para navegadores que não suportam rgba */
    background: rgba(255,255,255,0.8); /* fundo branco com um pouco de transparência */


}
.timagem {

height: 150px;
width: 500px;


}
</style>


<body>


<div class="container text-center">
      <div class="row">
<div class="col-lg-2"><img src="globallogo.png" alt="" class="img-responsive"></div>
          <div class="col-lg-8">


<h1>Global Eletronics <small>Gerenciador de Módulos  <span class=" glyphicon glyphicon-globe" aria-hidden="true"></span></small></h1>

<br><br><br><br>

<table class="table">
<tr>
<td><a class="btsize btn btn-lg btn-info " href="cadastro.php" target="" role="button">Cadastro</a></></td>
<td><a class="btsize btn btn-lg btn-info" href="consulta.php" target="" role="button">Pesquisa</a></></td>
</tr>
</table>

</div>
      <div class="col-lg-2"><img src="globallogo.png" alt="" class="img-responsive"></div>
      </div>
           <div class="row">
            <br><br><br><br>
           <div class="col-lg-6">
            <img src="preferencial.png" alt="" class="timagem img-responsive">


           </div>
           <div class="col-lg-6">
            <img src="mono.png" alt="" class="timagem img-responsive">


           </div>

            </div>

</div>

</body>
</html>
