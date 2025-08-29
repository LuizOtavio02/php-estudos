<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da semana</title>
</head>
<body>
    <?php 
        $dia = $_GET['num'];

        switch ($dia) {
            case 1:
                echo "Segunda-Feira";
                break;
            case 2:
                echo "Terça-Feira";
                break;
            case 3:
                echo "Quarta-Feira";
                break;
            case 4:
                echo "Quinta-Feira";
                break;
            case 5:
                echo "Sexta-Feira";
                break;
            case 6:
                echo "Sábado";
                break;
            case 7:
                echo "Domingo";
                break;
            default:
                # code...
                break;
        }
    ?>
</body>
</html>