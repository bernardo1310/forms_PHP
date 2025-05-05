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
    <h2>Calcular o Máximo Divisor Comum (MDC)</h2>
    <form method="POST">
        Número 1: <input type="number" name="num1" required><br><br>
        Número 2: <input type="number" name="num2" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    function calcularMDC($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return abs($a); // Garante resultado positivo
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);

        $mdc = calcularMDC($num1, $num2);

        echo "<h3>Resultado:</h3>";
        echo "O Máximo Divisor Comum de $num1 e $num2 é: <strong>$mdc</strong>";
    }
    ?>
</body>
</html>
