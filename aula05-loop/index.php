<!DOCTYPE html>
<html lang="pt-br">
<hedad>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While, Do While, For, Foreach</title>
</hedad>
<body>
    <?php

    //While
    echo "<h1>While</h1><br>";
    $i = 1;
    while ($i <= 5) {
        echo $i . "<br>"; //Imprime o valor de $i e pula para a póxima linha
        $i++;
        }

        echo "<br>";
        $j = 2;
        while ($j <= 10) {
            echo $j . "<br>"; //Imprime os números pares
            $j += 2; //Incrementa de 2 em 2, o mesmo que $j = $j + 2
        }

        //Do While - Faça Enquanto
        echo "<h1>Do While</h1><br>";
        $m = 10;
        do {
            echo $m . "<br>";
            $m++;
        } while ($m <= 5 );


        //For
        echo "<h1>For</h1><br>";
        for ($n = 1; $n <= 5; $n++) {
            echo $n . "<br>";
        }

        echo "<h1>Quadrados</h1><br>";
        for ($p = 1; $p <= 5; $p++){
            echo "O quadrado de $p é " . ($p * $p) . "<br>";
        }

        echo"<h1>Foreach</h1><br>";
        $frutas = ["Maça", "Banana", "Laranja", "Uva"];
        foreach ($frutas as $fruta) {
            echo $fruta . "<br>"; // Imprime o nome de cada fruta
        }

        echo "<br>";
        $idades = [
            "João" => 25,
            "Maria" => 30,
            "Pedro" => 22
        ];

        foreach ($idades as $nome => $idade) {
            echo "$nome tem $idade anos. <br>"; //Exibe nome e idade
        }
        ?>
    </body>
    </html>
