<?php
class ContaBancaria {
    private $titular;
    private $cpf;
    private $email;
    private $telefone;
    private $tipoConta;
    private $numeroConta;
    private $saldo;

    public function __construct($titular, $cpf, $email, $telefone, $tipoConta) {
        $this->titular = $titular;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->tipoConta = $tipoConta;
        $this->numeroConta = $this->gerarNumeroConta();
        $this->saldo = 0.0; 
    }

    private function gerarNumeroConta() {
        return rand(100000, 999999) . "-" . rand(0, 9);
    }

    public function exibirDadosConta() {
        return "
            <h2>Conta Criada!</h2>
            <p><strong>Titular:</strong> {$this->titular}</p>
            <p><strong>CPF:</strong> {$this->cpf}</p>
            <p><strong>Email:</strong> {$this->email}</p>
            <p><strong>Telefone:</strong> {$this->telefone}</p>
            <p><strong>Tipo de Conta:</strong> {$this->tipoConta}</p>
            <p><strong>Número da Conta:</strong> {$this->numeroConta}</p>
            <p><strong>Saldo Inicial:</strong> R$ {$this->saldo}</p>
        ";
    }
}
?>
