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
    <form action="mdc.php" method="post">
        <fieldset>
            <h1>Informe os valores:</h1>
            <input type="number" name="a" min="1" placeholder="Digite o primeiro valor">     
            <input type="number" name="b" min="1" placeholder="Digite o segundo valor"> 
            <button type="submit">Enviar</button>
        </fieldset>
    </form>
    <?php
    function mdc_iterativo($a, $b): mixed {
    while($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
    }
    if(isset($_POST["a"]) && isset($_POST["b"])) {
        $num1 = $_POST["a"];
        $num2 = $_POST["b"];
    }

    $mdc = mdc_iterativo(a: $num1, b: $num2);
    echo "<h2>O MDC de " . $num1 . " e " . $num2 . " é: " . $mdc."</h2>";
    ?>
</body>
</html>