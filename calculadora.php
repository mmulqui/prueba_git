<?php

// calculadora.php
// Funciones simples para demostrar pruebas automatizadas con GitHub Actions

function sumar(int $a, int $b): int {
    return $a + $b;
}

function restar(int $a, int $b): int {
    return $a - $b;
}

function multiplicar(int $a, int $b): int {
    return $a * $b;
}

function dividir(int $a, int $b): float {
    if ($b === 0) {
        throw new InvalidArgumentException("No se puede dividir entre cero.");
    }
    return $a / $b;
}
