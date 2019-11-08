<?php require_once('header.php'); ?>

<section class="container mt-5">
    <div class="row">
        <div class="col">
            <h1><?php echo getNome($_GET['id']); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-3 mb-3">
            <p><?php echo getDescricao($_GET['id']); ?></p>
        </div>
        <div class="col-lg-6 text-center">
            <img src="<?php echo getImagem($_GET['id']); ?>" class="ilustra-servico" alt="<?php echo getNome($_GET['id']); ?>">
        </div>
    </div>
    
</section>

<?php require_once('footer.php'); ?>