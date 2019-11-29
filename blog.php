<style>
.my-nav{
position: absolute;
z-index: 10;
width: 100%;
}

/* body {    
  background: url(https://i.ibb.co/r3kZnk6/asd.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
} */
</style>

<?php include_once('./headFooter/head.php') ?>

<?php 
class Portfolio{
  public $imagem, $descricao;
  function __construct($imagem, $descricao)
  {
    $this->imagem = $imagem;
    $this->descricao = $descricao;
  }
}

$portfolios = array(
  new Portfolio('https://www.google.com/gmail/about/static/images/logo-gmail.png?cache=3218fbf','1'),
  new Portfolio('https://www.google.com/gmail/about/static/images/logo-gmail.png?cache=3218fbf','2'),
  new Portfolio('https://www.google.com/gmail/about/static/images/logo-gmail.png?cache=3218fbf','3'),
  new Portfolio('https://www.google.com/gmail/about/static/images/logo-gmail.png?cache=3218fbf','4'),
);
?>



<nav class=" my-nav navbar navbar-light navbar-expand-lg">
      <div class="container">
      <a class="navbar-brand" href="portfolio.php"><img src="https://i.ibb.co/WpDF2qy/Logo-TCC.png" height="100px" width="100px" alt="Logo da Empresa."></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link h4" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link h4" href="#">Aplicativo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link h4" href="#">Sobre o Projeto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link h4" href="#">Suporte</a>
          </li>
        </ul>
      </div>
  </div>
    </nav>





</div>

<?php include_once('./headFooter/footer.php') ?>