<?php require_once('header.php'); ?>

<section class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1><?php echo getNome($_GET['id']); ?></h1>
            <p>descrição</p>
        </div>
        <div class="col-md-6">
            <img src="caminho" alt="">
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>