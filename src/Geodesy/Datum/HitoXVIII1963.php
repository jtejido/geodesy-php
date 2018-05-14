<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class HitoXVIII1963 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Hito XVIII 1963",
			'CRS' => 4254,
			'TranslationVectors' => array(
				'x' => -16,
				'y' => -196,
				'z' => -93,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "South America - Tierra del Fuego",
			'Remarks' => "Derived at 2 stations. As the source CRS was used for the border survey this transformation is probably also applicable to adjacent areas of Argentina.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "Accuracy 25m in each axis.",
			'Origin' => "Chile-Argentina boundary survey.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}