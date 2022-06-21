<?php

namespace Raiz\Modelos;

class Quiz extends Modelo
{
  public function serializar(): array
  {
    return [];
  }

  public static function deserializar(array $data): self
  {
    return new self();
  }
}
