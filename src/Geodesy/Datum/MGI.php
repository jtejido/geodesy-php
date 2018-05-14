<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class MGI extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Militar-Geographische Institut",
			'CRS' => 4312,
			'TranslationVectors' => array(
				'x' => -601.705,
				'y' => -84.263,
				'z' => -485.227,
			),
			'RotationalVectors' => array(
				'x' => -4.7354,
				'y' => -1.3145,
				'z' => -5.393,
			),
			'Scale' => 2.3887,
			'Area' => "Austria",
			'Remarks' => "May be taken as approximate transformation MGI to ETRS89 assuming ETRS89 is equivalent to WGS 84 within the accuracy of the transformation - see tfm code 1024. Information source gives scale as -2.388739 ppm.",
			'Source' => "Amt der Steiermarkischen Landesregierung; GIS-STMK. www.gis.steiermark.at",
			'Scope' => "Provincial GIS and other applications to an accuracy of 0.5 metres.",
			'Origin' => "Fundamental point: Hermannskogel. Latitude: 48 degrees 16 minutes 15.29 seconds N, longitude: 16 degrees 17 minutes 41.06 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}