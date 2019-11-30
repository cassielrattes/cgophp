<?php 
class Portfolio{
  public $titulo, $imagem, $descricao;
  function __construct($titulo, $imagem, $descricao)
  {
    $this->titulo = $titulo;
    $this->imagem = $imagem;
    $this->descricao = $descricao;
    // $this->modal = $modal;
  }
}


$portfolios = array(
  new Portfolio
  (
  /* Titulo */'Tipos de navegação no React Native',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  ''
  ),

  new Portfolio
  (
  /* Titulo */'Paginação com React Router Dom32',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  ''
  ),  

  new Portfolio
  (
  /* Titulo */'Serverless: Quando utilizar e aplicações com NodeJS',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  ''
  ),  

  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  ''
  ),
  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  ''
  ),
  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  ''
  ),  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  ''
  ),  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  ''
  ),  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  ''
  ),  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  ''
  ),  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  ''
  ),
);

$principal = $portfolios[0];
array_splice($portfolios, 0,1);
?>

<?php include_once('./headFooter/head.php') ?>

<nav class=" my-nav navbar navbar-light navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="portfolio.php"><img class="rounded-circle img-fluid" src="https://i.ibb.co/f04HKqX/Logo-Cassiel-TCC.png" height="100px"
          width="100px" alt="Logo da Empresa."></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
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

<div class="jumbotron jumbotron-fluid" style="background-color:rgb(88,85,112)">
  <div class="container">
    <h1 class="display-4 text-center text-white">Blog do CGO</h1>
  </div>
</div>


<div class="ml-5 mr-5">
  <div class="row">
    <div class="col-md-8">
      <h1 class="my-4">Ultimas Noticias /
        <small>Edificações</small>
      </h1>
      <div class="row">

        <div class="col-md-12 card mb-4">
          <img class="card-img-top" src="<?=$principal->imagem?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title text-center"><?=$principal->titulo?></h2>
            <p class="card-text text-center"><?=$principal->descricao?></p>
            <div class="text-right" >
                <a href="<?=$principal->imagem?>" class="btn btn-danger" id="btn" style=""><h6>Saiba mais</h6></a>
              </div>
          </div>
        </div>
        <?php foreach($portfolios as $cartao){ ?>
        <div class="col-md-4 card mb-4 ml-0">
          <div class="subcard">
            <img class="card-img-top" src="<?=$cartao->imagem?>" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title"><?=$cartao->titulo?></h3>
              <!-- <p class="card-text text-center"><?=$cartao->descricao?></p> -->
              <div class="text-right" >
                <a href="<?=$cartao->imagem?>" class="btn btn-danger" id="btn" style=""><h6>Saiba mais</h6></a>
              </div>
            </div>
          </div>

        </div>
        <?php } ?>
      </div>
      
    </div>

    <div id="author">
        <div class="card my-4">
          <h5 class="card-header">Buscar</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscando...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>


        <!-- <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->

        <div class="card my-4">
          <h5 class="card-header">Autor</h5>
          <img class="rounded-circle img-fluid mx-auto mt-3" style="height:150px; width:150px"
            src="https://i.ibb.co/ZJCywsk/Image-URL.jpg">
          <div class="card-body">
            <h5 class="text-center">Cassiel R. Cortez</h5>
          </div>
        </div>

 



      </div>
    </div>
</div>


<?php include_once('./headFooter/footer.php') ?>