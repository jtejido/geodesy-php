<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class LGD2006 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Libyan Geodetic Datum 2006",
			'CRS' => 4754,
			'TranslationVectors' => array(
				'x' => 208.4058,
				'y' => 109.8777,
				'z' => 2.5764,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Libya",
			'Remarks' => "Derived at 5 stations throughout Libya used to define LGD2006 in May 2006.",
			'Source' => "Survey Department of Libya.",
			'Scope' => "For applications to an accuracy of 0.1 metre.",
			'Origin' => "5 stations tied to ITRF2000 through 8 days of continuous observations in May 2006.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}