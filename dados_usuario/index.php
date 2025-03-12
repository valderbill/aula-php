<?php


/* Crie um nobo prejeto chamado "dados_usuario"; e nele crie um
arquivo chamado "index.php", onde você irá criar im formulario onde o
usúario irá preencher os seguintes dados:
* - Nome
* - Idade
* - E-mail
* - Telefone
* - CPF
* - Profissão
* - CEP
* - UF
* - Cidade
* - Bairro
* - Logradouro
* - Compemento
* - Nímero
* - Os dados devem ser armazenados em um array e ecibilos na mesma tela.
*/


$dados_usuario = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $dados_usuario = array(
        'nome' => $_POST['nome'],
        'idade' => $_POST['idade'],
        'email' => $_POST['email'],
        'telefone' => $_POST['telefone'],
        'cpf' => $_POST['cpf'],
        'profissao' => $_POST['profissao'],
        'cep' => $_POST['cep'],
        'uf' => $_POST['uf'],
        'cidade' => $_POST['cidade'],
        'bairro' => $_POST['bairro'],
        'logradouro' => $_POST['logradouro'],
        'complemento' => $_POST['complemento'],
        'numero' => $_POST['numero']
    );
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Usuário</title>
</head>
<body>
    <h1>Formulário Dados do Usuário</h1>

    <form action="" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">Idade:</label><br>
        <input type="number" id="idade" name="idade" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="tel" id="telefone" name="telefone" required><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf" required><br><br>

        <label for="profissao">Profissão:</label><br>
        <input type="text" id="profissao" name="profissao" required><br><br>

        <label for="cep">CEP:</label><br>
        <input type="text" id="cep" name="cep" required><br><br>

        <label for="uf">UF:</label><br>
        <input type="text" id="uf" name="uf" required><br><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade" required><br><br>

        <label for="bairro">Bairro:</label><br>
        <input type="text" id="bairro" name="bairro" required><br><br>

        <label for="logradouro">Logradouro:</label><br>
        <input type="text" id="logradouro" name="logradouro" required><br><br>

        <label for="complemento">Complemento:</label><br>
        <input type="text" id="complemento" name="complemento"><br><br>

        <label for="numero">Número:</label><br>
        <input type="number" id="numero" name="numero" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <hr>
    <hr>
    <?php if (!empty($dados_usuario)): ?>
        <h2>Dados do Usuário:</h2>
        <ul>
            <?php foreach ($dados_usuario as $chave => $valor): ?>
                <marquee>
                <li><strong><?php echo ucfirst($chave); ?>:</strong> <?php echo htmlspecialchars($valor); ?></li>
                </marquee>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>


