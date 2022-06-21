<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Raiz\Modelos\Jugador;

final class JugadorTest extends TestCase
{
  /** @test */
  public function el_jugador_devuelve_sus_datos_crudos_correctamente(): void
  {
    $jugador = new Jugador(nombre: 'Alejo');
    $jugadorCrudo = $jugador->serializar();

    $this->arrayHasKey('nombre')->evaluate($jugadorCrudo);
    $this->arrayHasKey('id')->evaluate($jugadorCrudo);

    $this->assertEquals('Alejo', $jugadorCrudo['nombre']);
  }

  /** @test */
  public function devuelve_el_puntaje_mas_alto(): void
  {
    // El jugador tiene que saber sobre sus juegos (quizes).
  }
}
