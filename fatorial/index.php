<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <h1>Cálculo de Fatorial de um nímero inteiro</h1>
    <hr />
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <label for="numero">Número:</label><br />
    <input type="number" name="numero" />
    <br><br>
    <button type="submit">Calcular</button>
    </form>
    <?php

    //função para calcular o fatorial
    function calcularFatorial($numero){

    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // declaração de variavel
        $numero = ($_POST["numero"]);

        // executando a função
        echo "<h2> O fatorial de " . $numero . "! é: " . calcularFatorial($numero) . "</h2>";  
    }

    ?>
</body>
</html>