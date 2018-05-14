<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class OldHawaiian extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Old Hawaiian",
			'CRS' => 4135,
			'TranslationVectors' => array(
				'x' => -61,
				'y' => 285,
				'z' => 181,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "USA - Hawaii - onshore",
			'Remarks' => "Derived at 15 satellite stations.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military mapping. Accuracy +/- 25m in X axis, +/- 20m in Y and Z axes.",
			'Origin' => "Fundamental point: Oahu West Base Astro.  Latitude: 21 degrees 18 minutes 13.89 seconds N, longitude 157 degrees 50 minutes 55.79 seconds W (of Greenwich)",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}