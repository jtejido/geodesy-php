<?php

namespace Geodesy\Unit;


class NauticalMile extends BaseUnit implements UnitInterface
{

    public function convert($value)
    {
        return $value * 0.539957;
    }

}