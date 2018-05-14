<?php

namespace Geodesy\Transformer;

use Geodesy\Location\LatLong;
use Geodesy\Datum\DatumInterface;
use Geodesy\Datum\WGS84;

class MolodenskyTransform extends BaseTransformer implements TransformerInterface
{


    public function transform(LatLong $source, DatumInterface $destinationDatum): LatLong
    {

        $sourceDatum = $source->getReference();

        $source_ecef = $this->toECEF($source);
        
        // if converting to wgs84, use the inverse
        if ($destinationDatum instanceof WGS84){
            $array = $sourceDatum->getVector(true);
        } else {
            $array = $destinationDatum->getVector();
        }

        $t  =  $array['TranslationVectors'];
        $fromF = $sourceDatum->getInverseFlattening();
        $fromA = $sourceDatum->getSemiMajorAxis();
        $fromEsq = $sourceDatum->getFirstEccentricitySquared();
        $dx = $t['x'];
        $dy = $t['y'];
        $dz = $t['z'];

        $da = $sourceDatum->getSemiMajorAxis() - $destinationDatum->getSemiMajorAxis();
        $df = $sourceDatum->getInverseFlattening() - $destinationDatum->getInverseFlattening();

        $sinLat = sin($source->getLatitude());
        $cosLat = cos($source->getLatitude());
        $sinLong = sin($source->getLongitude());
        $cosLong = cos($source->getLongitude());
        $sinLatEsq = pow($sinLat, 2);
        $adb = 1.0 / (1.0 - $fromF);
        $h = $source->getAltitude();
        
        // radius of curvature in prime vertical
        $rn = $fromA / sqrt(1.0 - $fromEsq * $sinLatEsq);
 
        // radius of curvature in prime meridian
        $rm = $fromA * (1 - $fromEsq) / pow((1.0 - $fromEsq * $sinLatEsq), 1.5);

        $deltaLat = (((((-$dx * $sinLat * $cosLong - $dy * $sinLat * $sinLong) + $dz * $cosLat)
                + ($da * (($rn * $fromEsq * $sinLat * $cosLat) / $fromA)))
                + ($df * ($rm * $adb + $rn / $adb) * $sinLat * $cosLat))) / ($rm + $h);

        $deltaLong = (-$dx * $sinLong + $dy * $cosLong) / (($rn + $h) * $cosLat);

        $deltaHeight = ($dx * $cosLat * $cosLong) + ($dy * $cosLat * $sinLong) + ($dz * $sinLat) - ($da * ($fromA / $rn))
                + (($df * $rn * $sinLatEsq) / $adb);

        $latlong_new = new Latlong();
        $latlong_new->setReference($destinationDatum);
        $latlong_new->setLatitude($source->getLatitude() + $deltaLat);
        $latlong_new->setLongitude($source->getLongitude() + $deltaLong);
        $latlong_new->setAltitude($source->getAltitude() + $deltaHeight);

        return $latlong_new;
    }

}