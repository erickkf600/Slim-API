<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\UserDataDAO;
use Firebase\JWT\JWT;
use App\DAO\TokensDAO;
use App\Models\TokenModel;

final class AuthController{
    public function login(Request $request, Response $response, array $args): Response{
        $data = $request->getParsedBody();
        $user = $data['usuario'];
        $senha = $data['senha'];
        $UserDataDAO = new UserDataDAO();
        $usuario = $UserDataDAO->getUser($user);
        if(empty($user) or empty($senha)){
            $message = 'USÚARIO INVALIDO';
            return $response->withStatus(401)->withHeader('Content-Type', 'application/json')->withJson($message);
        }
    
        if(!password_verify($senha, $usuario-> getSenha())){
            //DECRYPT PASSWORD $crypted = password_hash($password, PASSWORD_DEFAULT);
            $message = 'Usúario ou senha invalido';
            return $response->withStatus(401)->withHeader('Content-Type', 'application/json')->withJson($message);
        }
       // $expireDate = (new \dateTime())->modify('+365 days')->format('Y-m-d H:i:s');
        $tokenPayload = [
            'sub' => $usuario->getId(),
            'name' => $usuario->getNome(),
            'status' => $usuario->getStatus(),
            'hora' => $usuario->getHora(),
            'usuario' => $usuario->getUsuario(),
            //'expired_at' => $expireDate
        ];
        $token = JWT::encode($tokenPayload, getenv('JWT_SECRET_KEY'));

        $refreshTokenPayload = [
            'usuario' => $usuario->getUsuario(),
            //'ramdom' => uniqid()
        ];
        $refreshToken = JWT::encode($refreshTokenPayload, getenv('JWT_SECRET_KEY'));

        $tokenModel = new TokenModel();
        $tokenModel->setRefresh_token($refreshToken)
            ->setToken($token)
            ->setUsuarios_id($usuario->getId())
            ->setUsuarios_Name($usuario->getUsuario());
        $tokensDAO = new TokensDAO();
        $tokensDAO->createToken($tokenModel);

        $tokenDecoded = JWT::decode(
            $token, getenv('JWT_SECRET_KEY'), ['HS256']
        );
        $response = $response->withJson([
            "token" => $token,
            "userdata" => $tokenDecoded,
           // "refresh_token" => $refreshToken
        ]);
        return $response;
    }
}

