<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{

    public function getFunctions(): array
    {
        return [
            new TwigFunction('icon', [$this, 'svgIcon'], ['is_safe' => ['html']]),
        ];
    }


    /**
     * Génère le code HTML pour une icone SVG
     */
    public function svgIcon(string $name): string
    {
        return <<<HTML
        <svg class="icon icon-{$name}">
          <use xlink:href="/sprite.svg#{$name}"></use>
        </svg>
HTML;
    }

}