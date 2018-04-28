<?php

namespace Geodesy\Unit;


class KiloMetre extends BaseUnit implements UnitInterface
{

    public function convert(float $value): float
    {
        return $value * 0.001;
    }

}