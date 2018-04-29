<?php
namespace Geodesy\Conversion;

use Geodesy\Location\LatLong;
use Geodesy\Location\ECEF;
use Geodesy\Unit\KiloMetre;
use Geodesy\Conversion\LLA2ECEF;
use Geodesy\Conversion\ECEF2LLA;

class ConversionTest extends \PHPUnit_Framework_TestCase
{   
    public function testLLA2ECEF()
    {
        $latitude = 48.148636;
        $longitude = 17.107558;

        $location = new LatLong;
        $location->setLatitude($latitude);
        $location->setLongitude($longitude);


        $conversion = new LLA2ECEF($location);

        $this->assertEquals(
            4074783.0332832,
            $conversion->convert()->getX()
        );

        $this->assertEquals(
            1254155.3518196,
            $conversion->convert()->getY()
        );

    }

    public function testECEF2LLA()
    {
        $X = 4074783.0332832;
        $Y = 1254155.3518196;

        $location = new ECEF;
        $location->setX($X);
        $location->setY($Y);

        $conversion = new ECEF2LLA($location);
        $conversion->setUnit(new KiloMetre);

        $this->assertEquals(
            48.148636,
            $conversion->convert()->getLatitude()
        );

        $this->assertEquals(
            17.107558,
            $conversion->convert()->getLongitude()
        );
    }

}

