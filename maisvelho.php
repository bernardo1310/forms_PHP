<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">

</head>
<body>
    <form action="maisvelho.php" method="post">
        <fieldset>
            <legend>Dados Pessoas</legend>
            <input type="text" name="nome1" placeholder="Digite seu nome"/>
            <input type="text" name="idade2" placeholder="Digite sua idade"/>
        </fieldset>
        <fieldset>
            <legend>Dados Pessoas</legend>
            <input type="text" name="nome1" placeholder="Digite seu nome"/>
            <input type="text" name="idade2" placeholder="Digite sua idade"/>
        </fieldset>
        <fieldset>
            <legend>Dados Pessoas</legend>
            <input type="text" name="nome1" placeholder="Digite seu nome"/>
            <input type="text" name="idade2" placeholder="Digite sua idade"/>
        </fieldset>
        <fieldset>
            <button type="reset">Limpar</button>
            <button type="salvar">Salvar</button>
        </fieldset>
    </form>

    <?php
    $idadevelha = $idade1;
    $maisvelho = $nome1; 

    if(($_POST["idade2"]) > $idadevelha) {
        $maisvelho = $_POST["nome2"];
        $idadevelha = $_POST("idade2");
    } elseif(($_POST["idade3"]) > $idadevelha) {
        $maisvelho = $_POST["nome3"];
        $idadevelha = $_POST("idade3");
    }
    echo "<h2>".$maisvelho."</h2>";
    ?>
</body>
</html>