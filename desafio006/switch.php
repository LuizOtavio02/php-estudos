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
            $numTwo = $_GET["numberTwo"] ?? 0;
            $radio = $_GET["oper"];

            switch ($radio) {
                case 1:
                    echo "Sua conta de $num + $numTwo é " . $num + $numTwo;
                    break;
                case 2:
                    echo "Sua conta de $num - $numTwo é " . $num - $numTwo;
                    break;
                case 3:
                    echo "Sua conta de $num x $numTwo é " . $num * $numTwo;
                    break;
                case 4:
                    echo "Sua conta de $num / $numTwo é " . $num / $numTwo;
                    break;
                default:
                    echo "Ocorreu Algum erro!! Não podemos realizar a conta";
                    break;
            }
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>