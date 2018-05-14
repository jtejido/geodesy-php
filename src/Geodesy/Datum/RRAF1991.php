<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RRAF1991 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reseau de Reference des Antilles Francaises 1991",
			'CRS' => 4558,
			'TranslationVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Caribbean - French Antilles",
			'Remarks' => "Approximation at the +/- 1m level assuming that RRAF91 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "WGS 84 coordinates of a single station determined during the 1988 Tango mission.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}