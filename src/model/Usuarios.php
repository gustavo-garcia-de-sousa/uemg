<?php

class Usuarios
{
    private ?int $id;
    private string $nome;
    private string $mail;
    private string $cpf;
    private string $nascimento;
    private string $cep;
    private string $rua;
    private string $numero;
    private string $complemento;
    private string $bairro;
    private string $cidade;
    private string $estado;

    public function __construct(
        ?int $id,
        string $nome,
        string $mail,
        string $cpf,
        string $nascimento,
        string $cep,
        string $rua,
        string $numero,
        string $complemento,
        string $bairro,
        string $cidade,
        string $estado
    ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->mail = $mail;
        $this->cpf = $cpf;
        $this->nascimento = $nascimento;
        $this->cep = $cep;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->complemento = $complemento;
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

    public function rua()
    {
        return $this->rua;
    }

    public function numero()
    {
        return $this->numero;
    }

    public function complemento()
    {
        return $this->complemento;
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

    /**
     * Get the value of nascimento
     */
    public function getNascimento()
    {
        return $this->nascimento;
    }
}
