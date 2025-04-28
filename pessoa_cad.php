<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/mvp.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <?php

    $veio_formulario = isset($_POST["nome"]);

    if($veio_formulario){
        $linha = array();
        $linha['nome'] = $_POST['nome'];
        $linha['idade'] = $_POST['idade'];
        $linha['cpf'] = $_POST['cpf'];
        $linha['rg'] = $_POST['rg'];
        $linha['nome'] = $_POST['nome'];

        $linha['rua'] = $_POST['rua'];
        $linha['numero'] = $_POST['numero'];
        $linha['bairro'] = $_POST['bairro'];
        $linha['cidade'] = $_POST['cidade'];
    }
    ?>
    
    <title>Document</title>
</head>
<body>
    <form action="pessoa_cad.php" method="post">
        <fieldset>
            <legend>Dados Pessoas</legend>
            <input type="text" name="nome" placeholder="Digite seu nome"/>
            <input type="text" name="cpf" placeholder="inclue seu CPF"/>
            <input type="text" name="idade" placeholder="Digite sua idade"/>
            <input type="text" name="rg" placeholder="Informe seu RG"/>
        </fieldset>
        <fieldset>
            <legend>Endereçamento</legend>
            <input type="text" name="rua" placeholder="Digite sua Rua"/>
            <input type="text" name="numero" placeholder="numero da residencia"/>
            <input type="text" name="bairro" placeholder="Digite seu bairro"/>
            <select name="cidade">
                <option value="AUR">Aurora</option>
                <option value="RDS">Rio do Sul</option>
                <option value="ITU">Ituporanga</option>
                <option value="AGL">Agrolandia</option>
            </select>
        </fieldset>
        <fieldset>
            <button type="reset">Limpar</button>
            <button type="salvar">Salvar</button>
        </fieldset>
        <?php
        if($veio_formulario){
            echo "<fieldset>";
            foreach ( $linha as $key => $value) {
                echo "<div>$key:$value</div>";
            }
            echo "</fieldset>";
        }
        ?>
    </form>
</body>
</html>