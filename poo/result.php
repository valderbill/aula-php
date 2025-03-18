<?php

// incluir a classe Pessoa
include "Pessoa.class.php";

// cria um objeto da classe Pesso (instanciar a classe)
$usuario = new Pessoa();

// pegar os valores do formulario e atribuir ao objeto
$usuario->nome = $_POST["nome"];
$usuario->idade = $_POST["idade"];
$usuario->cpf = $_POST["cpf"];
$usuario->email = $_POST["email"];

 //exibir os valores do objeto
// echo '<b>Nome:</b> ' . $usuario->nome . '<br>';
// echo '<b>Idade:</b> ' . $usuario->idade . '<br>';
// echo '<b>CPF:</b> ' . $usuario->cpf . '<br>';
// echo '<b>Email:</b> ' . $usuario->email . ".<br />";




// executa o método
echo '<marquee>' . '<h1>' . $usuario->saudar() . '</h1>' . '</marquee>';
$usuario->exibirCartaoVisitas();


?>