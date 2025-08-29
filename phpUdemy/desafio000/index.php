<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <select name="aulas" id="aulas">
                <?php 
                $aulas = ["Matemática", "Geografia", "Portugues", "Ingles", "Historia"];
                for ($i=0; $i < count($aulas); $i++) { 
                ?>
                    <option value="<?= $i ?>"><?= $aulas[$i]?></option>
                    <?php 
                }    
                ?>
                
                
            </select>
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>