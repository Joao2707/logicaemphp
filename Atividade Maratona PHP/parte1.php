<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Atividade 1 - Saudação com nome</h2>
    <?php
        // Declarar a variável com o nome da pessoa
        $nome = "João";
        $nome1 = "Marcelo";

        // Exemplo usando concatenação
        $saudacao_concatenacao = "Olá, . $nome e $nome1 . ! Bem-vindo ao nosso site!";

        // Exemplo usando interpolação
        $saudacao_interpolacao = "Olá, $nome e $nome1! Fiquem á vontade para explorar nosso site!";
        
        // Exibir os resultados
        echo $saudacao_concatenacao . "<br>";
        echo $saudacao_interpolacao;

    ?>
</body>
</html>