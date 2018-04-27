<?php

namespace Geodesy\Unit;


class KiloMetre extends BaseUnit implements UnitInterface
{

    public function convert($value)
    {
        return $value * 0.001;
    }

}