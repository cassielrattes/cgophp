
<?php include_once('./headFooter/head.php') ?>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
  <a class="navbar-brand" href="#"><img src="https://i.ibb.co/kBrnH99/Logo-TCC.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">
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

<div class="row">
  <?php
    $cards = array("c3p5gCC/Logo-TCC.jpg", "c3p5gCC/Logo-TCC.jpg","c3p5gCC/Logo-TCC.jpg","c3p5gCC/Logo-TCC.jpg");
    shuffle($cards);
    foreach ($cards as $card){ ?>
  <div class="col col-md-4 mb-4">
    <img class="rounded mx-auto d-block img-fluid" src="https://i.ibb.co/<?=$card?>" style="height:250px;">
  </div>
  <?php
}
?>
</div>


<?php include_once('./headFooter/footer.php') ?>