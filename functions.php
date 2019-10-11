<?php

$servicos = [
    [
        "nome" => "Desenvolvimento Web",
        "imagem" => "imagens/undraw_software_engineer_lvl5.svg",
        "descricao" => "Sites dinamicos, otimizados para motores de busca"
    ],
    [
        "nome" => "Marketing Digital",
        "imagem" => "imagens/undraw_social_dashboard_k3pt.svg",
        "descricao" => "Alcance um publico maior, venda mais rápido!"
    ],
    [
        "nome" => "Consultoria UX",
        "imagem" => "imagens/undraw_report.svg",
        "descricao" => "Ofereça a melhor experiência para seus usuários!"
    ],
    [
        "nome" => "Consultoria Agil",
        "imagem" => "imagens/undraw_report.svg",
        "descricao" => "Torne seu time de dev em pastelaria"
    ],
    [
        "nome" => "Consultoria Agil",
        "imagem" => "imagens/undraw_report.svg",
        "descricao" => "Torne seu time de dev em pastelaria"
    ],
    [
        "nome" => "Consultoria Agil",
        "imagem" => "imagens/undraw_report.svg",
        "descricao" => "Torne seu time de dev em pastelaria"
    ]
];

function listarServicos()
{
    global $servicos;

    foreach ($servicos as $index => $servico) {
        echo "<div class='col-md-4 mt-4'>
            <div class='card'>
                <img class='card-img-top p-4' src='$servico[imagem]' alt='Imagem de capa do card'>
                <div class='card-body'>
                    <p class='card-text text-center'><a href='servico.php?id=$index'>$servico[nome]</a></p>
                </div>
            </div>
        </div>";
    }
}


function getNome($id)
{
    global $servicos;
    return $servicos[$id]["nome"];
}
