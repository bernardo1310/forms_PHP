<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/mvp.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Document</title>
    <?php
function getSigno($dia, $mes) {
    $signos = [
        ['Capricórnio', 20], ['Aquário', 19], ['Peixes', 20],
        ['Áries', 20], ['Touro', 20], ['Gêmeos', 20],
        ['Câncer', 21], ['Leão', 22], ['Virgem', 22],
        ['Libra', 22], ['Escorpião', 21], ['Sagitário', 21], ['Capricórnio', 31]
    ];

    if ($dia <= $signos[$mes - 1][1]) {
        return $signos[$mes - 1][0];
    } else {
        return $signos[$mes][0];
    }
}

function getAscendente($hora) {
    // Isso é só uma estimativa grosseira baseada na hora
    $ascendentes = [
        'Áries', 'Touro', 'Gêmeos', 'Câncer', 'Leão', 'Virgem',
        'Libra', 'Escorpião', 'Sagitário', 'Capricórnio', 'Aquário', 'Peixes'
    ];
    $index = floor($hora / 2) % 12;
    return $ascendentes[$index];
}

function getHoroscopo($signo) {
    $horoscopos = [
        'Áries' => 'Hoje é um bom dia para tomar iniciativa!',
        'Touro' => 'Evite teimosia, pense no coletivo.',
        'Gêmeos' => 'Comunique-se com clareza e ouça mais.',
        'Câncer' => 'Seja gentil consigo mesmo.',
        'Leão' => 'Seu brilho pessoal atrairá boas energias.',
        'Virgem' => 'Organize suas ideias antes de agir.',
        'Libra' => 'Busque equilíbrio nas relações.',
        'Escorpião' => 'Momento de transformação interior.',
        'Sagitário' => 'Explore novos horizontes.',
        'Capricórnio' => 'Foco nos seus objetivos!',
        'Aquário' => 'Inove e compartilhe ideias.',
        'Peixes' => 'Confie na sua intuição.',
    ];
    return $horoscopos[$signo] ?? 'Tenha um bom dia!';
}
?>
<body>
    <h2>Informe sua data de nascimento</h2>
    <form method="POST">
        Data de Nascimento: <input type="date" name="data" required><br><br>
        Hora de nascimento (0-23): <input type="number" name="hora" min="0" max="23" required><br><br>
        <input type="submit" value="Descobrir Signo e Horóscopo">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = $_POST['data'];
        $hora = intval($_POST['hora']);

        if ($data && $hora >= 0 && $hora <= 23) {
            $partes = explode('-', $data);
            $ano = $partes[0];
            $mes = intval($partes[1]);
            $dia = intval($partes[2]);

            $signo = getSigno($dia, $mes);
            $ascendente = getAscendente($hora);
            $horoscopo = getHoroscopo($signo);

            echo "<h3>Resultados</h3>";
            echo "Signo: <strong>$signo</strong><br>";
            echo "Ascendente (estimado): <strong>$ascendente</strong><br>";
            echo "Horóscopo de hoje: <em>$horoscopo</em><br>";
        } else {
            echo "<p style='color:red;'>Preencha corretamente a data e hora.</p>";
        }
    }
    ?>
</body>
</html>
