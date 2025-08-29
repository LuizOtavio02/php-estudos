<?php 
class Pessoa
{
    protected string $name;
    protected int $idade;


    public function __construct(string $name, int $idade) {
        $this->name = $name;
        $this->idade = $idade;
    }

    public function apresentar()
    {
        return "Olá meu nome é {$this->name} e tenho {$this->idade} anos.";
    }
}

class Aluno extends Pessoa
{
    protected string $curso;

    public function __construct(string $name, int $idade, string $curso)
    {
        parent::__construct($name, $idade);
        $this->curso = $curso;
    }

    public function apresentar()
    {
        return "Olá meu nome é {$this->name} e tenho {$this->idade} anos do curso de {$this->curso}."; 
    }
}

$name = $_GET['nome'];
$idade = $_GET['idade'];
$curso = $_GET['curso'];

$aluno1 = new Aluno($name,$idade,$curso);

echo $aluno1->apresentar();


?>