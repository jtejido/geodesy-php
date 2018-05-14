<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Naparima1972 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Naparima 1972",
			'CRS' => 4271,
			'TranslationVectors' => array(
				'x' => 2,
				'y' => -374,
				'z' => -172,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Trinidad and Tobago - Tobago - onshore",
			'Remarks' => "DMA does not differentiate between Naparima 1955 (Trinidad) and Naparima 1972 (Tobago). Consequently for Trinidad IOGP has duplicated this transformation as Naparima 1955 to WGS 84 (3) - see code 1556.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy given by DMA is 15m in each axis.",
			'Origin' => "Fundamental point: Naparima. Latitude: 10 degrees 16 minutes 44.860 seconds N, longitude: 61 degrees 27 minutes 34.620 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}