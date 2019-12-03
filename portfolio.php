<?php include_once('./headFooter/head.php') ?>

<style>

body {    
  background-image: linear-gradient(to bottom, transparent, rgba(0,0,0,.7)) 
  
}
.footer{
  background: black;
  color:white;
  
  .links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
      &:hover{
        text-decoration:none;
        color:#4180CB;
        }
    }
  }  
  .about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#4180CB}
    }
  } 
  .location{
    i{font-size: 18px;}
  }
  .copyright p{border-top:1px solid rgba(255,255,255,.1);} 
}

</style>

<nav class=" my-nav navbar navbar-dark navbar-expand-lg ">
      <div class="container">
      <a class="navbar-brand" href="portfolio.php"><img class="img-fluid rounded-circle" src="https://i.ibb.co/Tb1zjpg/Logo-TCC-Bruno.png" alt="Logo da Empresa."></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        </ul>
      </div>
  </div>
    </nav>
    
    <br>
    

<div class="row" style=" ">

  <div class="col col-md-4 col-sm-6 mt-3 mb-3 mx-5">
      <img class="img-fluid" src="https://i.ibb.co/jZzw7LV/app-cgo.png">
  </div>

  <div class="col col-md-4 col-sm-6 mx-5">
    <p class="text-justify mt-5 "><h4>CGO</h4></p>
    <p class="text-justify mt-5" style="font-size: 17px;"> Os tecnicos em edificações tinham dificuldade quando precisavam inserir dados referente à obra, pois em todos os locais que deveriam estar 
    havia à necessidade de levar o notebook, ocasionando atrasos, seja na hora de ligar o equipamento (demora no carregamento), ou até mesmo a questão da mobilidade, para solucionar o problema nossa equipe CGO 
    criou o aplicativo responsavel pelo armazenamento de dados disponibilizados pelo usuário, possibilitando à edição e atualização dos mesmos, em especial criamos um sistema que gera gráficos de todo o gasto 
    realizado na obra, comparando-o com os dados previstos do orçamento.  
    </p>
    <a href=""><img src="https://lh3.googleusercontent.com/08fkqRQiRsd5RqS9KaUhlm5LE-PlPzSy5cyMNVS96nZoGtLXYGFyQfsscG5syhpc3DWmG7EqKetoePw80EhHENVllg=w122-rw-" alt=""></a>
    <a href=""><img src="https://lh3.googleusercontent.com/1hJj6Aw2k6cEyFu10xdj5riLo0wBGFKE5XnbGaymhgo1z8Tsr8EpfJr2jbQFRxDONvwk6lak-62F2Fx7-_jp-ykJKA=w122-rw-" alt=""></a>
  </div>
  <div class="col col-md-4 col-sm-6 mt mb-3 mx-5">

</div>

<div class="col col-md-4 col-sm-6 mt-3 mb-3 mx-5">

</div>

</div>



<!--Footer-->
<div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>Dedicatória</h2>
      <p class="pr-5 text-white-50">Somos gratos pelo conhecimento passado pelos nossos professores, através deles realizamos a criação desse projeto. </p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
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