<?php
namespace Geodesy\Conversion;

use Geodesy\Location\LatLong;
use Geodesy\Location\ECEF;
use Geodesy\Unit\Metre;
use Geodesy\Conversion\LLA2ECEF;
use Geodesy\Conversion\ECEF2LLA;

class ConversionTest extends \PHPUnit_Framework_TestCase
{   
    public function testLLA2ECEF()
    {
        $latitude = 48.148636;
        $longitude = 17.107558;
        $altitude = 100;

        $location = new LatLong;
        $location->setLatitude($latitude);
        $location->setLongitude($longitude);
        $location->setAltitude($altitude);


        $conversion = new LLA2ECEF($location);

        $this->assertEquals(
            4074.7830332832,
            $conversion->convert()->getX()
        );

        $this->assertEquals(
            1254.1553518196,
            $conversion->convert()->getY()
        );

        // the altitude value has a default unit length of Kilometer unless setUnit() is used
        $this->assertEquals(
            4727.9191749041,
            $conversion->convert()->getZ()
        );
    }

    public function testECEF2LLA()
    {
        $X = 4074.7830332832;
        $Y = 1254.1553518196;
        $Z = 4727.9191749041;

        $location = new ECEF;
        $location->setX($X);
        $location->setY($Y);
        $location->setZ($Z);

        $conversion = new ECEF2LLA($location);
        $conversion->setUnit(new Metre);

        $this->assertEquals(
            48.148636,
            $distance->getLatitude()
        );

        $this->assertEquals(
            17.107558,
            $distance->getLongitude()
        );

        // The Altitude is in Metre since new Metre is set
        $this->assertEquals(
             -4.6384229790419E-11,
            $distance->getAltitude()
        );
    }

}

