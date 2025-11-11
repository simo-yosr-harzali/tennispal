<?php


require __DIR__ . '/../vendor/autoload.php';

use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use App\Factory\CalculatorHandlerFactory;

// Build PSR-7 request
$request = ServerRequestFactory::fromGlobals();

// factory to build the handler
$factory = new CalculatorHandlerFactory();
$handler = $factory();

// Handle the request → get a Response object
$response = $handler->handle($request);

// Emit the response (send headers + body)
$emitter = new SapiEmitter();
$emitter->emit($response);











/*
require __DIR__ . '/../vendor/autoload.php';

use Laminas\Diactoros\ServerRequestFactory;
use App\Calculator\Calculator;
use App\Calculator\Renderer;
use App\Calculator\Handler\CalculatorHandler;

// Create HTTP request from globals
$request = ServerRequestFactory::fromGlobals();

// Initialize your dependencies
$calculator = new Calculator();
$renderer = new Renderer();
$handler = new CalculatorHandler($calculator, $renderer);

// Delegate handling to the handler
$responseHtml = $handler->handle($request);

// Output the result
echo $responseHtml;



require __DIR__ . '/../vendor/autoload.php';

use Laminas\Diactoros\ServerRequestFactory;
use App\Calculator\Calculator;
use App\Calculator\Renderer;

$request = ServerRequestFactory::fromGlobals();

$renderer = new Renderer();
$calculator = new Calculator();

$result = null;

if ($request->getMethod() === 'POST') {
    $a = (float)$request->getParsedBody()['a'];
    $b = (float)$request->getParsedBody()['b'];
    $op = $request->getParsedBody()['op'];
    $result = $calculator->calculate($a, $b, $op);
}

echo $renderer->render('calculator.twig', ['result' => $result]); */



