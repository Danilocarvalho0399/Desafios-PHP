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
    $numero = $_POST["num"] ?? 1;
    ?>
    <main>
        <h1 style='text-align:center'>Informe um número</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2 style='text-align:center'>Resultado Final</h2>
        <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);
            
            echo "<p>Analisando o número: <strong>$numero</strong>, temos:</p>";
            echo "<p>A sua raíz quadrada é <strong>".number_format($rq, 2, ",", ".")."</p></strong>";
            echo "<p>A sua raíz cúbica é: <strong>".number_format($rc, 2, ",", ".")."</p></strong>";
        ?>
    </section>




</body>

</html>