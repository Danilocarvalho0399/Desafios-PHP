<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Sorteador de números</h1>
    </header>
    <main>
        <p>Sorteador de números aleatórios de 0 a 100</p>
        <?php
        $numero_sorteado = mt_rand(0, 100);
        echo "O número sorteado foi: $numero_sorteado";
        ?>
        <button onclick="javascript:document.location.reload()">Sortear</button>
    </main>
</body>

</html>