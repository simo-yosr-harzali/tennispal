<?php
namespace App\Calculator;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Renderer {
    private Environment $twig;

    public function __construct() {
        $loader = new FilesystemLoader(__DIR__ . '/Templates');
        $this->twig = new Environment($loader);
    }

    public function render(string $template, array $data = []): string {
        return $this->twig->render($template, $data);
    }
}
