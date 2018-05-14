<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class SierraLeone1968 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Sierra Leone 1968",
			'CRS' => 4175,
			'TranslationVectors' => array(
				'x' => 88,
				'y' => -4,
				'z' => -101,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Sierra Leone - onshore",
			'Remarks' => "Determined at 8 stations. Info. source has the source CRS as Sierra Leone 1960. Sierra Leone 1968 is a readjustment of the 1960 network: coordinates changed by less than 3 metres.",
			'Source' => "NIMA TR8350.2 revision 3, 1997.",
			'Scope' => "Accuracy +/- 15m in each axis.",
			'Origin' => "Fundamental point: SLX2 Astro. Latitude: 8 degrees 27 minutes 17.567 seconds N, longitude: 12 degrees 49 minutes 40.186 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}