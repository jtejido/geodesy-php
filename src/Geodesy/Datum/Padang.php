<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class Padang extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Padang 1884",
			'CRS' => 4280,
			'TranslationVectors' => array(
				'x' => 377,
				'y' => -681,
				'z' => 50,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Indonesia - Sumatra",
			'Remarks' => "Note: U.S. Defense Mapping Agency TR8350.2 September 1987 gives source CRS as Batavia and area as Sumatra. The Batavia (Genuk) CRS applies to Java, not Sumatra. EPSG presumes the source CRS should be Padang. Derived at 5 stations.",
			'Source' => "IOGP based on U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 3m in each axis.",
			'Origin' => "Fundamental point: Padang.",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}