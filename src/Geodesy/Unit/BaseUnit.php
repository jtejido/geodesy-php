<?php

namespace Geodesy\Unit;


class BaseUnit
{

    protected $value;

    public function __construct()
    {
        $this->value = null;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }


}