<?php

include_once('header.php');

if (isset($servico)) {
    $nome = $servico['nome'];
    $descricao = $servico['descricao'];
    $imagem = $servico['imagem'];
}

?>
<main class="mt-5 container">
    <h1>Excluir serviço</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['excluir_id']; ?>">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $nome; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea readonly row="3" class="form-control" name="descricao" id="descricao"><?php echo $descricao; ?></textarea>
        </div>
        <img src="<?php echo $imagem ?>" width="300">
        <div class="form-group">
            <a href="admin.php" class="btn btn-default">Voltar</a>
            <button class="btn btn-danger" name="excluir_servico">Confirmar</button>
        </div>
    </form>
</main>
<?php include_once('footer.php'); ?>