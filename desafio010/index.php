<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $preco = $_POST["preco"] ?? "0";
    $reaj  = $_POST["reaj"] ?? "0";

    ?>

    <main>
        <h1 style='text-align:center'>Reajustador de Preços</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?= $preco ?>">

            <label for="reaj">Qual o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">

            <input type="submit" value="Reajustar">

        </form>
    </main>
    <?php
        $aumento = $preco * $reaj / 100;

        $novo = $preco + $aumento;
    ?>


    <section>
        <h2 style='text-align:center'>Resultado do Reajuste</h2>
        <?php echo "<p>O produto que custava R$ $preco com <strong> $reaj de aumento </strong> vai passar a custar <strong> R$ $novo </strong> a partir de agora.</p>"?>

    </section>

    <script>
        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>

</body>

</html>