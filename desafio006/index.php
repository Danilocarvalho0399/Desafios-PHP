<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $minimo = 1412;
    $salario = $_POST['sal'] ?? 0;

    ?>
    <main>
        <h1 style='text-align:center'>Informe seu Salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="sal">Salário (R$)</label>
            <input type= "number" name="sal" id="sal" value="<?= $salario ?>" step="0.01">
            <p>Considerando o salário mínimo de R$ <strong><?= number_format($minimo, 2, ",", ".") ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        $tot = intdiv($salario, $minimo);
        $dif = $salario % $minimo;

        echo "<p>Quem recebe um salário de <strong>R$ " . number_format($salario, 2, ",", ".")."</strong> ganha $tot salários minimos + <strong>R$". number_format($dif, 2, ",", ".") . "</strong> </p>";
        ?>

    </section>
</body>

</html>