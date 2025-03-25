<?php
// importa a classe Pessoa
include "Pessoa.class.php";
include "PessoaFisica.class.php";

// cria um objeto da classe PessoaFisica
$usuario = new PessoaFisica();

// atribui valores aos atributos
$usuario->SetNome("Valdeli");
$usuario->SetCpf("123.456.789-10");
$usuario->setDataNascimento("12/07/1977");
$usuario->setProfissao("Estudante");
$usuario->setGenero("Masculino");
$usuario->setEmail("valdeli@email.com");
$usuario->setTelefone("(61)99787-7878");
$usuario-setEndereco->("Qd 01 Lt 01");

// ecibe os valores dos atributos
echo "<b>Nome:</b>" . $usuario->SetNome() . "<br>";
echo "<b>CPF:</b>" . $usuario->SetCpf() . "<br>";
echo "<b>Data de Nascimento:</b>" . $usuario->setDataNascimento() . "<br>";
echo "<b>Profissão:</b>" . $usuario->setProfissao() . "<br>";
echo "<b>Genero:</b>" . $usuario->setGenero() . "<br>";
echo "<b>E-mail:</b>" . $usuario-setEmail() . "<br>";
echo "<b>Telefone::</b>" . $usuario-setTelefone() . "<br>";
echo "<b>Endereço:</b>" . $usuario-setEndereco() . "<br>";

?>