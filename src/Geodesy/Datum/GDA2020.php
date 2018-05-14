<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class GDA2020 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Geocentric Datum of Australia 2020",
			'CRS' => 7844,
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
			'Area' => "Australia - GDA",
			'Remarks' => "Approximation at the 3m level assuming WGS 84 is equivalent to ITRF2014 within the accuracy of the transformation. See GDA2020 to WGS 84 (G1762) (1) (code 8448) for a better approximation and ITRF2014 to GDA2020 (1) (code 8049) for actual relationship.",
			'Source' => "Geoscience Australia, geodesy section.",
			'Scope' => "Spatial referencing with 3-metre accuracy.",
			'Origin' => "ITRF2014 at epoch 2020.0.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}