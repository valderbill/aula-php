<?php

// declaração de variaveis
$nome = $_POST["nome"];
$peso = str_replace(",",",",$_POST["peso"]);
$altura = str_replace(",",",",$_POST["altura"]);

// calcula o imc
$imc = $peso/pow($altura,2);

// diagnostico com a base no valor do imc
if ($imc <= 18.5) $result = $nome . " está a baixo do peso";
else if ($imc <= 25) $result = $nome . " está no peso ideal";
else if ($imc <= 30) $result = $nome . " está acima peso";
else if ($imc <= 35) $result = $nome . " está obeso";
else if ($imc <= 40) $result = $nome . " está com obesidade nivel II";
else $result = $nome . " está com obesidade morbida";

// ecibe o valor do imc na tela
echo '<body style="font-family: Arial, Helvetica, sans-serif;">';
echo '<h1 style="text-align: center;">';
echo $nome . ", seu IMC é " . round($imc,2) . ".";
echo '<h1';
echo '<h2 style="text-alig: center;">';
echo $result;
echo '</h2>';
echo '<br /><a href="index.html">Voltar</a>';
