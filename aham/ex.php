<?php
class Pessoa {
    private $nome;
    private $idade;

    public function setNome($nome) {
        if (!empty($nome)) {
            $this->nome = $nome;
        } else {
            echo "O nome não pode ser vazio.";
        }
    }

    public function setIdade($idade) {
        if ($idade >= 0 && $idade <= 120) {
            $this->idade = $idade;
        } else {
            echo "A idade não pode ser negativa ou maior que 120.";
        }
    }
}

$p = new Pessoa();
$p->setNome("ANA");
$p->setIdade(25);
?>