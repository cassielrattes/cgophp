<?php 
class Portfolio{
  public $titulo, $imagem, $descricao;
  function __construct($titulo, $imagem, $descricao)
  {
    $this->titulo = $titulo;
    $this->imagem = $imagem;
    $this->descricao = $descricao;
  }
}


$portfolios = array(
  new Portfolio
  (
  /* Titulo */'Tipos de navegação no React Native',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  'Existem diversos tipos de navegação que podem ser usadas em um aplicativo com React Native.
  Cada um desses tipos possui um objetivo e um tipo de implementação diferentes. Hoje, vamos entender quando, e como, utilizar cada um deles.'
  ),

  new Portfolio
  (
  /* Titulo */'Paginação com React Router Dom',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  'A paginação em uma página pode até parecer redundante, mas ela é um "órgão vital" para seu website, principalmente quando se trata de listas com enormes quantidades de informação, além de ser extremamente útil para acesso momentâneo, tal qual é a importância de guardar através do link as informações para chegar na mesma posteriormente.
  Quando utilizamos um backend que trás o HTML processado para nós, é bem tranquilo trabalhar com elas, todavia tratando-se de SPA isso se torna um pouco chato. A parte "chata" em si não é definir a paginação, mas integrar ela ao browser de uma maneira prática e eficaz.'
  ),  

  new Portfolio
  (
  /* Titulo */'Serverless: Quando utilizar e aplicações com NodeJS',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  'Ultimamente o termo serverless entrou em ascensão e muito se comenta sobre aplicações utilizarem essa arquitetura como forma de se ganhar performance evitando a configuração de servidores complexos através de containers ou até de arquiteturas mais tradicionais.'
  ),  

  new Portfolio
  (
  /* Titulo */'Atualizando aplicações React Native para a última versão',
  /* Imagem */'https://www.guiadaengenharia.com/wp-content/uploads/2019/07/or%C3%A7amento-bdi.jpg',
  /* Descrição */
  'Se você desenvolve aplicativos usando React Native, deve ter reparado que ele está em constante evolução, uma versão nova é lançada quase mensalmente. A cada versão são feitas melhoras no Framework, sejam elas em performance, segurança, suporte a novas funcionalidades, etc...

  A atualização de uma aplicação feita em React Native para a última versão é um processo não tão simples, mas o Facebook, juntamente com a Comunidade, criaram uma lib para facilitar esse processo, a rn-diff-purge.
  
  Essa lib identifica a versão do React Native da sua aplicação e, baseado nela, realiza as mudanças para o React Native ficar na última versão disponível.'
  ),

);
?>

<?php include_once('./headFooter/head.php') ?>

<div class="container">

  <div class="row">
    <!-- Blog Entries Column -->
    <div class="col-md-8">
      <h1 class="my-4">Ultimas Noticias /
        <small>Blog CGO</small>
      </h1>
      <!-- Blog Post -->
      <?php foreach($portfolios as $cartao){ ?>
      <div class="card mb-4">
        <img class="card-img-top" src="<?=$cartao->imagem?>" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title text-center"><?=$cartao->titulo?></h2>
          <p class="card-text text-center"><?=$cartao->descricao?></p>
        </div>
      </div>
      <?php } ?>
    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      <!-- Search Widget -->
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

      <!-- Categories Widget -->
      <div class="card my-4">
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
      </div>

      <!-- Side Widget -->
      <div class="card my-4">
        <h5 class="card-header">Autor</h5>
        <img class="rounded-circle img-fluid mx-auto mt-3" style="height:150px; width:150px" src="https://i.ibb.co/ZJCywsk/Image-URL.jpg">
        <div class="card-body">
          <h5 class="text-center">Cassiel R. Cortez</h5>
        </div>
      </div>

    </div>

  </div>
  <!-- /.row -->
</div>


<?php include_once('./headFooter/footer.php') ?>