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
            $cep = $_GET['cep'];
            $url = 'http://correiosapi.apphb.com/cep/'. $cep;

            $dados = json_decode(file_get_contents($url), true);
            
            
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>