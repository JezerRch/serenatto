<?php

class Produto
{
    private int $id;
    private string $tipo;
    private string $nome;
    private string $descricao;
    private string $imagem;
    private float $preco;

    // Construtor
    public function __construct(
        int $id,
        string $tipo,
        string $nome,
        string $descricao,
        string $imagem,
        float $preco
    ) {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
        $this->preco = $preco;
    }

    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    // Setters
    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function setImagem(string $imagem): void
    {
        $this->imagem = $imagem;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function getPrecoFormatado(): string
    {
        return "R$ " . number_format($this->preco, 2);
    }

    public function getImagemDiretorio(): string
    {
        return "img/" . $this->imagem;;
    }

    // Representação em string
    public function __toString(): string
    {
        return "ID: {$this->id}, Tipo: {$this->tipo}, Nome: {$this->nome}, Descrição: {$this->descricao}, Imagem: {$this->imagem}, Preço: {$this->preco}";
    }
}
