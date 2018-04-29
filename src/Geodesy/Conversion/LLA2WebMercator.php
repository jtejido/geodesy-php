<?php

namespace Geodesy\Conversion;

use Geodesy\Location\WebMercator;
use Geodesy\Location\LatLong;
use Geodesy\Datum\WGS84;

class LLA2WebMercator extends BaseConversion implements ConversionInterface
{

	protected $latlong;

	protected $webmercator;

	protected $datum;

    public function __construct(LatLong $latlong)
    {
    	parent::__construct();
        $this->webmercator = new WebMercator;
        $this->latlong = $latlong;
        $this->datum = new WGS84; // always set it to WGS84 when converting from LLA to WebMercator
    }

	public function convert(): WebMercator
    {

        $lat = deg2rad($this->latlong->getLatitude());

        $long = deg2rad($this->latlong->getLongitude());

        $f = $this->datum->getSemiMajorAxis();

		$sinLat = sin($lat);

        $this->webmercator->setX($this->getUnit()->convert(($f * 0.5) * log((1.0 + $sinLat) / (1.0 - $sinLat))));

        $this->webmercator->setY($this->getUnit()->convert($f * $long));

        return $this->webmercator;

    }


}