<?php

namespace App\DAO;

use App\Models\UsuarioModel;
//use App\Models\ComprasModel;

class UserDataDAO extends Conexao {
   public function __construct() {
        parent::__construct();
    }
    public function getUser(string $user): ?UsuarioModel {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
        $stmt->bindParam(':usuario', $user);
        $stmt->execute();
        $userData = $stmt->fetchAll(\PDO::FETCH_OBJ);  
       if(count($userData) === 0)
            return null;
        $usuario = new UsuarioModel();
        $usuario->setId($userData[0]->id)
        ->setNome($userData[0]->nome)
            ->setStatus($userData[0]->status)
            ->setHora($userData[0]->hora)
            ->setUsuario($userData[0]->usuario)
            ->setSenha($userData[0]->senha);
        return $usuario;
    }

}
