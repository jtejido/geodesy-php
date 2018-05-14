<?php

namespace Geodesy\Transformer;

use Geodesy\Location\LatLong;
use Geodesy\Location\ECEF;
use Geodesy\Datum\DatumInterface;
use Geodesy\Datum\WGS84;

class MolodenskyBadekasTransform extends BaseTransformer implements TransformerInterface
{

    /**
     * Ten Parameter Transformation. Take note that this is non-reversible
     */
    public function transform(LatLong $source, DatumInterface $destinationDatum): LatLong
    {

        $sourceDatum = $source->getReference();
        $source_ecef = $this->toECEF($source);
        
        $array = $sourceDatum->getVector(true);

        $x1 = $source_ecef->getX();
        $y1 = $source_ecef->getY();
        $z1 = $source_ecef->getZ();
        $t  =  $array['TranslationVectors'];
        $r  =  $array['RotationalVectors'];
        $s  =  $array['Scale'];
        
        $tx = $t['x']; 
        $ty = $t['y'];
        $tz = $t['z'];
        $x1_p = $x1 + $tx; 
        $y1_p = $y1 + $ty;
        $z1_p = $z1 + $tz;
        $s1 = $s/1e6 + 1;
        $rx = deg2rad($r['x']/3600);
        $ry = deg2rad($r['y']/3600);
        $rz = deg2rad($r['z']/3600);


        $x2 = $tx + (($x1 - $x1_p)*$s1) + (($y1 - $y1_p)*$rz) - (($z1 - $z1_p)*$ry) + $x1_p;
        $y2 = $ty - (($x1 - $x1_p)*$rz) + (($y1 - $y1_p)*$s1) + (($z1 - $z1_p)*$rx) + $y1_p;
        $z2 = $tz + (($x1 - $x1_p)*$ry) - (($y1 - $y1_p)*$rx) + (($z1 - $z1_p)*$s1) + $z1_p;

        $location = new ECEF;
        $location->setReference($destinationDatum); // changed the Reference Datum to current datum
        $location->setX($x2);
        $location->setY($y2);
        $location->setZ($z2);
        return $this->toLLA($location);
    }

}