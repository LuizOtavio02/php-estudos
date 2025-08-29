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
        <h1>Analise de numero real</h1>
    </header>
    <main>
        <?php
            $num = $_GET["number"] ?? 0;
            $cont = 0;
            for ($i=1; $i <=$num ; $i++) { 
                if ($num % $i == 0) {
                    $cont++;
                }
            }
            if ($cont <= 2) {
                echo "O numero $num é primo pq ele tem apenas $cont múltiplos";
            }else{
                echo "O numero $num não é primo pois ele tem $cont múltiplos";
            }
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>