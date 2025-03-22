<?php

// importa a classe
include "Pessoa.class.php";

// instancia a classe Pessoa
// $usuario = new Pessoa($_POST["nome"],$_POST["idade"], $_POST["email"], $_POST["cargo"]);
$usuario = new Pessoa("", 0, "", "");



// exibe os dados
echo "<h1>Dados do Usúario</h1>";
echo "<he />";
echo "<p><b>Nome: " . $usuario->nome . "</p>";
echo "<p><b>Idade: " . $usuario->idade . "</p>";
echo "<p><b>Email: " . $usuario->email . "</p>";
echo "<p><b>Cargo: " . $usuario->cargo . "</p>";


?>