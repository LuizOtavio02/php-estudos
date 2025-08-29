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
        <h1>Os Dados</h1>
    </header>
    <main>
        <?php 
        $numero = $_GET['number'];
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
            
        echo "Seu <strong>Numero</strong> é <strong>$numero</strong> <br><br> O <strong>Antecessor</strong> é <strong>$antecessor</strong> <br><br> O <strong>Sucessor</strong> é <strong>$sucessor</strong>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar á pagina anterior</a></p>
    </main>
    
</body>
</html>