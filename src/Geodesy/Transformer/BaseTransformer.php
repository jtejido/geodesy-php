<?php

namespace Geodesy\Transformer;

use Geodesy\Location\LatLong;
use Geodesy\Conversion\LLA2ECEF;
use Geodesy\Conversion\ECEF2LLA;
use Geodesy\Location\ECEF;
use Geodesy\Datum\DatumInterface;

abstract class BaseTransformer
{

    abstract public function transform(LatLong $source, DatumInterface $destinationDatum): LatLong;

    protected function toLLA(ECEF $ecef): LatLong
    {
        $ecef2lla = new ECEF2LLA($ecef);
        return $ecef2lla->convert();
    }

    protected function toECEF(LatLong $latlong): ECEF
    {
        $lla2ecef = new LLA2ECEF($latlong);
        return $lla2ecef->convert();
    }


}