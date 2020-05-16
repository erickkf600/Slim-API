<?php

namespace App\DAO;

use App\Models\ComprasModel;
use App\Models\UsuarioModel;

class ComprasDAO extends Conexao {
    public function __construct() {
        parent::__construct();
    }
     public function getAllByUser(string $mes, int $ano) {
        $stmt = $this->pdo->prepare("SELECT * FROM compra WHERE mes = :mes AND ano = :ano ORDER BY id ASC");
        $stmt->bindParam('mes', $mes);
        $stmt->bindParam('ano', $ano);
        $stmt->execute();
        $retorno = $stmt->fetchAll(\PDO::FETCH_OBJ);
        if(count($retorno) === 0)
            return null;
        return $retorno;   
        // $compra = new ComprasModel();
        // while ($retorno = $stmt->fetch(\PDO::FETCH_OBJ)) {
        //     $compra
        //         ->setNome($retorno->nomeComp)
        //         ->setUser($retorno->usuario)
        //         ->setValor($retorno->valor)
        //         ->setParcela($retorno->parcela)
        //         ->setCartao($retorno->cartao)   
        //         ->setMes($retorno->mes)   
        //         ->setAno($retorno->ano)   
        //         ->setDtPagamento($retorno->dt_pagamento)   
        //         ->setQuemCadastrou($retorno->quemCadastrou);
        //     return $compra;  
        // }
      
        // $compra = new ComprasModel();
        // $compra
        //         ->setNome($retorno->nomeComp)
        //         ->setUser($retorno->usuario)
        //         ->setValor($retorno->valor)
        //         ->setParcela($retorno->parcela)
        //         ->setCartao($retorno->cartao)   
        //         ->setMes($retorno->mes)   
        //         ->setAno($retorno->ano)   
        //         ->setDtPagamento($retorno->dt_pagamento)   
        //         ->setQuemCadastrou($retorno->quemCadastrou); 
        
    }
    // public function getUser(string $mes, int $ano) {
    //     $users = $this->pdo->query("SELECT usuario FROM compra WHERE mes = '$mes' AND ano = $ano GROUP BY usuario ORDER BY id ASC"); 
    //     while ($returnAll = $users->fetch(\PDO::FETCH_OBJ)) {
    //         return $returnAll;
    //     }
    // }
    // public function sumTotal(string $usuario): Array {
    //     $somar = $this->query("SELECT SUM(valor) FROM compra WHERE usuario = '$usuario' and mes = '$mes' and ano LIKE '%$ano%'")
    //     ->fetchColumn();
    //     return $somar;
    // }
}
