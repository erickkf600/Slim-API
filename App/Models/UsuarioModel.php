<?php

namespace App\Models;

final class UsuarioModel
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $nome;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $hora;
    /**
     * @var string
     */
    private $usuario;
    /**
     * @var string
     */
    private $senha;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }
    //NOME
    public function getNome(): string {
        return $this->nome;
    }
    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    //STATUS
    public function getStatus(): string {
        return $this->status;
    }


    public function setStatus(string $status): self {
        $this->status = $status;
        return $this;
    }

    //STATUS
    public function getHora(): string {
        return $this->hora;
    }


    public function setHora(string $hora): self {
        $this->hora = $hora;
        return $this;
    }

    //USUARIO
     public function getUsuario(): string {
        return $this->usuario;
    }
    public function setUsuario(string $usuario): self {
        $this->usuario = $usuario;
        return $this;
    }

    //SENHA
    public function getSenha(): string {
        return $this->senha;
    }

    public function setSenha(string $senha): self {
        $this->senha = $senha;
        return $this;
    }
}
