<?php

namespace Geodesy\Conversion;

use Geodesy\Constants\Constants;
use Geodesy\Unit\UnitInterface;
use Geodesy\Unit\KiloMetre;

abstract class BaseConversion
{
    
    protected $unit;

    protected $constants;

    /**
     * https://en.wikipedia.org/wiki/Geographic_coordinate_conversion
     * There have been known methods for two-way conversion but what we use is Olson's method as this is computationally inexpensive
     * and pretty much accurate for majority of cases(except, of course, if you aim for ultimate precision).
     * Olson, D. K. (1996). "Converting earth-Centered, Earth-Fixed Coordinates to Geodetic Coordinates," 
     * IEEE Transactions on Aerospace and Electronic Systems, Vol. 32, No. 1, January 1996, pp. 473-476
     */

    public function __construct()
    {
        $this->constants = new Constants;
        $this->unit = new KiloMetre;
    }

    public abstract function convert();

    public function setUnit(UnitInterface $unit)
    {
        $this->unit = $unit;
    }
    
    public function getUnit()
    {
        return $this->unit;
    }

}