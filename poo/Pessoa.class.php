<?php

// classe Pessoa

class Pessoa{
    // atributos
    public $nome;
    public $idade;
    public $cpf;
    public $email;

    // métodos
    function saudar() {
        return "Olá, meu nome é " . $this->nome . " e é um prazer estar aqui!";
    }

    function exibirCartaoVisitas() {
        echo '<h2>Segue o meu cartão de visitas:</h2>';
        echo '<b>Nome:</b> ' . $this->nome . '.<br>';
        echo '<b>Idade:</b> ' . $this->idade . '.<br>';
        echo '<b>CPF:</b> ' . $this->cpf . '.<br>';
        echo '<b>Email:</b> ' . $this->email . '.<br>';
     

    }

}

?>