<?php

namespace Geodesy\Conversion;

use Geodesy\Location\ECEF;
use Geodesy\Location\LatLong;

class ECEF2LLA extends BaseConversion
{

    protected $ecef;

    public function __construct(ECEF $ecef)
    {
        parent::__construct();
        $this->latlong = new LatLong;
        $this->ecef = $ecef;
    }

	public function convert(){

        $x = $this->ecef->getX();
        $y = $this->ecef->getY();
        $z = $this->ecef->getZ();

        $esq = pow($this->constants::E, 2);
        $asq = pow($this->constants::WGS_R, 2);
        $b = sqrt( $asq * (1 - $esq) );
        $bsq = pow($b, 2);
        $ep = sqrt( ($asq - $bsq) / $bsq );
        $p = sqrt( pow($x, 2) + pow($y, 2) );
        $th = atan2($this->constants::WGS_R * $z, $b * $p);

        $long = atan2($y,$x);
        $lat = atan2( ($z + pow($ep,2) * $b * pow(sin($th), 3) ), ($p - $esq * $this->constants::WGS_R * pow(cos($th),3)) );
        $N = $this->constants::WGS_R / ( sqrt(1 - $esq * pow(sin($lat),2)) );
        $alt = $p / cos($lat) - $N;

        $long = ($long % (2*pi())) == 0 ? $long : $long % (2*pi());

        $this->latlong->setLatitude(rad2deg($lat));
        $this->latlong->setLongitude(rad2deg($long));
        $this->latlong->setAltitude($this->getUnit()->convert($alt));

        return $this->latlong;

    }


}