<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>
    <main>
        <?php
            // Valor que quero que seja convertido 
            $real = $_GET["number"] ?? 0;
            // Valor utilizado através de API para conversão
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            
            $cota = $dados["value"][0]["cotacaoCompra"];

            $con = $real / $cota;
            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Voce possui" . numfmt_format_currency($padrao, $real, "BRL") . " em Reais e isso daria " . "<strong>" . numfmt_format_currency($padrao, $con, "USD"). "</strong>" . " em Dólares";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>