<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tabuada</h1>
    </header>
    <main>
        <h1>Escolha um numero para a Tabuada</h1>
        <form action="cad.php" method="get">
            <label for="number">Escolha o numero da Tabuada</label>
            <select name="num" id="numId">
                <?php
                    for ($i=1; $i <=7 ; $i++) {
                        echo "<option>$i</option>";
                    }
                ?>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>