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
        <?php 
            $num = $_GET["num"] ?? 0;
            echo "<h1>A Tabuada do $num</h1>"
        ?>
    </header>
    <main>
        <?php
            
            for ($i=1; $i <=10; $i++) {
                
                echo "$num x $i     = " . $num*$i . " <br>";
                
            }
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>