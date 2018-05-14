<?php

namespace Geodesy\Transformer;

use Geodesy\Location\LatLong;
use Geodesy\Location\ECEF;
use Geodesy\Datum\DatumInterface;
use Geodesy\Datum\WGS84;

class HelmertTransform extends BaseTransformer implements TransformerInterface
{

    /**
     * Position Vector Transformation thru Helmert's Method. (Bursa-Wolf simplified)
     */
    
    protected $isCoordinateFrameRotation;

    public function __construct($isCoordinateFrameRotation = false)
    {
        $this->isCoordinateFrameRotation = $isCoordinateFrameRotation;
    }

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

        $x1 = $source_ecef->getX();
        $y1 = $source_ecef->getY();
        $z1 = $source_ecef->getZ();
        $t  =  $array['TranslationVectors'];
        $r  =  $array['RotationalVectors'];
        $s  =  $array['Scale'];
        
        $tx = $t['x']; 
        $ty = $t['y'];
        $tz = $t['z'];
        $s1 = $s/1e6 + 1;
        $rx = deg2rad($r['x']/3600);
        $ry = deg2rad($r['y']/3600);
        $rz = deg2rad($r['z']/3600);

        $x2 = 0;
        $y2 = 0;
        $z2 = 0;

        // common practice particularly in the European and U.S. E&P industry bu not widely accepted.
        if($this->isCoordinateFrameRotation) {
            $x2 += $tx + $x1*$s1 + $y1*$rz - $z1*$ry;
            $y2 += $ty - $x1*$rz + $y1*$s1 + $z1*$rx;
            $z2 += $tz + $x1*$ry - $y1*$rx + $z1*$s1;
        }
        else {
            $x2 += $tx + $x1*$s1 - $y1*$rz + $z1*$ry;
            $y2 += $ty + $x1*$rz + $y1*$s1 - $z1*$rx;
            $z2 += $tz - $x1*$ry + $y1*$rx + $z1*$s1;
        }

        $location = new ECEF;
        $location->setReference($destinationDatum); // changed the Reference Datum to current datum
        $location->setX($x2);
        $location->setY($y2);
        $location->setZ($z2);
        return $this->toLLA($location);
    }

}