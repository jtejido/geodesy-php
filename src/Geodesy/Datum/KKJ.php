<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class KKJ extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Kartastokoordinaattijarjestelma (1966)",
			'CRS' => 4123,
			'TranslationVectors' => array(
				'x' => 90.7,
				'y' => 106.1,
				'z' => 119.2,
			),
			'RotationalVectors' => array(
				'x' => 4.09,
				'y' => 0.218,
				'z' => -1.05,
			),
			'Scale' => -1.37,
			'Area' => "Finland - onshore",
			'Remarks' => "Parameter values from KKJ to ETRS89 (1) (code 1638). Assumes ETRS89 and WGS 84 can be considered the same to within the accuracy of the transformation. Replaced by KKJ to WGS 84 (2) (code 10099).",
			'Source' => "OGP",
			'Scope' => "For applications to an accuracy of 1 to 2 metres.",
			'Origin' => "Adjustment with fundamental point SF31 based on ED50 transformed to best fit the older VVJ adjustment.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}