<?php

class Usuarios
{
    private ?int $id;
    private string $nome;
    private string $mail;
    private string $cpf;
    private string $cep;
    private string $logradouro;
    private string $bairro;
    private string $cidade;
    private string $estado;

    public function __construct(
        ?int $id,
        string $nome,
        string $mail,
        string $cpf,
        string $cep,
        string $logradouro,
        string $bairro,
        string $cidade,
        string $estado
    ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->mail = $mail;
        $this->cpf = $cpf;
        $this->cep = $cep;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

    public function id()
    {
        return $this->id;
    }

    public function nome()
    {
        return $this->nome;
    }

    public function mail()
    {
        return $this->mail;
    }

    public function cpf()
    {
        return $this->cpf;
    }

    public function cep()
    {
        return $this->cep;
    }

    public function logradouro()
    {
        return $this->logradouro;
    }

    public function bairro()
    {
        return $this->bairro;
    }

    public function cidade()
    {
        return $this->cidade;
    }

    public function estado()
    {
        return $this->estado;
    }
}
