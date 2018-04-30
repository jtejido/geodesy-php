<?php

namespace Geodesy\Conversion;

use Geodesy\Location\ECEF;
use Geodesy\Location\LatLong;

class ECEF2LLA extends BaseConversion implements ConversionInterface
{

    private $ecef;

    private $latlong;

    private $datum;

    public function __construct(ECEF $ecef)
    {
        parent::__construct();
        $this->latlong = new LatLong;
        $this->ecef = $ecef;
        $this->datum = $this->ecef->getReference();
    }

	public function convert(): LatLong
    {

        $x = $this->ecef->getX();
        $y = $this->ecef->getY();
        $z = $this->ecef->getZ();

        $esq = $this->datum->getFirstEccentricitySquared();
        $asq = pow($this->datum->getSemiMajorAxis(), 2);
        $b = sqrt( $asq * (1 - $esq) );
        $bsq = pow($b, 2);
        $ep = sqrt( ($asq - $bsq) / $bsq );
        $p = sqrt( pow($x, 2) + pow($y, 2) );
        $th = atan2($this->datum->getSemiMajorAxis() * $z, $b * $p);

        $long = atan2($y,$x); 
        $lat = atan2( ($z + pow($ep,2) * $b * pow(sin($th), 3) ), ($p - $esq * $this->datum->getSemiMajorAxis() * pow(cos($th),3)) );
        $alt = $p / cos($lat) - $this->datum->getSemiMajorAxis() / ( sqrt(1 - $esq * pow(sin($lat),2)) );
        
        $this->latlong->setReference($this->datum);
        $this->latlong->setLatitude(rad2deg($lat));
        $this->latlong->setLongitude(rad2deg($long));
        $this->latlong->setAltitude($this->getUnit()->convert($alt));

        return $this->latlong;

    }


}