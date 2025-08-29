<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $aula = $_GET["aulas"] ?? "";
            
            switch ($aula) {
                case 0:
                    echo "Sua materia escolhida é Matemática";
                    break;
                case 1:
                    echo "Sua materia escolhida é Geografia";
                    break;
                case 2:
                    echo "Sua materia escolhida é Portugues";
                    break;
                case 3:
                    echo "Sua materia escolhida é Ingles";
                    break;
                case 4:
                    echo "Sua materia escolhida é Historia";
                    break;
                default:
                    echo "vc nao escolheu uma materia";
                    echo "<p><a href=\"javascript:history.go(-1)\">Voltar á pagina anterior</a></p>";
                    break;
            }
        ?>

        <p><a href="javascript:history.go(-1)">Voltar á pagina anterior</a></p>
    </main>
</body>
</html>