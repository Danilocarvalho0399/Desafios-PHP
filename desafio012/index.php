<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;   
        }
    </style>
</head>
    <?php 
        $saque = $_POST["saque"] ?? 0;
    ?>
<body>
    <main>
        <h1 style='text-align:center'>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">

            <p style="font-size: 0.7em"><sup>*</sup>Notas Disponíveis: R$100, R$50, R$10 e R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $resto = $saque;

        $tot100 = floor($resto / 100);
        $resto %= 100;

        $tot5 = floor($resto / 50);
        $resto %= 50;
        
        $tot10 = floor($resto / 10);
        $resto %= 10;

        $tot50 = floor($resto / 5);
        $resto %= 5;
    ?>
    <section>
        <h2>Saque de R$ <?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai entregar as seguintes notas:</p>

        <ul>
            <li><img src="./imagem/100-reais.jpg" alt="" class="nota"> x<?=$tot100?></li>

            <li><img src="./imagem/50-reais.jpg" alt="" class="nota"> x<?=$tot50?></li>

            <li><img src="./imagem/10-reais.jpg" alt="" class="nota"> x<?=$tot10?></li>

            <li><img src="./imagem/5-reais.jpg" alt="" class="nota"> x<?=$tot5?></li>
        </ul>
    </section>
</body>

</html>