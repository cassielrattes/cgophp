  

<?php include_once "headFooter/head.php";  ?>

<form class="container" action="src/controllers/autentica.php" method="post">
<div class="form-group">
  <label for="usuario">usuario</label>
  <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="">
</div>
<div class="form-group">
  <label for="senha">Senha</label>
  <input type="password" class="form-control" name="senha" id="senha" aria-describedby="helpId" placeholder="">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include_once "headFooter/footer.php"; ?>