<?php include_once "headFooter/head.php"; ?>
<?php
  require_once "src/helpers/banco.php";
  require_once "src/models/usuarioDAO.php";
?>

<?php include_once "partials/head.php"; ?>


<form method="POST" action="src/controllers/desloga.php">
<button type="submit" class="btn btn-primary">Logout</button>
</form>
</h3>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>USUARIO</th>
            <th>SENHA</th>
            <th>NOME</th>
            <th>TIPO</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($listaDeUsuarios as $usuario){ ?>
                 <tr>
                    <td><?=$usuario->rm ?></td>
                    <td><?=$usuario->nome ?></td>
                    <td><?=$usuario->curso ?></td>
                    <td>
                       <a onclick="modalEditar(<?=$usuario->rm?>, '<?=$usuario->nome?>', '<?=$usuario->curso?>')" data-toggle="modal" data-target="#modal-edicao">
                        <i class="fa fa-pencil"></i>
                      </a>
                     </td>
                    <td>
                      <a onclick="modalDeletar(<?=$usuario->rm?>)" data-toggle="modal" data-target="#modal-delecao">
                    <i class="fa fa-times"></i>
                     </a> </td>
                 </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <tr><td colspan="5" ><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-criacao">
  CRIAR USUARIO
</button> </td></tr>
        </tfoot>
</table>


<script>
 function modalEditar(rm, nome, curso){
    document.getElementById('ed-rm').value = rm;
    document.getElementById('ed-nome').value = nome;
    document.getElementById('ed-curso').value = curso;
 }
 function modalDeletar(rm, nome, curso){
    document.getElementById('dl-rm').value = rm;
 }
</script>

<?php include_once "headFooter/footer.php"; ?>