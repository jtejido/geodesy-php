<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class CapeCanaveral extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Cape Canaveral",
			'CRS' => 4717,
			'TranslationVectors' => array(
				'x' => 2,
				'y' => -151,
				'z' => -181,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "North America - Bahamas and USA - Florida - onshore",
			'Remarks' => "Derived at 19 satellite stations.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "US space and military operations. Accuracy +/- 3 m in each axis.",
			'Origin' => "Fundamental point: Central 1950.  Latitude: 28 degrees 29 minutes 32.36555 seconds N, longitude 80 degrees 34 minutes 38.77362 seconds W (of Greenwich)",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}