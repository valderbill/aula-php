<?php
    // declaração de variáveis
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $altura = str_replace(",",".",$_POST["altura"]);

     // verificar a idade e a altura
    if ($idade>=12 && $altura>=1.2) {
        echo "<h1>";
        echo $nome . " está autorizado a entrada.";
        echo "<h1>";        
    }   
    else {
        echo "<h1>";
        echo $nome . " não está autorizado a entrada.";  
        echo "</h1>";      
    }
   
?>