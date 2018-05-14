<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Abidjan1987 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Abidjan 1987",
			'CRS' => 4143,
			'TranslationVectors' => array(
				'x' => 124.76,
				'y' => -53,
				'z' => -466.79,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Cote d'Ivoire (Ivory Coast)",
			'Remarks' => "Derived in Abidjan for use in the immediate area, but used by E&P industry more widely onshore and offshore. A similar transformation (tfm code 6872) was used by Western Geophysical for offshore surveys in the 1990s.",
			'Source' => "IGN Paris",
			'Scope' => "Accuracy is submetre in the area around Abidjan but unknown farther afield. There is some evidence of unknown reliability that suggests accuracy of better than 2m throughout offshore.",
			'Origin' => "Fundamental point: Abidjan I. Latitude: 5 degrees 18 minutes 51.01 seconds N, longitude: 4 degrees 02 minutes 06.04 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}