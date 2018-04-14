<?php

namespace Geodesy\Unit;


class Mile extends BaseUnit implements UnitInterface
{

    public function convert($value)
    {
        return $value * 0.62137;
    }

}