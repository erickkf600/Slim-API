<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\ComprasDAO;
use App\DAO\ResumeCompras;
use App\Models\ComprasModel;

final class ComprasController {
    //GET COMPRAS POR USUARIO
    public function getAllByUser(Request $request, Response $response, array $args): Response {
        $params = $request->getQueryParams();
        $mes = (string)$params['mes'];
        $ano = (int)$params['ano'];
        $comprasDAO = new ComprasDAO();
        $listCompras = $comprasDAO->getAllByUser($mes, $ano);
        return $response = $response->withStatus(200)->withHeader('Content-Type', 'application/json')->withJson($listCompras);
    }
    public function getResume(Request $request, Response $response, array $args): Response {
        $params = $request->getQueryParams();
        $mes = (string)$params['mes'];
        $ano = (int)$params['ano'];
        $ResumeCompras = new ResumeCompras();
        $listComprasbyUser = $ResumeCompras->getResume($mes, $ano);
        return $response = $response->withStatus(200)->withHeader('Content-Type', 'application/json')->withJson($listComprasbyUser);
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
