<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest18301937Adjustment;

class SLD99 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Sri Lanka Datum 1999",
			'CRS' => 5233,
			'TranslationVectors' => array(
				'x' => 0.293,
				'y' => -766.95,
				'z' => -87.713,
			),
			'RotationalVectors' => array(
				'x' => -0.195704,
				'y' => -1.695068,
				'z' => -3.473016,
			),
			'Scale' => 0.039338,
			'Area' => "Sri Lanka - onshore",
			'Remarks' => "Derived at 58 stations.",
			'Source' => "Abeyratne, Featherstone and Tantrigoda in Survey Review vol. 42 no. 317 (July 2010).",
			'Scope' => "Accuracy 14m.",
			'Origin' => "Fundamental point: ISM Diyatalawa. Latitude: 6 degrees 49 minutes 02.687 seconds N, longitude: 80 degrees 57 minutes 40.880 seconds E.",
		);

	public function __construct()
	{
		parent::__construct(new Everest18301937Adjustment);
	}

}