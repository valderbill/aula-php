<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    <h1>Sequência de Fibonacci</h1>
    <form method="POST">
        <label for="termo">Informe um número:</label>
        <input type="number" id="termo" name="termo" required min="1">
        <input type="submit" value="Gerar Fibonacci">
    </form>

    <?php

    function fibonacci($n) {
        if ($n == 0) {
            return 0;
        } elseif ($n == 1) {
            return 1;
        } else {
            return fibonacci($n - 1) + fibonacci($n - 2);
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $termo = ($_POST['termo']);
        
        if ($termo > 0) {
            echo "<h2>Sequência de Fibonacci até o termo $termo:</h2>";
        
            for ($n = 0; $n < $termo; $n++) {
                echo fibonacci($i);
            }
         
        } 
    }

/*
* Crie um script em PHP que gere a sequência de Fibonacci até o termo informado pelo usúario
* em um furmulário HTML. Exemplo: O usuário informa no formulário o número 10, o script deve
* gerar a seguência de Fibonacci até o termo 10.
* Obs: fazer com a função recursiva.
*/

?>

</body>
</html>


