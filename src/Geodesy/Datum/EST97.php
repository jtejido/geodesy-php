<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class EST97 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Estonia 1997",
			'CRS' => 4180,
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
			'Area' => "Estonia",
			'Remarks' => "Parameter values taken from EST97 to ETRS89 (1) (code 1648). Assumes ETRS89 and WGS 84 can be considered the same to within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "For applications to an accuracy of 1 metre.",
			'Origin' => "Densification of ETRS89 during EUREF-ESTONIA97 campaign through transformation from ITRF96 at epoch 1997.56.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}