<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores</h1>
    <?php
    //operadores aritméticos
    $a = 5;
    $b = 3;
    $soma = $a + $b;
    $subtracao = 4 - 2;
    $multiplicacao = 4 * 3;
    $potenciacao = 2 ** 2;
    $divisao = $a / $b;
    $restodivisao = $a % $b;
    echo "Resultado da soma é $soma <br>";
    echo "Resultado da subtração é $subtracao <br>";
    echo "Resultado da multiplicação é $multiplicacao <br>";
    echo "Resultado da potenciação é $potenciacao <br>";
    echo "Resultado da divisão é $divisao <br>";
    echo "Resultado do resto da divisão de $a e $b é $restodivisao <br>";
     //Operadores de atribuição
    $rua = "Rua Amador Bueno";
    $rua .= " na Cidade de São Paulo";

    $preco = 2.45;
    $preco += 2.30;
    $preco -= 1.30;

    // Formata o número para usar virgula como separador decimal
    $preco_formatado = number_format($preco, 2, ',', '.');

    // Exibe o resultado
    echo "$rua, <br> Preço R$ $preco_formatado <br>";

    //Operadores de Comparação
    $c = 10;
    $d = "10";

    echo"<br> <h1> Comparação de igualdade </h1>";
    echo($c == $d) ? "São iguais." : "Não são iguais.";
    echo "<br>";
    echo($c === $d) ? "São estritamente iguais." : "Não são estritamente iguais.";
    
    echo"<br> <h1> Comparação de diferença </h1>";
    echo($c == $d) ? "São iguais." : "Não são diferentes.";
    echo "<br>";
    echo($c === $d) ? "São estritamente diferentes." : "Não são estritamente diferentes";
    
    $teste = false;
    echo"<br> <h1> Negação </h1>";
    echo(!$teste) ? "É verdadeiro." : "É falso.";

    $e = 5;
    $f = 3;
    echo"<br> <h1> Maior que e Menor que </h1>";
    echo($e > $f) ? "E é maior que F." : "E não é maior que F.";
    echo"<br>";
    echo($e < $f) ? "E é menor que F." : "E não é menor que F.";

    $h = 4;
    $i = 4;
    $j = 2;
    echo"<br> <h1> Maior ou Igual a, Menor ou Igual a </h1>";
    echo($h >= $i) ? "H é maior ou igual a I" : "H não é maior ou igual a I";
    echo "<br>";
    echo($i <= $j) ? "I é menor ou igual a J" : "I não é menor ou igual a J";

    //Operadores Lógicos
    $idade = 20;
    $tem_cnh = true;

    echo"<br> <h1> Operadores Lógicos </h1>";
    echo($idade >= 18 and $tem_cnh) ? "Você pode dirigir." : "Você não pode dirigir.";

    echo "<br>";

    $tem_ingresso = false;
    $tem_convitevip = true;

    echo($tem_ingresso or $tem_convitevip) ? "Você pode entrar na festa." : "Você não pode entrar na festa.";
    echo "<br>";

    //&& para and e || para or
    $sol = true;
    $sem_chuva = false;
    $feriado = true;

    echo($sol && $sem_chuva || $feriado) ? "Você pode sair para passear." : "Melhor ficar em casa";

    ?>
</body>
</html>
