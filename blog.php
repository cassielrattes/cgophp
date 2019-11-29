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
  new Portfolio('https://www.google.com/gmail/about/static/images/logo-gmail.png?cache=3218fbf','anota isso aqui perez'),
  new Portfolio('https://www.google.com/gmail/about/static/images/logo-gmail.png?cache=3218fbf','anota isso aqui perez'),
  new Portfolio('https://www.google.com/gmail/about/static/images/logo-gmail.png?cache=3218fbf','anota isso aqui perez'),
  new Portfolio('https://www.google.com/gmail/about/static/images/logo-gmail.png?cache=3218fbf','anota isso aqui perez'),
);
?>


<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <a class="navbar-brand" href="#"><img src="https://i.ibb.co/kBrnH99/Logo-TCC.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link h3" href="/cgophp/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h3" href="/cgophp/blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h3" href="/cgophp/blog.php">Login</a>
      </li>
    </ul>
  </div>
</nav>

<div class="row mx-auto">
  <?php foreach ($portfolios as $cartao){ ?>
  <div class="card col-sm-12 col-md-4 mx-4 mb-4">
    <img class="card-img-top" src="<?=$cartao->imagem?>">
    <div class="card-body">
      <h3 class="card-title"><?=$cartao->descricao?></h3>
    </div>
  </div>
  <?php } ?>
</div>


<?php include_once('./headFooter/footer.php') ?>