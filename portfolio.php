<?php include_once('./headFooter/head.php') ?>

<style>
.my-nav{
z-index: 10;
width: 100%;
}
body {    
  background-color: whte; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>

<nav class=" my-nav navbar navbar-dark navbar-expand-lg ">
      <div class="container">
      <a class="navbar-brand" href="portfolio.php"><img class="img-fluid rounded-circle" src="https://i.ibb.co/jrPQGKr/logoTCC.png" alt="Logo da Empresa."></a>
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
    <hr>
    

<div class="row" style="background-image: url('https://miro.medium.com/max/5760/0*r4UzW_jGNthsrmph'); ">

  <div class="col col-md-4 col-sm-6 mt-3 mb-3 mx-5">
      <img class="img-fluid" src="https://www.pikpng.com/pngl/b/163-1631644_iphone-xr-iphone-xr-transparent-background-hd-png.png">
  </div>

  <div class="col col-md-4 col-sm-6 mx-5">
    <p class="text-justify mt-5 "><h4>CGO</h4></p>
    <p class="text-justify mt-5" style="font-size: 17px;"> Os tecnicos em edificações tinham dificuldade quando precisavam inserir dados referente à obra, pois em todos os locais que deveriam estar 
    havia à necessidade de levar o notebook, ocasionando atrasos, seja na hora de ligar o equipamento (demora no carregamento), ou até mesmo a questão da mobilidade, para solucionar o problema nossa equipe CGO 
    criou o aplicativo responsavel pelo armazenamento de dados disponibilizados pelo usuário, possibilitando à edição e atualização dos mesmos, em especial criamos um sistema que gera gráficos de todo o gasto 
    realizado na obra, comparando-o com os dados previstos do orçamento.

    
    
     </p>
  </div>


</div>



<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
        <a class="btn btn-outline-white" href=""  role="button">About Us            
        </a>
        <a class="btn btn-outline-white" href=""  role="button">Contact Us             
        </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">
    
    <!--Copyright-->
    <div class="footer-copyright py-3">
        © 2018 Copyright
       CGO
    </div>
    <!--/.Copyright-->


<?php include_once('./headFooter/footer.php') ?>