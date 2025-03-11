<?php

/*
* Crie um programa onde o usúario informa o tamanho do raio de um circulo, e o programa
* retorna a área do circulo e o tamanho da circunferência.
* Obs: use a função pi() dp PHP para pegar o verdadeiro valor do número PI.
*/


function calcular_area($raio) {
    return pi() * pow($raio, 2);
}

function calcular_circunferencia($raio) {
    return 2 * pi() * $raio;
}
?>

