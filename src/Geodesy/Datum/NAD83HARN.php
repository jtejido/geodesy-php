<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class NAD83HARN extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "NAD83 (High Accuracy Reference Network)",
			'CRS' => 4152,
			'TranslationVectors' => array(
				'x' => 0.9738,
				'y' => -1.9453,
				'z' => -0.5486,
			),
			'RotationalVectors' => array(
				'x' => -0.00000013357,
				'y' => -0.00000004872,
				'z' => -0.00000005507,
			),
			'Scale' => 0,
			'Area' => "USA - HARN",
			'Remarks' => "Approximation derived ignoring time-dependent parameters and assuming ITRF94(1996.0) and WGS 84, plus NAD83(CORS94) and NAD83(HARN), can be considered the same within the accuracy of the transformation. Replaced by NAD83(HARN) to WGS 84 (3) (code 1901).",
			'Source' => "US National Geodetic Survey http://www.ngs.noaa.gov/CORS/Derivation.html",
			'Scope' => "Historical record only - superseded - see remarks.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}