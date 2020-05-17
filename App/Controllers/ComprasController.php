<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\ComprasDAO;
use App\DAO\BuysByCards;
use App\DAO\ResumeCompras;

use App\Models\ComprasModel;

final class ComprasController {
    //GET COMPRAS POR USUARIO
    public function getAllByUser(Request $request, Response $response, array $args): Response {
        $params = $request->getQueryParams();
        $mes = (string)$params['mes'];
        $ano = (int)$params['ano'];
        $user = (string)$params['user'];
        $comprasDAO = new ComprasDAO();
        $listCompras = $comprasDAO->getAllByUser($mes, $ano, $user);
        return $response = $response->withStatus(200)->withHeader('Content-Type', 'application/json')->withJson($listCompras);
    }
    //GET COMPRAS RESUMO
    public function getResume(Request $request, Response $response, array $args): Response {
        $params = $request->getQueryParams();
        $mes = (string)$params['mes'];
        $ano = (int)$params['ano'];
        $ResumeCompras = new ResumeCompras();
        $listComprasbyUser = $ResumeCompras->getResume($mes, $ano);
        return $response = $response->withStatus(200)->withHeader('Content-Type', 'application/json')->withJson($listComprasbyUser);
    }
    //GET POR CARTÃO
     public function getAllByCard(Request $request, Response $response, array $args): Response {
        $params = $request->getQueryParams();
        $mes = (string)$params['mes'];
        $ano = (int)$params['ano'];
        $card = (string)$params['card'];
        $BuysByCards = new BuysByCards();
        $listCompras = $BuysByCards->getAllByCard($mes, $ano, $card);
        return $response = $response->withStatus(200)->withHeader('Content-Type', 'application/json')->withJson($listCompras);
    }

    //POST
    public function insertCompra(Request $request, Response $response, array $args): Response {
        $response = $response->withJson([
            'mensagem' => 'Ola Mundo'
        ]);
        return $response;
    }
    //PUT
    public function editCompra(Request $request, Response $response, array $args): Response {
        $response = $response->withJson([
            'mensagem' => 'Ola Mundo'
        ]);
        return $response;
    }
    //DELETE
    public function deleteCompra(Request $request, Response $response, array $args): Response {
        $response = $response->withJson([
            'mensagem' => 'Ola Mundo'
        ]);
        return $response;
    }
}
