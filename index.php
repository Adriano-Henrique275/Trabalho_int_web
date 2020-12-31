<?php include("navbar.php")?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<!--
  FIB
  Curso: Ciências da Computação
            TRABALHO
  INTRODUÇÃO AO DESENVOLVIMENTO WEB
            ALUNOS
  NOME: Adriano Henrique RA 49648
  NOME: João Victor Marcelino RA 49899
-->
<head>
  <meta charset="utf-8">
  <title>Minha Pizza já</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="estilo/stily.css">

<div class="jumbotron text-center">
  <h1>Nossa Pizza Já</h1>
  <p>Somos especialistas em pizza</p>
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Se inscreva</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (Sobre a sessão) -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Sobre nossa página</h2>
      <h4>Temos o objetivo de trazer para nosso clientes, uma deliciosa experiência com os nossos saberes!</h4>
      <p>Qualidade em atender vocês</p>
      <button class="btn btn-default btn-lg">Se escreva</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>NOSSOS VALORES</h2>
      <h4><strong>MISSÃO:</strong> Nossa missão é trazer os melhores sabores com um preço que qualquer pessoa possa pagar, e com uma entrega mais rápida!</h4>
      <p><strong>VISÃO:</strong> Nossa visão, sabores com qualidade e agilidade!</p>
    </div>
  </div>
</div>

<?php include("servico.php")?>

<h2>O que nossos clientes dizem</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicadores -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Dados dos slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>"Está pizzaria é a melhor"<br><span style="font-style:normal;">José da Silva, empresário</span></h4>
    </div>
    <div class="item">
      <h4>"Com certeza... ótimas pizzas"<br><span style="font-style:normal;">Lorena Henrique, estudante</span></h4>
    </div>
    <div class="item">
      <h4>"Muito rápida mesmo, nem acreditei!"<br><span style="font-style:normal;">Gustavo Souza, lava-car Brasil</span></h4>
    </div>
  </div>

  <!-- Controles direita e esquerda -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php include("preco.php")?>

<!-- local das imagens, pasta -->
<img src="imagem/pizza_02.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<?php include("footer.php")?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>