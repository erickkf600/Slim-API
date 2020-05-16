<?php

namespace App\DAO;


class ResumeCompras extends Conexao {
    public function __construct() {
        parent::__construct();
    }
      public function getResume(string $mes, int $ano) {
        $stmt = $this->pdo->prepare("SELECT * FROM compra WHERE mes = :mes AND ano = :ano GROUP BY usuario ORDER BY id ASC");
        $stmt->bindParam('mes', $mes);
        $stmt->bindParam('ano', $ano);
        $stmt->execute();
        $retorno = $stmt->fetchAll(\PDO::FETCH_COLUMN, 2);
        for ($i=0; $i < count($retorno); $i++) { 
            $somar = $this->pdo->query("SELECT SUM(valor) FROM compra WHERE usuario = '$retorno[$i]' AND mes = '$mes' and ano = '$ano'");
            $resultado = $somar->fetchColumn();
            $valor = number_format($resultado, 2, ',', '.');
            $resume[] = ["nome" =>  $retorno[$i], "valor" => $valor];
        }
        return $resume;        
    }
}
