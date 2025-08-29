<?php 
abstract class Pessoa
{
    protected string $name;
    protected int $age;
    public static $quantidadePessoas = 0;
    public const ESCOLA = 'FATEC';

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
        static::$quantidadePessoas++;
    }

    abstract public function apresentar();
}

class Aluno extends Pessoa
{
    private string $curso;

    public function __construct(string $name, int $age, string $curso) {
        parent::__construct($name, $age);
        $this->curso = $curso;
    }

    public function apresentar()
    {
        return "Olá, meu nome é {$this->name}, tenho {$this->age} anos, estudo {$this->curso} na " . parent::ESCOLA;
    }

}

class Professor extends Pessoa
{
    private string $materia;

    public function __construct(string $name, int $age, string $materia) {
        parent::__construct($name, $age);
        $this->materia = $materia;
    }

    public function apresentar()
    {
        return "Olá, meu nome é {$this->name}, tenho {$this->age} anos, leciono {$this->materia} na escola " . parent::ESCOLA;
    }
}

$a1 = new Aluno("Lucas", 22, "ADS");
$a2 = new Aluno("Maria", 21, "Engenharia");
$p1 = new Professor("João", 40, "Matemática");

echo $a1->apresentar() . '<br>';
echo $a2->apresentar() . '<br>';
echo $p1->apresentar() . '<br>';

echo "Quantidade total de pessoas cadastradas: " . Pessoa::$quantidadePessoas;


?>