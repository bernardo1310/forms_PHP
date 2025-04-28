<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <?php
    $numero =0;
    $resultado =0;
    $mensagem = "-----------------------";
    if(isset($_POST["numero"])){
        $numero = $_POST['numero'];
        $resultado = $numero % 2;
    }
    if($resultado==0){
        $mensagem = "par";
    } else {
        $mensagem = "impar";
    }
    ?>
</head>
<body>
    <form action="par_impar.php" method="post">
        <fieldset>
            <label for="txt_numero">
                Número
                <input type="number" name="numero" id="txt_numero" min="0" max="100" placeholder="Digite um Número"> 
                <button type="reset">Limpar</button>
                <button type="submit">Enviar</button>
                <span><?php echo $mensagem; ?></span>
            </label>
            </br>
        </fieldset>
    </form>
</body>
</html>