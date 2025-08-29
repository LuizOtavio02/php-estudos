<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php 
    $a = 0;
    $b = 0;
    while ($a <= 20) {
        echo $a;
        $a++;
    }

    while ($b <= 15) {
        if ($b == 12) {
            echo "Número válido, posição $b";
        }
        $b++;
    }
    ?>
</body>
</html>