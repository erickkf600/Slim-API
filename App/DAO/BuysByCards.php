<?php

namespace App\DAO;

use App\Models\ComprasModel;

class BuysByCards extends Conexao {
    public function __construct() {
        parent::__construct();
    }
     public function getAllByCard(string $mes, int $ano, string $card) {
        $stmt = $this->pdo->prepare("SELECT * FROM compra WHERE mes = :mes AND cartao = :cartao AND ano = :ano ORDER BY id ASC");
        $stmt->bindParam('mes', $mes);
        $stmt->bindParam('cartao', $card);
        $stmt->bindParam('ano', $ano);
        $stmt->execute();
        $retorno = $stmt->fetchAll(\PDO::FETCH_OBJ);
        if(count($retorno) === 0)
            return null; 
        $compra = new ComprasModel();
        for ($i=0; $i < count($retorno); $i++) { 
             $compra
                 ->setNome($retorno[$i]->nomeComp)
                 ->setUser($retorno[$i]->usuario)
                 ->setValor($retorno[$i]->valor)
                 ->setParcela($retorno[$i]->parcela)
                 ->setCartao($retorno[$i]->cartao)   
                 ->setMes($retorno[$i]->mes)   
                 ->setAno($retorno[$i]->ano)   
                 ->setDtPagamento($retorno[$i]->dt_pagamento)   
                 ->setQuemCadastrou($retorno[$i]->quemCadastrou);
                }
        return $retorno;       
        
    }
}
