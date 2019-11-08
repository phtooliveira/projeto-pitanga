<?php require_once('functions.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Agência Pitanga</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="http://localhost/projeto-pitanga/index.php">
                <img src="imagens/pitanga-logo.png" alt="Pitanga">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pull-right" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projeto-pitanga/index.php#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projeto-pitanga/index.php#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projeto-pitanga/index.php#contato">Contato</a>
                    </li>
                    <?php
                    if (isset($_SESSION['logado'])) {
                        echo "<li><a class='nav-link'>Bem vindo, usuario</a></li>";
                        echo "<li><a class='nav-link' href='login.php?logout=true'>sair</a></li>";
                    } else {
                        echo "<li><a class='nav-link' href='login.php'>login</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>