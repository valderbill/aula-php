<?php

// função
function darBoasVindas($nome) {
    // retorna o valor da função
    return "Seja bem vindo, " . $nome . "!";

}

// algoritimo principal
echo darBoasVindas($_POST['nome']);

?>