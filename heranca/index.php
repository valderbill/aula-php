<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<br />
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <select name="pessoa">
        <option value="fisica">Pessoa Fisica</option>
        <option value="jurudica">Pessoa Jurídica</option>
</select>
<br /><br />
<button type="submit">Selecionar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["Pessoa"] == "fisica") header("Location: pessoaFisicaForm.php");
    else header("Location: pessoaJuridicaForm.php");
}
?>
    
</body>
</html>