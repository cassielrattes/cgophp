<?php 
class Portfolio{
  public $titulo, $imagem, $descricao, $modal, $modalId;
  function __construct($titulo, $imagem, $descricao, $modal, $modalId)
  {
    $this->titulo = $titulo;
    $this->imagem = $imagem;
    $this->descricao = $descricao;
    $this->modal = $modal;
    $this->modalId = $modalId;

  }
}


$portfolios = array(
  new Portfolio
  (
  /* Titulo */'Tipos de navegação no React Native',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  '1',
  /* Modal */'#modal1',
  /* ModalId */'modal1'
  ),
  new Portfolio
  (
  /* Titulo */'Paginação com React Router Dom',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  '2',
  /* Modal */'#modal2',
  /* ModalId */'modal2'
  ),  

  new Portfolio
  (
  /* Titulo */'Serverless: Quando utilizar e aplicações com NodeJS',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  '3',
  /* Modal */'#modal3',
  /* ModalId */'modal3'
  ),  

  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  '4',
  /* Modal */'#modal4',
  /* ModalId */'modal4'
  ),
  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  '5',
  /* Modal */'#modal5',
  /* ModalId */'modal5'
  ),
  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  '6',
  /* Modal */'#modal6',
  /* ModalId */'modal6'
  ),
  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  '7',
  /* Modal */'#modal7',
  /* ModalId */'modal7'
  ),
  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  '8',
  /* Modal */'#modal8',
  /* ModalId */'modal8'
  ),
  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  '9',
  /* Modal */'#modal9',
  /* ModalId */'modal9'
  ),
  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  '10',
  /* Modal */'#modal10',
  /* ModalId */'modal10'
  ),
);

$principal = $portfolios[0];
array_splice($portfolios, 0,1);
?>

<?php include_once('./headFooter/head.php') ?>

<style>
  body {
    background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, .7))
  }

  .footer {
    background: black;
    color: white;

    .links {
      ul {
        list-style-type: none;
      }

      li a {
        color: white;
        transition: color .2s;

        &:hover {
          text-decoration: none;
          color: #4180CB;
        }
      }
    }

    .about-company {
      i {
        font-size: 25px;
      }

      a {
        color: white;
        transition: color .2s;

        &:hover {
          color: #4180CB
        }
      }
    }

    .location {
      i {
        font-size: 18px;
      }
    }

    .copyright p {
      border-top: 1px solid rgba(255, 255, 255, .1);
    }

</style>

<nav class=" my-nav navbar navbar-light navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img class="rounded-circle img-fluid"
        src="https://i.ibb.co/f04HKqX/Logo-Cassiel-TCC.png" alt="Logo da Empresa."></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link h4" href="index.php">Aplicativo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h4" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h4" href="login.php">Login</a>
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
    <div class="md8">
      <h1 class="my-4">Ultimas Noticias /
        <small>Edificações</small>
      </h1>
      <div class="row">

        <div class="col-md-12 card mb-2">
          <img class="card-img-top subcard" src="<?=$principal->imagem?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title text-center"><?=$principal->titulo?></h2>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?=$principal->modal?>">Saiba mais</button>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="<?=$principal->modalId?>" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel"><?=$principal->titulo?></h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"></span>
                </button>
              </div>
              <div class="modal-body">
                <img class="card-img-top" src="<?=$principal->imagem?>">
                <p class="card-text text-center mt-5"><?=$principal->descricao?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="text-right">
                <button type="button" class="btn btn-danger mt-5" data-toggle="modal" data-target="<?=$cartao->modal?>">Open
                  Modal</button>
              </div> -->

        <?php foreach($portfolios as $cartao){ ?>
        <div class="col-md-4 card">
          <div>
            <img class="card-img-top" src="<?=$cartao->imagem?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?=$cartao->titulo?></h5>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?=$cartao->modal?>">Saiba mais</button>
            </div>

          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="<?=$cartao->modalId?>" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel"><?=$cartao->titulo?></h1>
              </div>
              <div class="modal-body">
                <img class="card-img-top" src="<?=$cartao->imagem?>">
                <p class="card-text text-center mt-5"><?=$cartao->descricao?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

    <div id="author">
      <!-- <div class="card my-4">
        <h5 class="card-header">Buscar</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscando...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div> -->

      <!-- <div class="card my-2">
          <h5 class="card-header">Categorias</h5>
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

      <div class="card my-2">
        <h5 class="card-header">Autor</h5>
        <img class="rounded-circle img-fluid mx-auto mt-3" style="height:150px; width:150px"
          src="https://i.ibb.co/ZJCywsk/Image-URL.jpg">
          <h5 class="text-center">Cassiel R. Cortez</h5>
      </div>

    </div>
  </div>
</div>

<!--Footer-->
<div class="mt-5 pt-5 pb-5 footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-xs-12 about-company">
        <h2>Dedicatória</h2>
        <p class="pr-5 text-white-50">Somos gratos pelo conhecimento passado pelos nossos professores, através deles
          realizamos a criação desse projeto. </p>
        <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i
              class="fa fa-linkedin-square"></i></a></p>
      </div>
      <div class="col-lg-3 col-xs-12 links">
        <h4 class="mt-lg-0 mt-sm-3">Support</h4>

      </div>
      <div class="col-lg-4 col-xs-12 location">
        <h4 class="mt-lg-0 mt-sm-4">Endereço</h4>
        <p>Av. Eng. Fábio Roberto Barnabé, 3405 - Jardim Regina, Indaiatuba - SP, 13349-003 <br>
          (19) 3801-8688
        </p>

      </div>
    </div>
    <div class="row mt-5">
      <div class="col copyright">
        <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
      </div>
    </div>
  </div>
</div>

<?php include_once('./headFooter/footer.php') ?>
