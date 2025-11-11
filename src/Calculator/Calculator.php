<?php
namespace App\Calculator;

class Calculator {
    public function calculate(float $a, float $b, string $op): float|string {
        return match ($op) {
            '+' => $a + $b,
            '-' => $a - $b,
            '*' => $a * $b,
            '/' => $b != 0 ? $a / $b : 'Division by zero',
            default => 'Invalid operator',
        };
    }
}
