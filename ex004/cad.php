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
            $nome = $_GET["nome"] ?? "";
            $sobrenome = $_GET["sobrenome"] ?? "";

            if ($nome == "" || $sobrenome == "") {
                echo "Seja bem vindo";
            }else{
                echo "<p>É um prazer te conhecer $nome $sobrenome</p>";
            }
        ?>

        <p><a href="javascript:history.go(-1)">Voltar á pagina anterior</a></p>
    </main>
</body>
</html>