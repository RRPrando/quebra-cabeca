<?php
/**
 * Created by PhpStorm.
 * User: rafae
 * Date: 10/07/2017
 * Time: 22:15
 */
define('TESTING', 0);
$pecasEmbaralhadas = array();
$pecasTabuleiro = array();
require_once "gerar_quebracabeca.php";
require_once "carregar_pecas.php";
carregarPecasEmbaralhadas($pecasEmbaralhadas);
for ($i=0;$i<($pecas_colunas*$pecas_linhas);$i++) {
    $pecasTabuleiro[] = "vazio.jpg";
}
require_once "mostrar.php";
