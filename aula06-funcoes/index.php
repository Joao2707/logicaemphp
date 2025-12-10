
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
    function saudacao() {
        echo "Olá, boas-vindas ao PHP!";
    }

    saudacao(); //Chamando a função
    echo"<br>";
    function somar($a, $b) {
        return $a + $b;
    }

    $resultado = somar(5, 3); //Chamando a função e pessando os argumentos
    echo "Resultado da soma? " . $resultado;

    echo "<br>";
    function saudacaoPersonalizada($nome = "Visitante") {
        echo "Olá, $nome! Boas-vindas ao nosso site!";
    }

    saudacaoPersonalizada(); //Chamada sem argumento, usa o valor padrão
    echo "<br>";
    saudacaoPersonalizada("Carlos"); //Chamada com argumento
   
    echo "<br>";
    function encontradaMaiorValor($m) {
        return max($m); //função max() encontra o maior valor mo array
    }

    $valores = [2, 5, 9, 1, 3];
    echo "O maior valor é: " . encontradaMaiorValor($valores);
   ?>
</body>
</html>