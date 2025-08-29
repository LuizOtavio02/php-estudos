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

            echo "<p> Analisando o número ". number_format($num, 3, ",", ".") ." informado pelo Usuário </p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul><li> Aparte inteira do numero é <strong>". number_format($int, 0, ",", ".") ."</strong></li>";
            echo "<li> A parte fracionaria do numero é <strong>". number_format($fra,3,",",".") ."</strong></li></ul>"

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>