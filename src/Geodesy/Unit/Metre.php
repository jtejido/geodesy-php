<?php

namespace Geodesy\Unit;


class Metre extends BaseUnit implements UnitInterface
{

    // This is our base unit, so just return it
    public function convert($value)
    {
        return $value;
    }

}