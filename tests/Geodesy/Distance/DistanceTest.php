<?php
namespace Geodesy\Distance;

use Geodesy\Location\LatLong;
use Geodesy\Unit\KiloMetre;
use Geodesy\Distance\HaversineFormula;
use Geodesy\Distance\VincentyFormula;

class DistanceTest extends \PHPUnit_Framework_TestCase
{   
    public function testVincentyDistance()
    {
        $lat1 = 25.2522;
        $long1 = 55.28;

        $lat2 = 14.6042;
        $long2 = 120.982;

        $loc1 = new LatLong;
        $loc1->setLatitude($lat1);
        $loc1->setLongitude($long1);


        $loc2 = new LatLong;
        $loc2->setLatitude($lat2);
        $loc2->setLongitude($long2);

        $distance = new VincentyFormula($loc1, $loc2);

        // this is in meters
        $this->assertEquals(
            6916085.326,
            $distance->getDistance()
        );
    }

    public function testHaversteinDistance()
    {
        $lat1 = 25.2522;
        $long1 = 55.28;

        $lat2 = 14.6042;
        $long2 = 120.982;

        $loc1 = new LatLong;
        $loc1->setLatitude($lat1);
        $loc1->setLongitude($long1);


        $loc2 = new LatLong;
        $loc2->setLatitude($lat2);
        $loc2->setLongitude($long2);

        $distance = new HaversineFormula($loc1, $loc2);
        $distance->setUnit(new KiloMetre);

        // this is in kilometers
        $this->assertEquals(
            6906.858437,
            $distance->getDistance()
        );
    }

}

