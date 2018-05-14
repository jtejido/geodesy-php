<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class ED77 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "European Datum 1950(1977)",
			'CRS' => 4154,
			'TranslationVectors' => array(
				'x' => 117,
				'y' => 132,
				'z' => 164,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Iran",
			'Remarks' => "Given by DMA as from ED50. OGP interpret that as ED50(ED77) in Iran. Derived at 27 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 9m, 12m and 11m in X, Y and Z axes.",
			'Origin' => "Extension of ED50 over Iran.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}