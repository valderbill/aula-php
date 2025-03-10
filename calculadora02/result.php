<?php

// importando as funções de outro arquivo
include "funcoes.php";

/* Crie um programa que receba dois números do usuário a partir de um formulário HTML
* e que o mesmo escolha um dos seguintes cálculos:
* - Área do Quadrilátero
* - Área do Triângulo
* - Equação do 1º grau | Recebe dois valores  A*X + B = 0  || x = -B/A
* Após o usuário escolher o cálculo, o programa retorna o resultado desejado;
* DIVIRTAM-SE !!! =D
*/


  
    $n1 = str_replace(",", ".", $_POST['n1']);  
    $n2 = str_replace(",", ".", $_POST['n2']);  
    $operacao = $_POST['operacao'];  

    switch (operacao){
        case "quadrilátero":
            echo "Área do quadrilátero é" . areaQuadrilatero ($n1, $n2) . ".";
            break:
       
            case "triangulo":
                echo "Área do triangulo é" . areaTriangulo ($n1, $n2) . ".";
                break:

        case "Equação 1º grau":
            echo "Área do  é" . areaQuadrilatero ($n1, $n2) . ".";
            break:


            echo '<br /><a href="index.html">Voltar<a/>';       
        
            
?>