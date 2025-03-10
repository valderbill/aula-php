<?php


// Área do quadrilátero
function areaQuadrilatero($b, $h) {
    return $b * $h;
}

// Área do triângulo
function areaTriangulo($b, $h) {
    return ($b * $h) / 2;
}

// Equação de 1º grau
function calcularEqGrau1($a, $b) {
    if ($a == 0) {
        return "Não é possível calcular: A não pode ser zero.";
        /*
        * a*x + b = 0
        * a*x = -b
        * x = -b/a
        */
    }
    return -$b / $a;
}


?>