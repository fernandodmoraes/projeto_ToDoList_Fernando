<?php

class Tarefa
{
    private $id;
    private $status;
    private $nome;
    private $descricao;
    private $dataLimite;
    private $img;

    public function __construct(int $status, string $nome, string $descricao, string $dataLimite, string $img)
    {
       $this->status = $status;
       $this->nome   = $nome;
       $this->descricao = $descricao;
       $this->dataLimite = $dataLimite;
       $this->img = $img;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function setId(int $id) 
    {
        $this->id = $id;
    }

    public function getStatus() 
    {
        return $this->status;
    }

    public function setStatus(int $status) 
    {
        $this->status = $status;
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function setNome(string $nome) 
    {
        $this->nome = $nome;
    }

    public function getDescricao() 
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao) 
    {
        $this->descricao = $descricao;
    }

    public function getDataLimite()
    {
        return $this->dataLimite;
    }

    public function setDataLimite(string $dataLimite) 
    {
       $this->dataLimite = $dataLimite;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg(string $img) 
    {
       $this->img = $img;
    }

    public function legenda()
    {
        if ($this->getStatus()) {
            return 'Em Aberto';
        }
        return 'Encerrado';
    }

}