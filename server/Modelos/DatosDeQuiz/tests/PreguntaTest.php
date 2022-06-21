<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Raiz\Modelos\DatosDeQuiz\Pregunta;

final class PreguntaTest extends TestCase
{
  /** @test */
  public function asociacion_de_respuesta_correcta(): void
  {
    // Verificar que la respuesta correcta siempre exista en el arreglo de respuestas.
  }
  /** @test */
  public function eliminar_respuesta_correcta_obliga_a_asociar_una_nueva(): void
  {
    // Tomar la primer respuesta como respuesta válida por defecto luego de eliminar la respuesta válida actual.
  }
}
