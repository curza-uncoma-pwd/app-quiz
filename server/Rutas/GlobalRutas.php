<?php

namespace Raiz\Rutas;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

final class GlobalRutas implements RutasInterface
{
  public static function configurar(App $app): void
  {
    $app->get(
      pattern: '/client/assets/{asset}',
      callable: function (Request $peticion, Response $respuesta, $args) {
        return Utileria::responderConAsset($respuesta, $args['asset']);
      },
    );

    $app->get(
      // Patrón de string llamado wildcard, es decir, comodín.
      pattern: '[/{params:.*}]',
      callable: function (Request $peticion, Response $respuesta, $args) {
        return Utileria::responderConVista($respuesta, 'main', []);
      },
    );
  }
}
