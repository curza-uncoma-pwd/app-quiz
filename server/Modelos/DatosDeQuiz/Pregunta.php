<?php

namespace Raiz\Modelos\DatosDeQuiz;

use Raiz\Modelos\Modelo;

class Pregunta extends Modelo
{
  private string $enunciado;
  /** @var Respuesta[] */
  private array $respuestas;
  /**
   * Contiene el ID de una de las instancias de Respuesta que
   * sí o sí está almacenada en el listado de respuestas de la instancia.
   */
  private string $correcto;
  private int $puntaje;

  public function agregarRespuesta(
    Respuesta $respuesta,
    bool $esCorrecta = false,
  ) {
    // 1. verificar que no exista actualmente en el listado de respuestas.
    // 2. agregar respuesta al arreglo en caso de que no exista.
  }

  public function quitarRespuesta(Respuesta $respuesta): void
  {
    // 1. verificar que el id de la respuesta existe en el listado de respuestas.
    // 2. Si es así, hay que borrar la respuesta del listado.
    // 3. Si correcto contiene el mismo ID que estamos borrando, ahora debería almacenar el ID de la primera pregunta.
  }

  public function configurarRespuestaCorrecta(Respuesta $respuesta): void
  {
    // 1. Verificar que la respuesta exista en el arreglo de respuestas.
    // 2. Si es así, configurar el atributo "correcto" con el ID de la pregunta que se recibió por parámetro.
  }

  public function serializar(): array
  {
    return [];
  }

  public static function deserializar(array $data): self
  {
    return new self();
  }
}
