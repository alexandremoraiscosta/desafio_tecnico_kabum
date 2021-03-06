<?php 
session_start();
if(!isset($_SESSION['login'])) {
  echo "usuario não logado, favor fazer login em : <a href='/desafio_tecnico_kabum/index.php'> link </a>";
  exit;
}
?>
<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2 class="mt-5">Atualizar Endereço</h2>

<form action="edit.php?id=<?php echo $endereco['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Logradouro</label>
      <input type="text" class="form-control" name="endereco['logradouro']" value="<?php echo $endereco['logradouro']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo1">Bairro</label>
      <input type="text" class="form-control" name="endereco['bairro']" value="<?php echo $endereco['bairro']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">CEP</label>
      <input type="text" class="form-control" name="endereco['cep']" value="<?php echo $endereco['cep']; ?>">
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12 mt-3">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>