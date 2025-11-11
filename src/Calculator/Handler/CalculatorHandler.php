<?php

namespace App\Calculator\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Laminas\Diactoros\Response\HtmlResponse;
use App\Calculator\Calculator;
use Twig\Environment as Twig;

class CalculatorHandler implements RequestHandlerInterface
{
    private Calculator $calculator;
    private Twig $twig;

    public function __construct(Calculator $calculator, Twig $twig)
    {
        $this->calculator = $calculator;
        $this->twig = $twig;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $result = null;

        if ($request->getMethod() === 'POST') {
            $data = $request->getParsedBody();
            $a = (float)($data['a'] ?? 0);
            $b = (float)($data['b'] ?? 0);
            $op = $data['op'] ?? '+';
            $result = $this->calculator->calculate($a, $b, $op);
        }

        $html = $this->twig->render('calculator.twig', ['result' => $result]);
        return new HtmlResponse($html);
    }
}




/*namespace App\Calculator\Handler;

use Laminas\Diactoros\ServerRequest;
use App\Calculator\Calculator;
use App\Calculator\Renderer;

class CalculatorHandler
{
    private Calculator $calculator;
    private Renderer $renderer;

    public function __construct(Calculator $calculator, Renderer $renderer)
    {
        $this->calculator = $calculator;
        $this->renderer = $renderer;
    }

    public function handle(ServerRequest $request): string
    {
        $result = null;

        if ($request->getMethod() === 'POST') {
            $data = $request->getParsedBody();
            $a = (float)($data['a'] ?? 0);
            $b = (float)($data['b'] ?? 0);
            $op = $data['op'] ?? '+';
            $result = $this->calculator->calculate($a, $b, $op);
        }

        return $this->renderer->render('calculator.twig', ['result' => $result]);
    }
} */
