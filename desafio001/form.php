<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado Final</h1>
    </header>

    <section>
        <?php
        $numero = $_GET["numero"];
        echo "O número escolhido é: $numero</br>";
        echo "<br>O seu antecessor é: " . $numero - 1;
        echo "<br>O seu sucessor é: " . $numero + 1;
        ?>

        <button onClick="javascript:history.go(-1)"> Voltar </button>

    </section>

</body>

</html>