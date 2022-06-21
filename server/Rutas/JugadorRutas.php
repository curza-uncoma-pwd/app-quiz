<?php

namespace Raiz\Rutas;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Raiz\Controladores\JugadorControlador;
use Slim\App;

final class JugadorRutas implements RutasInterface
{
  public static function configurar(App $app): void
  {
    $app->get(
      pattern: '/api/jugadores',
      callable: function (Request $peticion, Response $respuesta, $args) {
        /** @var mixed[] */
        // $data = $peticion->getParsedBody();
        $datosDelJugadorNuevo = JugadorControlador::crear(nombre: 'Alejo');

        return Utileria::responderConJson(
          respuesta: $respuesta,
          datos: $datosDelJugadorNuevo,
        );
      },
    );
  }
}
