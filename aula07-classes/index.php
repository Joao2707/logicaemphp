<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Declarando uma nova classe
    class Carro {
        //Atributos e visibilidade
        public $marca;
        public $modelo;
        public $ano;

        //Método (Função dentro da classe)
        public function exibirDetalhes() {
            echo "Marca: " . $this->marca . "<br>";
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Ano: " . $this->ano . "<br>";
        }
    }

    //Objeto (instância)
    $meuCarro = new Carro();
    $meuCarro->marca = "Toyota";
    $meuCarro->modelo = "Corolla";
    $meuCarro->ano = 2023;

    //Chamar a função para exibir os detalhes do carro
    $meuCarro->exibirDetalhes();

    //Instanciando novo carro
    $meuNovoCarro = new Carro();
    $meuNovoCarro->marca = "BMW";
    $meuNovoCarro->modelo="320i";
    $meuNovoCarro->ano = 2025;

    //Exibindo a função para a novo objeto
    $meuNovoCarro->exibirDetalhes();

    class Pessoa{
        //Atributos (propriedades)
        public $nome;
        public $idade;

        //Método
        public function saudacao() {
            echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.<br>";
        }
    }

    //Instanciando uma nova pessoa
    $joao = new Pessoa();
    $joao->nome = "João";
    $joao->idade = 30;

    //Exibe a saudação com os dados de João
    $joao->saudacao();

    ?>
</body>
</html>