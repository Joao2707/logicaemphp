<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Exercícios com laço for  -->
    <?php
    $numero = 8;

    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }
    
    $soma = 0;

    for ($i = 1; $i <= 10; $i++) {
        echo "Digite o $i º número: ";
        $numero = (int) $_POST;
        $soma += $numero;
    }

    $media = $soma / 10;

    echo "A média dos números é: " . $media;
     ?>
</body>

    
</html>