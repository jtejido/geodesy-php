<?php

namespace Geodesy\Conversion;

use Geodesy\Location\ECEF;
use Geodesy\Location\LatLong;

class LLA2ECEF extends BaseConversion implements ConversionInterface
{

	protected $latlong;

	protected $ecef;

    public function __construct(LatLong $latlong)
    {
    	parent::__construct();
        $this->ecef = new ECEF;
        $this->latlong = $latlong;
    }

	public function convert(){

        $lat = deg2rad($this->latlong->getLatitude());

        $long = deg2rad($this->latlong->getLongitude());

        $alt = $this->latlong->getAltitude();

		$esq = pow($this->constants::ECCENTRICITY, 2);

        $n = $this->constants::A / sqrt( 1 - $esq * pow(sin( $lat ), 2) );

        $this->ecef->setX($this->getUnit()->convert(( $n + $alt ) * cos( $lat ) * cos( $long )));    //ECEF x

        $this->ecef->setY($this->getUnit()->convert(( $n + $alt ) * cos( $lat ) * sin( $long )));    //ECEF y

        $this->ecef->setZ($this->getUnit()->convert(( ( 1 - $esq ) * $n + $alt ) * sin( $lat )));          //ECEF z

        return $this->ecef;

    }


}