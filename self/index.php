<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada e saída de dados</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="nome">Digite o seu nome:</label><br />
        <input type="text" name="nome"/>
        <br />
        <br />
        <button type="submit">Enviar</button>

    </form>
    <h1>
<marquee>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // declaração de variavel
    $nome = $_POST['nome'];

    // saida de dados
    echo $nome;

    }
    ?>
</marquee>
    <hr />
</body>
</html>