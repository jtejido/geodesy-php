<?php

namespace Geodesy\Unit;


class Mile extends BaseUnit implements UnitInterface
{

    public function convert(float $value): float
    {
        return $value * 0.000621371;
    }

}