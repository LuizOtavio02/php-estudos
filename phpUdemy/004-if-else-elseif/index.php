<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $usu = "Luiz";
        $idade = 16;

        if($idade >= 18){
            echo "Olá $usu, voce pode participar do projeto";
        }else{
            echo "Olá $usu, voce não pode participar do projeto";
        }

        $sal = 3000;
        
        if ($sal <= 1200) {
            echo $sal - 300;
        }elseif ($sal > 1200 && $sal <= 1600) {
            echo $sal - 250;
        }else{
            echo $sal - 200;
        }
    ?>
</body>
</html>