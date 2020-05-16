<?php

namespace App\Middlewares;

use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

final class JwtDateTimeMiddleware
{
    public function __invoke(Request $request, Response $response, callable $next): Response {
        $token = $request->getAttribute('jwt');
        // $expireDate = new \DateTime($token['expired_at']);
        // $now = new \DateTime();
        // if($expireDate < $now){
        //     $message = 'Token Expirado';
        //     return $response->withStatus(401)->withHeader('Content-Type', 'application/json')->withJson($message);
        // }
        // echo '<pre>';
        // print_r($token);
        if(empty($token)){
            echo"erro";
        }
        $response = $next($request, $response);
        return $response;
    }
}
