<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $numero = 10;
        $nome = "Luiz";
        // o resultado boolean nao aparece no echo como true ou false aparece 1 ou vazio por isso o ternário
        $verifica = true ? "true": "false";
        $decimal = 10.0;
        // utilizando coerção para forçar um tipo
        $number = (int) 3e2;

        var_dump($numero);
        var_dump($nome);
        var_dump($verifica);
        var_dump($decimal);
        var_dump($number);

        echo "$verifica";
    ?>
</body>
</html>