<?php

namespace App\DAO;

use App\Models\ComprasModel;
use App\Models\UsuarioModel;

class ComprasDAO extends Conexao {
    public function __construct() {
        parent::__construct();
    }
     public function getAllByUser(string $mes, int $ano, string $user) {
        $stmt = $this->pdo->prepare("SELECT * FROM compra WHERE mes = :mes AND usuario = :user AND ano = :ano ORDER BY id ASC");
        $stmt->bindParam('mes', $mes);
        $stmt->bindParam('user', $user);
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
