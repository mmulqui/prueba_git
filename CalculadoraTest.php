<?php

// tests/CalculadoraTest.php
// Pruebas unitarias para calculadora.php usando PHPUnit

require_once __DIR__ . '/../calculadora.php';

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function test_sumar_dos_numeros(): void
    {
        $resultado = sumar(3, 4);
        $this->assertEquals(7, $resultado);
    }

    public function test_restar_dos_numeros(): void
    {
        $resultado = restar(10, 3);
        $this->assertEquals(7, $resultado);
    }

    public function test_multiplicar_dos_numeros(): void
    {
        $resultado = multiplicar(3, 4);
        $this->assertEquals(12, $resultado);
    }

    public function test_dividir_dos_numeros(): void
    {
        $resultado = dividir(10, 2);
        $this->assertEquals(5.0, $resultado);
    }

    public function test_dividir_entre_cero_lanza_excepcion(): void
    {
        $this->expectException(InvalidArgumentException::class);
        dividir(5, 0);
    }
}
