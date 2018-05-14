<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Chua extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Chua",
			'CRS' => 4224,
			'TranslationVectors' => array(
				'x' => 143.87,
				'y' => -243.37,
				'z' => 33.52,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "South America - Brazil - south of 18?S and west of 54?W + DF; N Paraguay",
			'Remarks' => "Mandatory for SICAD use until 2005. Replaced by Chua to SIRGAS 2000 (tfm code 4069).",
			'Source' => "Sistema Cartogr?fico do Distrito Federal",
			'Scope' => "Used by governmental agencies in Distrito Federal until adoption of SIRGAS 2000 by Brazil in 2005. Legally mandated for Cartography System of Distrito Federal (SICAD) until 2005.",
			'Origin' => "Fundamental point: Chua. Latitude: 19 degrees 45 minutes 41.160 seconds S, longitude: 48 degrees 06 minutes 07.560 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}