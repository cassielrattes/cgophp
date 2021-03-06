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

<nav class=" my-nav navbar navbar-light navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img class="img-fluid rounded-circle"
        src="https://i.ibb.co/Tb1zjpg/Logo-TCC-Bruno.png" alt="Logo da Empresa."></a>
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

<div class="jumbotron jumbotron-fluid" style="background-color:rgb(55,52,53)">
  <div class="container">
    <h1 class="display-4 text-center text-white">Portfolio</h1>
  </div>
</div>

<div class="row">
  <div class="col col-md-4 ml-5 mxauto">
    <img class="img-fluid" src="https://i.ibb.co/jZzw7LV/app-cgo.png">
  </div>
  <div class="col col-md-6 col-sm-12 sm8">
    <h1 class="ml-3">CGO</h1>
    <h5 class="ml-3">Os tecnicos em edificações tinham dificuldade quando precisavam inserir dados referente à obra,
      pois em todos os locais que deveriam estar
      havia à necessidade de levar o notebook, ocasionando atrasos, seja na hora de ligar o equipamento (demora no
      carregamento), ou até mesmo a questão da mobilidade, para solucionar o problema nossa equipe CGO
      criou o aplicativo responsavel pelo armazenamento de dados disponibilizados pelo usuário, possibilitando à edição
      e atualização dos mesmos, em especial criamos um sistema que gera gráficos de todo o gasto
      realizado na obra, comparando-o com os dados previstos do orçamento. </h5>
    <a class="ml-3" href=""><img
        src="https://lh3.googleusercontent.com/08fkqRQiRsd5RqS9KaUhlm5LE-PlPzSy5cyMNVS96nZoGtLXYGFyQfsscG5syhpc3DWmG7EqKetoePw80EhHENVllg=w122-rw-"
        alt=""></a>
    <a class="ml-3" href=""><img
        src="https://lh3.googleusercontent.com/1hJj6Aw2k6cEyFu10xdj5riLo0wBGFKE5XnbGaymhgo1z8Tsr8EpfJr2jbQFRxDONvwk6lak-62F2Fx7-_jp-ykJKA=w122-rw-"
        alt=""></a>
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