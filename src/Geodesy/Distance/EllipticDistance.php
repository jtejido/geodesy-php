<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

class EllipticDistance extends BaseDistance implements DistanceInterface
{

    public function __construct(LatLong $source, LatLong $destination)
    {
        parent::__construct($source, $destination);
    }

    /**
     * Andoyer's Distance formula. from 'annuaire du Bureau des Longitudes'. 1950.
     */
    protected function distance(): float
    {

        $lat1 = $this->getSourceLatitude();
        $lat2 = $this->getDestinationLatitude();
        $long1 = $this->getSourceLongitude();
        $long2 = $this->getDestinationLongitude();

        $a = $this->getSemiMajorAxis();
        $f = $this->getInverseFlattening();

        $F = ($lat1 + $lat2) / 2.0;
        $G = ($lat1 - $lat2) / 2.0;
        $L = ($long1 - $long2) / 2.0;

        $sing = sin($G);
        $cosl = cos($L);
        $cosf = cos($F);
        $sinl = sin($L);
        $sinf = sin($F);
        $cosg = cos($G);

        $S = $sing*$sing*$cosl*$cosl + $cosf*$cosf*$sinl*$sinl;
        $C = $cosg*$cosg*$cosl*$cosl + $sinf*$sinf*$sinl*$sinl;
        $W = atan2(sqrt($S),sqrt($C));
        $R = sqrt(($S*$C))/$W;
        $H1 = (3 * $R - 1.0) / (2.0 * $C);
        $H2 = (3 * $R + 1.0) / (2.0 * $S);
        $D = 2 * $W * $a;
        return ($D * (1 + $f * $H1 * $sinf*$sinf*$cosg*$cosg -
        $f*$H2*$cosf*$cosf*$sing*$sing));

    }

}