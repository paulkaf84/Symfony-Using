<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('price', [$this, 'filterPrice']),
        ];
    }

    /**
     * The price callable
     *
     * @param float $number
     * @param int $decimal
     * @return string
     */
    public function filterPrice(float $number, int $decimal = 0): string
    {
        $price = number_format($number, $decimal);
        return $price . '$';
    }
}
