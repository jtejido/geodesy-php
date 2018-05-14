<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class KUDAMS extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Kuwait Utility",
			'CRS' => 4319,
			'TranslationVectors' => array(
				'x' => 20.8,
				'y' => -11.3,
				'z' => -2.4,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Kuwait - Kuwait City",
			'Remarks' => "",
			'Source' => "KOC",
			'Scope' => "For applications requiring an accuracy of better than 1 metre.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}