<?php

namespace Raiz\Controladores;

use Raiz\Modelos\Jugador;

class JugadorControlador
{
  /**
   * @return mixed[]
   */
  public static function crear(string $nombre): array
  {
    $nuevoJugador = new Jugador(nombre: $nombre);

    // Se persistió el jugador

    return $nuevoJugador->serializar();
  }
}
