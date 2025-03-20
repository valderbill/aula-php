<?php
require_once "funcoes.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $tipoConta = $_POST["tipoConta"];

    $novaConta = new ContaBancaria($nome, $cpf, $email, $telefone, $tipoConta);
    echo $novaConta->exibirDadosConta();
} else {
    echo "<p>Erro ao processar o formulário.</p>";
}
?>
