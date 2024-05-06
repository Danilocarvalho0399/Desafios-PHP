    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 03</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1>Conversor de Dólar</h1>
        </header>
        <section>
            <?php
            $carteira = $_POST["valor"];

            $cotacao = 5.12;

            $cambio = $carteira / $cotacao;

            echo "Seus R$ $carteira equivalem a R$ $cambio em Dólar"
            ?>
            <p>A cotação do Dólar está R$ 5,12</p>
            <button onClick="javascript:history.go(-1)"> Voltar </button>
        </section>


    </body>

    </html>