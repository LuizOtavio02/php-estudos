<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversão</h1>
    </header>
    <main>
        <?php 
        $valor = $_GET['number'];
        $cotacao = 5.22;
        $conversao = $valor / $cotacao;
        // number_format($valor, 2,",",".") para reais
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Voce tem". numfmt_format_currency($padrao, $valor, "BRL") ."em Reais <br> E possui <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong> em Dólares";

        ?>
        
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>