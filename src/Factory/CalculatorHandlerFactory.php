<?php


namespace App\Factory;

use App\Calculator\Calculator;
use App\Calculator\Handler\CalculatorHandler;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
class CalculatorHandlerFactory
{
    public function __invoke(): CalculatorHandler
    {
        $loader = new FilesystemLoader(__DIR__ . '/../Calculator/Templates');
        $twig = new Environment($loader, [
            'cache' => false, // or specify cache dir
        ]);

        $calculator = new Calculator();

        return new CalculatorHandler($calculator, $twig);
    }
}
