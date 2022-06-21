<?php

namespace Raiz\Modelos;

interface Serializable
{
  /** @return mixed[] */
  public function serializar(): array;

  /** @return mixed[] */
  public static function deserializar(array $data): Modelo;
}
