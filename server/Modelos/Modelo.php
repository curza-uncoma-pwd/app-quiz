<?php

namespace Raiz\Modelos;

use EndyJasmi\Cuid;

abstract class Modelo implements Serializable
{
  private string $id;

  public function __construct(?string $id = null)
  {
    if (is_null($id)) {
      $this->id = Cuid::slug();
    } else {
      $this->id = $id;
    }
  }

  protected function id(): string
  {
    return $this->id;
  }
}
