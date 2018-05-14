<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class Israel1993 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Israel 1993",
			'CRS' => 4141,
			'TranslationVectors' => array(
				'x' => 48,
				'y' => -55,
				'z' => -52,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Asia - Middle East - Israel and Palestine Territory onshore",
			'Remarks' => "For more accurate transformation contact Survey of Israel.",
			'Source' => "Survey of Israel",
			'Scope' => "Accuracy: 2m",
			'Origin' => "Fundamental point:  Latitude: 31 degrees 44 minutes 03.817 seconds N, longitude: 35 degrees 12 minutes 16.261 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}