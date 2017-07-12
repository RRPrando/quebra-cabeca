<?php
/**
 * Created by PhpStorm.
 * User: rafae
 * Date: 10/07/2017
 * Time: 22:26
 */
require_once "index.php";

if (isset($_POST['inserirPeca']))
{
    $posicaOrigem = (($_POST['linhaOrigem']*8)-8+$_POST['colunaOrigem'])-1;
    $posicaoDestino = (($_POST['linhaDestino']*8)-8+$_POST['colunaDestino']);
    echo $pecasEmbaralhadas[$posicaOrigem]."<br>";
    echo $pecasTabuleiro[$posicaoDestino]."<br>";
    if ($pecasEmbaralhadas[$posicaOrigem] == $posicaoDestino)
    {
        $pecasTabuleiro[$posicaoDestino] = $pecasEmbaralhadas[$posicaOrigem];
        $pecasEmbaralhadas[$posicaOrigem] = "vazio.jpg";
        echo "entrou";
        require_once "mostrar.php";
    }
}