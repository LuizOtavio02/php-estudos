<?php 
interface TransporteInterface
{
    public function acelerar();
    public function frear();
}

class Carro implements TransporteInterface
{
    protected int $velocidade;
    protected string $modelo;

    public function acelerar()
    {
        echo "Carro acelera";
    }

    public function frear()
    {
        echo "carro freia";
    }

}




?>