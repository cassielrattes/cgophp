<?php include_once('./headFooter/head.php') ?>

<style>

.my-nav{
position: absolute;
z-index: 10;
width: 100%;
}

body {    
  background: url(https://i.ibb.co/r3kZnk6/asd.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>

<nav class=" my-nav navbar navbar-dark navbar-expand-lg ">
      <div class="container">
      <a class="navbar-brand" href="portfolio.php"><img src="https://i.ibb.co/WpDF2qy/Logo-TCC.png" height="100px" width="100px" alt="Logo da Empresa."></a>
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
          <li class="nav-item">
            <a class="nav-link h4" href="#">Suporte</a>
          </li>
        </ul>
      </div>
  </div>
    </nav>







<?php include_once('./headFooter/footer.php') ?>