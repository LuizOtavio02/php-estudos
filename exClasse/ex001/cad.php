<?php 
$marca = $_GET['marca'];
$modelo = $_GET['modelo'];
$ano = $_GET['ano'];

class Carro {
    protected string $marca, $modelo;
    protected int $ano;

    public function __construct(string $marca, string $modelo, int $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirInfo():string
    {
        return "Carro da Marca:{$this->marca} do Modelo: {$this->modelo} do Ano: {$this->ano}";
    }
}

$carro1 = new Carro($marca, $modelo,$ano);

print_r($carro1->exibirInfo());

?>