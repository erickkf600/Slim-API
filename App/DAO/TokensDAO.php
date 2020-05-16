<?php

namespace App\DAO;

use App\Models\TokenModel;


class TokensDAO extends Conexao {
   public function __construct() {
        parent::__construct();
    }
    public function createToken(TokenModel $token): void{
        

        //  $stmt = $this->pdo
        //     ->prepare('INSERT INTO tokens
        //         (
        //             token,
        //             refresh_token,
        //             usuarios_id
        //         )
        //         VALUES
        //         (
        //             :token,
        //             :refresh_token,
        //             :usuarios_id
        //         );
        //     ');
        // $stmt->execute([
        //     'token' => $token->getToken(),
        //     'refresh_token' => $token->getRefresh_token(),
        //     'usuarios_id' => $token->getUsuarios_id()
        // ]);
    }

}
