<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $ano_nascimento = $_POST["a"] ?? "2025";
    $ano = $_POST["i"] ?? "2024";
    ?>
    
    <section>
        <h1 style='text-align:center'>Calculando a sua Idade</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="a">Em que ano você nasceu?</label>
            <input type="number" name="a" id="a" value="<?=$ano_nascimento?>" required max="2025">
            <label for="i">Quer saber sua idade em qual ano?</label>
            <input type="number" name="i" id="i" value="<?=$ano?>" required min="2024">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </section>
    <?php
    $idade_resultado = ($ano - $ano_nascimento);
    ?>
    <main>
            <h2 style='text-align:center'>Resultado</h2>
        <?php 

            echo "<h2>Quem nasceu em <strong> $ano_nascimento </strong> vai ter $idade_resultado Anos em $ano!</h2>"
        ?>
    </main>

</body>

</html>