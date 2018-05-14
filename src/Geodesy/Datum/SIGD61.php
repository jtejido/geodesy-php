<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class SIGD61 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Sister Islands Geodetic Datum 1961",
			'CRS' => 4726,
			'TranslationVectors' => array(
				'x' => -42,
				'y' => -124,
				'z' => -147,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Cayman Islands - Little Cayman and Cayman Brac",
			'Remarks' => "Determined from 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military mapping. Accuracy +/- 25m in each axis.",
			'Origin' => "Fundamental point: LC5. Latitude: 19 degrees 39 minutes 46.324 seconds N, longitude: 80 degrees 03 minutes 47.910 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}