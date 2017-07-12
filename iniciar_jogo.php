<?php

if (isset($_POST['zerar'])) {
    $arquivo = "./imagens/pecas_disponiveis.json";
    unlink($arquivo);

    $pecas_colunas = 8;
    $pecas_linhas = 6;
    $tamanho_peca = 100;

    require_once "carregar_pecas.php";
    $pecasEmbaralhadas = array();
    carregarPecasEmbaralhadas($pecasEmbaralhadas);
    require_once 'mostrar.php';
}