<?php

namespace Geodesy\Conversion;

use Geodesy\Location\WebMercator;
use Geodesy\Location\LatLong;
use Geodesy\Datum\WGS84;

class WebMercator2LLA extends BaseConversion implements ConversionInterface
{

	protected $latlong;

	protected $webmercator;

	protected $datum;

    public function __construct(WebMercator $webmercator)
    {
    	parent::__construct();
        $this->webmercator = $webmercator;
        $this->latlong = new LatLong;
        $this->datum = $this->webmercator->getReference();
    }

	public function convert(): LatLong
    {

        $x = $this->webmercator->getX();
        
        $y = $this->webmercator->getY();

        $f = $this->datum->getSemiMajorAxis();

        $lat = $x / $f;

		$long = (pi() / 2) - (2 * atan(exp(-1.0 * $y / $f)));

        $this->latlong->setReference($this->datum);

        $this->latlong->setLatitude(rad2deg($lat));

        $this->latlong->setLongitude(rad2deg($long));

        return $this->latlong;

    }


}