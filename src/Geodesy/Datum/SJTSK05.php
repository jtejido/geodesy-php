<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class SJTSK05 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "System of the Unified Trigonometrical Cadastral Network/05",
			'CRS' => 5228,
			'TranslationVectors' => array(
				'x' => -572.213,
				'y' => -85.334,
				'z' => -461.94,
			),
			'RotationalVectors' => array(
				'x' => -4.9732,
				'y' => -1.529,
				'z' => -5.2484,
			),
			'Scale' => -3.5378,
			'Area' => "Czech Republic",
			'Remarks' => "Parameter values from S-JTSK/05 to ETRS89 (1) (code 5226). Assumes ETRS89 and WGS 84 can be considered the same to within the accuracy of the transformation. Replaces tfm code 1622.",
			'Source' => "OGP",
			'Scope' => "For applications to an accuracy of 1 metre.",
			'Origin' => "Constrained to S-JTSK but realised through readjustment in projected CRS domain. Related to ETRS89 R05 realisation through transformation code 5226.",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}