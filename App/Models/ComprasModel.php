<?php

namespace App\Models;

final class ComprasModel {
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $nomeComp;
    /**
     * @var string
     */
    private $usuario;
    /**
     * @var string
     */
    private $valor;

    /**
     * @return string
     */
    private $parcela;

    /**
     * @return string
     */
    private $cartao;

    /**
     * @return string
     */
    private $mes;

    /**
     * @return string
     */
    private $ano;

    /**
     * @return int
     */
    private $dtPagamento;

    /**
     * @return string
     */
    private $quemCadastrou;

    /**
     * @return string
     */
    //het Id
    public function getId(): int {
        return $this->id;
    }
    //GETERS E SETERS

    //NOME DA COMPRA
    public function getNome(): string {
        return $this->nomeComp;
    }
    public function setNome(string $nomeComp): ComprasModel {
        $this->nomeComp = $nomeComp;
        return $this;
    }
    //USUARIO
    public function getUser(): string {
        return $this->usuario;
    }
    public function setUser(string $usuario): ComprasModel {
        $this->usuario = $usuario;
        return $this;        
    }
    //VALOR
    public function getValor(): string {
        return $this->valor;
    }
    public function setValor(string $valor): ComprasModel {
        $this->valor = $valor;
        return $this;
    }
    //PARCELA
    public function getParcela(): string {
        return $this->parcela;
    }
    public function setParcela(string $parcela): ComprasModel {
        $this->parcela = $parcela;
        return $this;
    }
    //CARTÃO
    public function getCartao(): string {
        return $this->cartao;
    }
    public function setCartao(string $cartao): ComprasModel {
        $this->cartao = $cartao;
        return $this;
    }
    //MÊS
    public function getMes(): string {
        return $this->mes;
    }
    public function setMes(string $mes): ComprasModel {
        $this->mes = $mes;
        return $this;
    }
    //ANO
    public function getAno(): string {
        return $this->ano;
    }
    public function setAno(string $ano): ComprasModel {
        $this->ano = $ano;
        return $this;
    }
    //DATA DO PAGAMENTO
    public function getDtPagamento(): string {
        return $this->dt_pagamento;
    }
    public function setDtPagamento(string $dtPagamento): ComprasModel {
        $this->dt_pagamento	 = $dtPagamento;
        return $this;
    }
    //QUEM CADASTROU
    public function getQuemCadastrou(): string {
        return $this->quemCadastrou;
    }
    public function setQuemCadastrou(string $quemCadastrou): ComprasModel {
        $this->quemCadastrou = $quemCadastrou;
        return $this;
    }

}
