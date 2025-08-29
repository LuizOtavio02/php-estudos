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
        <h1>Seu numero Aleatório</h1>
    </header>
    <main>
        <?php 
        $numberFirst = $_GET['numberFirst'];
        $numberLast = $_GET['numberLast'];
        $randNumber = mt_rand($numberFirst, $numberLast);

        echo "Seu numero Aleatório é $randNumber";
        ?>
        <button onclick="javascript:document.location.reload()">Gerar Outro</button>
        <p><a href="javascript:history.go(-1)">Voltar á pagina anterior</a></p>
    </main>
    
</body>
</html>