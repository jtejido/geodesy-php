<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Cadastre1997 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Cadastre 1997",
			'CRS' => 4475,
			'TranslationVectors' => array(
				'x' => 381.788,
				'y' => 57.501,
				'z' => 256.673,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Mayotte - onshore",
			'Remarks' => "Parameter values taken from Cadastre 1997 to RGM04 (1) (transformation code 4478) assuming that RGM04 is coincident with WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Coordinates of 1 station of Combani 1950 adjustment held fixed.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}