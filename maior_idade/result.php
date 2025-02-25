<?php
    // declaração de variáveis
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    // estrutura de decisão
    // if ($idade >=18) echo $nome . " é mairo de idade.";
    // else echo $nome . " é menor de idade. ";

    // operador tenário
    $result = $idade >= 18 ? " é maior de idade" : " é menor de idade.";

    // saída
    echo $nome . $result;
?>