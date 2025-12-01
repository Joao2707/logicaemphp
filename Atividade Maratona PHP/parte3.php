<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Atividade 3 - Empréstimo Bancário</h2>
    <?php
    // Função para calcular o valor da parcela do empréstimo
    function calcularParcela($valorEmprestimo, $taxaJuros, $numeroParcelas) {
        // Calcula o valor total do empréstimo com juros
        $valorTotal = $valorEmprestimo * (1 + $taxaJuros);

        // Calcula o valor da parcela
        $valorParcela = $valorTotal / $numeroParcelas;

        return $valorParcela;
    }

    // Exemplo de uso
    $valorEmprestimo = 10000; // Valor do empréstimo
    $taxaJuros = 0.10; // Taxa de juros (10%)
    $numeroParcelas = 12; // Número de parcelas

    // Calcula o valor da parcela
    $valorParcela = calcularParcela($valorEmprestimo, $taxaJuros, $numeroParcelas);

    // Exibe o resultado
    echo "O valor da parcela do empréstimo é: R$ " . number_format($valorParcela, 2, ',', '.');
    ?>

    
    
</body>
</html>