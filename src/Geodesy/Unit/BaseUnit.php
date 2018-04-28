<?php

namespace Geodesy\Unit;


abstract class BaseUnit
{

    abstract public function convert(float $value): float;

}