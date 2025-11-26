<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro PHP</title>
</head>
<body>
    <H2>
    <?php
        echo "Meu primeiro PHP \u{1F600}";

        /*
        Isso é um comentário
        com varias
        linhas
        */

        //Quebra de linha antes do próximo echo
        echo "<br> <br>";

        //Variáveis
        $nome = "Ana";
        $sobrenome = "Cunha";

        //A variável pode ser mudada
        $nome = "Ana Claudia";
        echo "Seja bem-vinda, $nome $sobrenome";

        echo "<br> <br>";

        const time = "Palmeiras";

        echo "Meu time de futebol é " . time;
        echo "<br> <br>";
        echo "Seja bem-vinda, $nome $sobrenome seu time é " . time;

        echo "<br> <br>";

        //Tipos de dados
        $sobrenome2 = "Albuquerque"; //string
        $idade = 45; //int
        $peso = 85.7; //float
        $casado = False; //boolean

        echo "$sobrenome $idade $peso";

        //Método 1: Usando var_dump para exibir o valor do booleano
        var_dump($casado);

        //Método 2: Usando uma conversão para string
        echo ($casado ? "Casado" : "Não é casado");

        echo "<br> <br>";

        //Tipos primitivos
        var_dump($sobrenome);
        echo "<br>";
        var_dump($idade);
        echo "<br>";
        var_dump($peso);
        echo "<br>";

        //Constante e variável dentro de outra variável
        $frase = "Meu time de futebol é " .time;
        $frase2 = "Meu nome é $nome meu sobrenome é $sobrenome";
        echo($frase);
        echo"<br>";
        echo($frase2);

    ?>

    <H2>
        <p>Meu primeiro parágrafo</p>

</body>
</html>