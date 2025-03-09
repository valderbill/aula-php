<?php

// funções
function somar($x, $y) {
    return $x + $y;
}

function subtrair($x, $y) {
    return $x - $y;
}

function multiplicar($x, $y) {
    return $x * $y;
}

function dividir($x, $y) {
    return $x / $y;
}

function tirarResto($x, $y) {
    return $x % $y;
}


// declaração de variáveis
$x = str_replace(",", ".", $_POST['x']);
$y = str_replace(",", ".", $_POST['y']);
$operador = $_POST['operador'];

switch ($operador) {
    case "soma":
        echo somar($x, $y);
        break;

    case "subtração":
        echo subtrair($x, $y);
        break;

    case "multiplicação":
        echo multiplicar($x, $y);
        break;

    case "divisão":
        echo dividir($x, $y);
        break;

    case "resto":
        echo tirarResto($x, $y);
        break;
        
    case "potência":
        echo pow($x, $y);
        break;
}

// link para volta
echo '<br /><a href="index.html">Voltar</a>';

?>
