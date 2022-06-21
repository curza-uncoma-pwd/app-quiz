<?php

namespace Raiz\Modelos;

class Jugador extends Modelo
{
  private string $nombre;
  /** @var Quiz[] */
  private array $juegos;

  public function __construct(string $nombre, ?string $id = null)
  {
    parent::__construct($id);

    $this->nombre = $nombre;
  }

  public function serializar(): array
  {
    return [
      'id' => $this->id(),
      'nombre' => $this->nombre,
    ];
  }

  public static function deserializar(array $data): self
  {
    // Se verificó que la data es válida
    self::validarInformacion($data);

    return new self(id: $data['id'], nombre: $data['nombre']);
  }

  private static function validarInformacion(array $data): void
  {
  }
}
