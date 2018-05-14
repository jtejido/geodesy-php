<?php

namespace Geodesy\Datum;

use Geodesy\Models\AverageTerrestrialSystem1977;

class ATS77 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Average Terrestrial System 1977",
			'CRS' => 4122,
			'TranslationVectors' => array(
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Canada - Maritime Provinces",
			'Remarks' => "Parameter file is from ATS77 to NAD83(CSRS) (3) (code 1850) assuming that NAD83(CSRS) is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new AverageTerrestrialSystem1977);
	}

}