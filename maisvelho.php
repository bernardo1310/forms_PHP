<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mais Velho</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>
<body>
    <form method="POST">
        <fieldset>
            <legend>Pessoa 1</legend>
            <input type="text" name="nome1" placeholder="Digite seu nome" required />
            <input type="number" name="idade1" placeholder="Digite sua idade" required />
        </fieldset>
        <fieldset>
            <legend>Pessoa 2</legend>
            <input type="text" name="nome2" placeholder="Digite seu nome" required />
            <input type="number" name="idade2" placeholder="Digite sua idade" required />
        </fieldset>
        <fieldset>
            <legend>Pessoa 3</legend>
            <input type="text" name="nome3" placeholder="Digite seu nome" required />
            <input type="number" name="idade3" placeholder="Digite sua idade" required />
        </fieldset>
        <fieldset>
            <button type="reset">Limpar</button>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Coleta os dados
        $nomes = [$_POST["nome1"], $_POST["nome2"], $_POST["nome3"]];
        $idades = [intval($_POST["idade1"]), intval($_POST["idade2"]), intval($_POST["idade3"])];

        // Inicializa como a primeira pessoa
        $indiceMaisVelho = 0;

        // Compara para encontrar o mais velho
        for ($i = 1; $i < 3; $i++) {
            if ($idades[$i] > $idades[$indiceMaisVelho]) {
                $indiceMaisVelho = $i;
            }
        }

        echo "<h2>O mais velho é: <strong>" . htmlspecialchars($nomes[$indiceMaisVelho]) . "</strong></h2>";
    }
    ?>
</body>
</html>
