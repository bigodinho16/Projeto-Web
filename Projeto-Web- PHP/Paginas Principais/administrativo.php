<?php
include_once("protect.php");
protect();
?>

<!DOCTYPE html>
<html lang ="PT-BR">
<head>

	<title>Pagina Inicial</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>


<body background="img/004.jpg" >


<div class="d-flex flex-column flex-md-row align-items-center p-0 px-md-5 mb-0 bg-white border-bottom shadow-sm" >
<img src="img/002.jpg" width="30" height="30" class="d-inline-block left-top">
  <h5 class="my-1 mr-md-auto font-weight-normal"><b>QUICK APOSTAS</b></h5>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="nav-link" href="loginadm.php">Painel Administrativo</a>
        <a class="nav-link" href="minhasapostas.php">Minhas Apostas</a>
        <a class="nav-link" href="minhaconta.php">Minha Conta </a>
        <a class="nav-link" href="">Comprar Cash</a>
        <a class="nav-link" href="paginasair.php">Sair</a>
      </li>
    </ul>
  </div>
  </nav>

  <?php
  if(!empty($_SESSION['id'])){
  echo "" .$_SESSION['nome']."</br><!---->0,00 BRL<!----> </br>";
}
?>
</div>

  

<ul class="list-group list-group-horizontal">
  <li class="list-group-item"><a href="detalhejogologado.php" class="list-group-item list-group-item-action" ><p class="text-danger" p align="Center">AO VIVO </p><strong>FLAMENGO<!---->  0  VASCO<!-- --> 0</strong></br>SÉRIA A </a></li>
  <li class="list-group-item"><a href="detalhejogologado1.php" class="list-group-item list-group-item-action" ><p class="text-success" p align="Center">ENCERRADO </p><strong>FLUMINENSE<!-- -->  0  BOTAFOGO<!-- --> 0</strong><br>SÉRIA A</a></li>
  <li class="list-group-item"><a href="detalhejogologado2.php" class="list-group-item list-group-item-action" ><p class="text-danger" p align="Center">AO VIVO </p><strong>AVAI<!---->  0  FORTALEZA<!-- --> 0</strong><br>SÉRIA A </a></li>
  <li class="list-group-item"><a href="detalhejogologado3.php" class="list-group-item list-group-item-action" ><p class="text-success" p align="Center">ENCERRADO </p><strong>GREMIO<!-- -->  0  CORINTHIAS<!-- --> 0</strong><br>SÉRIA A</a></li>
  <li class="list-group-item"><a href="" class="list-group-item list-group-item-action" ><p class="text-danger" p align="Center">AO VIVO </p><strong>CHAPECOENSE<!---->  0  VITORIA<!-- --> 0</strong><br>SÉRIA A </a></li>
  <li class="list-group-item"><a href="" class="list-group-item list-group-item-action" ><p class="text-success" p align="Center">ENCERRADO </p><strong>CRUZEIRO<!-- -->  0  GOÍAS<!-- --> 0</strong><br>SÉRIA A</a></li>
  <li class="list-group-item"><a href="" class="list-group-item list-group-item-action" ><p class="text-danger" p align="Center">AO VIVO </p><strong>CORITIBA<!---->  0  SANTOS<!-- --> 0</strong><br>SÉRIA A </a></li>
  <li class="list-group-item"><a href="" class="list-group-item list-group-item-action" ><p class="text-success" p align="Center">ENCERRADO </p><strong>SÃO PAULO<!-- -->  0  CEARÁ<!-- --> 0</strong><br>SÉRIA A</a></li>
  <li class="list-group-item"><a href="" class="list-group-item list-group-item-action" ><p class="text-danger" p align="Center">AO VIVO </p><strong>PALMEIRAS<!---->  0  CUIABÁ<!-- --> 0</strong><br>SÉRIA A </a></li>
  <li class="list-group-item"><a href="" class="list-group-item list-group-item-action" ><p class="text-success" p align="Center">ENCERRADO </p><strong>GUARANI<!-- -->  0  PARANÁ<!-- --> 0</strong><br>SÉRIA A</a></li>
</ul>
    
<div class="text-left">
<div class="wpb_wrapper">
<div class="wpb_widgetised_column wpb_content_element">
<div class="wpb_wrapper q2w3-fixed-widget-container" style="height: 0px;">
<div id="custom_html-14"><div class="textwidget custom-html-widget"><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 300x600 WP Definitivo -->
<ins class="adsbygoogle" style="display: inline-block; width: 300px; height: 600px;" data-ad-client="ca-pub-2221198866742417" data-ad-slot="1449795774"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div></div><div id="custom_html-13" ><div class="textwidget custom-html-widget"><a href="https://www.hostgator.com.br/25122-128-1-714.html"><img style="border:0px" src="https://afiliados.hostgator.com.br/media/banners/br-hospedagem-wordpress-desconto-300x600 2.png" width="300" height="600" alt=""></a></div></div>
</div>
</div>
</div>
</div>





<div class="text-right">
<div class="wpb_wrapper">
<div class="wpb_widgetised_column wpb_content_element">
<div class="wpb_wrapper q2w3-fixed-widget-container" style="height: 0px;">
<div id="custom_html-14"><div class="textwidget custom-html-widget"><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 300x600 WP Definitivo -->
<ins class="adsbygoogle" style="display: inline-block; width: 0px; height: 0px;" data-ad-client="ca-pub-2221198866742417" data-ad-slot="1449795774"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div></div><div id="custom_html-13" ><div class="textwidget custom-html-widget"><a href="https://www.hostgator.com.br/25122-128-1-714.html"><img style="border:0px" src="https://afiliados.hostgator.com.br/media/banners/br-hospedagem-wordpress-desconto-300x600 2.png" width="300" height="600" alt=""></a></div></div>
</div>
</div>
</div>
</div>
    <div class="container">
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <div class="item active" > 
    <div class="text-center">
    <img src="img/slide-06.jpg">
 <div class="carousel-caption d-none d-md-block">
 <a class ="bstn-h2-link" href="https://www.youtube.com/ ">
 <h2>LOREM</h2>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam ex, sunt atque culpa molestias voluptas dignissimos dolor reiciendis? Atque expedita rerum nesciunt iure sapiente exercitationem odio unde mollitia quisquam soluta!</p>

 </div>
  </div> 
  </div>
  



    <div class="item" >
    <div class="text-center">
      <img src="img/slide-05.jpg">
      <div class="carousel-caption d-none d-md-block">
      <a class="bstn-h3-link" href="https://discordapp.com/">
      <h3>LOREM 2</h3> 
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam ex, sunt atque culpa molestias voluptas dignissimos dolor reiciendis? Atque expedita rerum nesciunt iure sapiente exercitationem odio unde mollitia quisquam soluta!</p>
      </div>
    </div>
    </div>



    <div class="item" >
    <div class="text-center">
      <img src="img/slide-07.jpg">
      <div class="carousel-caption d-none d-md-block">
      <a class="bstn-h1-link" href="https://www.anhanguera.com/">
      <h3>LOREM 3</h3> 
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam ex, sunt atque culpa molestias voluptas dignissimos dolor reiciendis? Atque expedita rerum nesciunt iure sapiente exercitationem odio unde mollitia quisquam soluta!</p>
      </div>
    </div>
    </div>




</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>