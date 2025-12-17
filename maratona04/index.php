<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $senhaCorreta = "1234";
    $tentativas = 0;
    $maxTentativas = 3;

    do {
        $senha = readLine("Digite a senha: ");
        $tentativas++;

        if ($senha == $senhaCorreta) {
            echo "✅Login realizado com sucesso!\n";
            break;
        } else {
            echo "<br>";
            echo "❌Senha incorreta. Tentativa $tentativas de $maxTentativas.\n";
        }

    } While ($tentativas < $maxTentativas);
    
    if ($tentativas == $maxTentativas && $senha != $senhaCorreta) {
        echo "<br>";
        echo "🚫Número máximo de tentativas atingido.\n";
    }
        echo "<br>"
    ?>
</body>
    <?php
    $estoque = 100;

    while ($estoque > 0) {
        echo "<br>";
        echo "Venda realizada. Estoque restante: $estoque <br>";
        $estoque--;
    }
    echo "<br>";
    echo "Estoque zerado!";

    ?>

</html>

 <?php
 
    echo"<h2>Sistema de altentificação dos funcionarios \u{1F465}</h2>";
 
// Defina as variáveis de estado do funcionário
$temPermissao = 1234;
$cadastroAtivo = 123;
$isAdmin = false;
 
// Implemente a lógica com operadores lógicos
if (($temPermissao && $cadastroAtivo) || $isAdmin) {
    $statusAcesso = "Acesso concedido.";
} else {
    $statusAcesso = "Acesso negado.";
}
 
// Exiba o resultado
echo $statusAcesso;
 
  //variavel para calcular imposto com desconto
 
echo"<h2>cálculo de imposto com desconto\u{1F4B0}</h2>";
 
 
 
/**
 * Calcula o valor final de uma compra com desconto e imposto.
 *
 * @param float $valorOriginal O valor original da compra.
 * @return float O valor final calculado.
 */
function calcularValorFinal($valorOriginal) {
    $desconto = 0;
    // Aplica 10% de desconto se o valor for maior que R$500,00
    if ($valorOriginal > 500.00) {
        $desconto = $valorOriginal * 0.10;
    }
   
    // Calcula o imposto de 8% sobre o valor original
    $imposto = $valorOriginal * 0.08;
   
    // A fórmula é: (Valor Original - Desconto) + Imposto
    $valorFinal = ($valorOriginal - $desconto) + $imposto;
   
    return $valorFinal;
}
 
// --- Exemplos de uso ---
 
$compra1 = 600.00; // Deve ter desconto e imposto
$valorFinal1 = calcularValorFinal($compra1);
echo "Valor original: R$ " . number_format($compra1, 2, ',', '.') . "\n";
echo "Valor final (com desconto): R$ " . number_format($valorFinal1, 2, ',', '.') . "\n";
echo "Esperado: R$ 648,00\n"; // (600 - 60) + 48
 
echo "\n";
 
$compra2 = 400.00; // Não deve ter desconto, apenas imposto
$valorFinal2 = calcularValorFinal($compra2);
echo "Valor original: R$ " . number_format($compra2, 2, ',', '.') . "\n";
echo "Valor final (sem desconto): R$ " . number_format($valorFinal2, 2, ',', '.') . "\n";
echo "Esperado: R$ 432,00\n"; // 400 + 32
 
//variavel para calcular preço com taxa de entrega
 
echo"<h2>cálcular preço com taxa de entrega&#128184</h2>";
 
 
function calcular_valor_final_compra($valor_original) {
    // Definindo as taxas e descontos
    $taxa_entrega = 0.15;
    $desconto = 0.20;
    $limite_desconto = 1000.00;
 
    // 1. Calcular o valor com a taxa de entrega
    $valor_com_taxa = $valor_original + ($valor_original * $taxa_entrega);
 
    // 2. Verificar se o valor original da compra é superior a R$1000,00 para aplicar o desconto
    if ($valor_original > $limite_desconto) {
        $valor_final = $valor_com_taxa - ($valor_com_taxa * $desconto);
    } else {
        // Caso contrário, o valor final é apenas o valor com a taxa
        $valor_final = $valor_com_taxa;
    }
 
    // Retorna o valor final formatado para duas casas decimais
    return number_format($valor_final, 2, ',', '.');
}
 
// --- Exemplos de Uso ---
 
// Exemplo 1: Valor abaixo de R$1000,00 (sem desconto)
$valor1 = 500.00;
echo "Valor original: R$ " . number_format($valor1, 2, ',', '.') . "\n";
echo "Valor final (sem desconto): R$ " . calcular_valor_final_compra($valor1) . "\n";
 
echo "\n";
 
// Exemplo 2: Valor acima de R$1000,00 (com desconto)
$valor2 = 1200.00;
echo "Valor original: R$ " . number_format($valor2, 2, ',', '.') . "\n";
echo "Valor final (com desconto): R$ " . calcular_valor_final_compra($valor2) . "\n";
 
 
?>

