<?php require_once('header.php'); ?>

<section id="banner">
    <div class="container mb-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="imagens/banner_marketing.png" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagens/banner_web.png" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagens/banner_ux.png" alt="Terceiro Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>
</section>
<section id="servicos">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-5">Serviços</h2>
            </div>
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="servicos/undraw_process_e90d.png" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem vero consectetur neque delectus eos tempore qui? Fuga obcaecati autem adipisci maiores. Nobis vero sunt fugit! Cumque eum reprehenderit maiores laborum?</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="servicos/undraw_multitasking_hqg3.png" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus fuga, modi delectus eaque debitis assumenda veritatis eveniet possimus eos ipsam, sequi quis, id quia veniam quaerat porro ut incidunt tenetur!</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="servicos/undraw_code_typing_7jnv.png" alt="Imagem de capa do card">
  <div class="card-body">
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime sed fuga aut quidem dignissimos porro officia impedit laboriosam ipsa nisi, molestiae doloremque vitae nam magni, eaque dolore, deserunt voluptas consequatur.</p>
  </div>
</div>
        </div>
        <div class="row">
            <?php listarServicos(); ?>
        </div>
    </div>
</section>
<section id="sobre">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-5">
                <img src="imagens/undraw_team_spirit_hrr4.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 p-5">
                <h2 class="mt-5">Sobre</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint explicabo voluptatum ipsam quo
                    sapiente, accusantium tenetur ullam ipsum harum commodi natus laborum! A magnam nulla deleniti
                    autem, harum optio eos, laudantium, quasi porro perferendis laborum.</p>
            </div>
        </div>
    </div>
</section>
<section id="contato">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-5">
                <h2>Entre em contato</h2>

                <form>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 pt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.0513669381103!2d-46.67744548554195!3d-23.602490668996374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1569681999561!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>