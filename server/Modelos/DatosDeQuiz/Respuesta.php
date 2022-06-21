<?php

namespace Raiz\Modelos\DatosDeQuiz;

use Raiz\Modelos\Modelo;

class Respuesta extends Modelo
{
  private string $valor;

  public function serializar(): array
  {
    return [];
  }

  public static function deserializar(array $data): self
  {
    return new self();
  }
}
