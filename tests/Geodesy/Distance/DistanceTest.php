<?php
namespace Geodesy\Distance;

use Geodesy\Location\LatLong;
use Geodesy\Unit\Metre;
use Geodesy\Distance\HaversineFormula;
use Geodesy\Distance\VincentyFormula;

class DistanceTest extends \PHPUnit_Framework_TestCase
{   
    public function testVincentyDistance()
    {
        $lat1 = 48.148636;
        $long1 = 17.107558;

        $lat2 = 48.208810;
        $long2 = 16.372477;

        $loc1 = new LatLong;
        $loc1->setLatitude($lat1);
        $loc1->setLongitude($long1);


        $loc2 = new LatLong;
        $loc2->setLatitude($lat2);
        $loc2->setLongitude($long2);

        $distance = new VincentyFormula($loc1, $loc2);
        $distance->setUnit(new Metre);

        // this is in meters
        $this->assertEquals(
            54992.568207331,
            $distance->getDistance()
        );
    }

    public function testHaversteinDistance()
    {
        $lat1 = 48.148636;
        $long1 = 17.107558;

        $lat2 = 48.208810;
        $long2 = 16.372477;

        $loc1 = new LatLong;
        $loc1->setLatitude($lat1);
        $loc1->setLongitude($long1);


        $loc2 = new LatLong;
        $loc2->setLatitude($lat2);
        $loc2->setLongitude($long2);

        $distance = new HaversineFormula($loc1, $loc2);

        // this is in kilometers
        $this->assertEquals(
            54.912130585039,
            $distance->getDistance()
        );
    }

}

