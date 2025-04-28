<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <?php 
    $nome = "Bernardo";
    $titulo = "minha pagina";


    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        $titulo = "requisição de dados";
    }
    ?>

</head>
<body>
    <h1><?php echo $nome; ?></h1>
    <form action="variavel.php" method="post">
        <label for="txt_nome">Nome:</label>
        <input type="text" id="txt_nome" name="nome">
        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>