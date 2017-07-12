<?php
require_once "index.php";
if (TESTING) {
    if (! file_exists('imagens')) {
        echo "Pasta imagens não existe";
    }
}

function carregarPecasEmbaralhadas(&$array)
{
    if (file_exists("imagens/pecas_disponiveis.json")) {
        $file = file_get_contents("imagens/pecas_disponiveis.json");
        $array = json_decode($file, true);
    } else {
        chdir('imagens');
        $array = array();
        foreach (glob("*.jpg") as $file) {
            array_push($array, $file);
        }
        shuffle($array);
        file_put_contents("pecas_disponiveis.json", json_encode($array));
    }
}