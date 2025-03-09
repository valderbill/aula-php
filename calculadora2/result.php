<?php

/* Crie um programa que receba dois números do usuário a partir de um formulário HTML
* e que o mesmo escolha um dos seguintes cálculos:
* - Área do Quadrilátero
* - Área do Triângulo
* - Equação do 1º grau | Recebe dois valores  A*X + B = 0  || x = -B/A
* Após o usuário escolher o cálculo, o programa retorna o resultado desejado;
* DIVIRTAM-SE !!! =D
*/

// Área do quadrilátero
function areaQuadrilatero($n1, $n2) {
    return $n1 * $n2;
}

// Área do triângulo
function areaTriangulo($n1, $n2) {
    return ($n1 * $n2) / 2;
}

// Equação de 1º grau
function calcularEqGrau1($a, $b) {
    if ($a == 0) {
        return "Não é possível calcular: A não pode ser zero.";
    }
    return -$b / $a;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $n1 = str_replace(",", ".", $_POST['n1']);  
    $n2 = str_replace(",", ".", $_POST['n2']);  
    $calc = $_POST['calc'];  

    if ($calc == 'quadrilátero') {
        $resultado = areaQuadrilatero($n1, $n2);
        echo "A área do quadrilátero é: " . $resultado;
    } elseif ($calc == 'triângulo') {
        $resultado = areaTriangulo($n1, $n2);
        echo "A área do triângulo é: " . $resultado;
    } elseif ($calc == 'equação') {
        $resultado = calcularEqGrau1($n1, $n2);
        echo "A solução da equação é: " . $resultado;
    }
}

?>
