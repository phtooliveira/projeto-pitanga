<?php

include_once('header.php');

if (isset($servico)) {
    $nome = $servico['nome'];
    $descricao = $servico['descricao'];
    $imagem = $servico['imagem'];
}

?>
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col mb-4">
                <h1>Editar serviço</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-5">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $_GET['editar_id']; ?>">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $nome; ?>">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descricao</label>
                        <textarea row="3" class="form-control" name="descricao" id="descricao"><?php echo $descricao; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem</label>
                        <input type="file" class="form-control" name="imagem" id="imagem">
                        <img src="<?php echo $imagem; ?>" width="300">
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-primary" name="editar_servico">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-6 text-center">
                <img src="imagens/undraw_add_file_4gfw.svg" alt="" class="ilustra-servico">
            </div>
        </div>
    </div>
</main>
<?php include_once('footer.php'); ?>