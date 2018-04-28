<?php

namespace Geodesy\Unit;


class AstronomicalUnit extends BaseUnit implements UnitInterface
{

    public function convert($value)
    {
        return $value * 6.6846e-12;
    }

}