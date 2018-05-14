<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class SJTSKJTSK03 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "System of the Unified Trigonometrical Cadastral Network [JTSK03]",
			'CRS' => 8351,
			'TranslationVectors' => array(
				'x' => -485.021,
				'y' => -169.465,
				'z' => -483.839,
			),
			'RotationalVectors' => array(
				'x' => -7.786342,
				'y' => -4.397554,
				'z' => -4.102655,
			),
			'Scale' => 0,
			'Area' => "Slovakia",
			'Remarks' => "Parameter values taken from S-JTSK [JTSK03] to ETRS89 (1) (code 8367) assuming that ETRS89 (ETRF2000 realization) is coincident with WGS 84 within the accuracy of the transformation. Within the 1m accuracy of this transformation, it is reversible.",
			'Source' => "Geodesy, Cartography and Cadastre Authority of Slovak Republic (UGKK SR).",
			'Scope' => "Approximation at the +/- 1m level.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}