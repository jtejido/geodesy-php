<?php

namespace Geodesy\Unit;


class AstronomicalUnit extends BaseUnit implements UnitInterface
{

    public function convert(float $value): float
    {
        return $value * 6.6846e-12;
    }

}