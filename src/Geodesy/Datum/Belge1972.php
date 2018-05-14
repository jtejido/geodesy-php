<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Belge1972 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reseau National Belge 1972",
			'CRS' => 4313,
			'TranslationVectors' => array(
				'x' => 106.8686,
				'y' => -52.2978,
				'z' => 103.7239,
			),
			'RotationalVectors' => array(
				'x' => -0.3366,
				'y' => 0.457,
				'z' => -1.8422,
			),
			'Scale' => 1.2747,
			'Area' => "Belgium - onshore",
			'Remarks' => "Parameter values from BD72 to ETRS89 (2) (code 15928) assuming that ETRS89 is equivalent to WGS 84 within the accuracy of the tfm. Scale difference is given by information source as -1.0000012747; given in this record in ppm to assist application usage.",
			'Source' => "IGN Brussels www.ngi.be",
			'Scope' => "For applications to an accuracy of 1 metre.",
			'Origin' => "Fundamental point: Uccle observatory. Latitude: 50 degrees 47 minutes 57.704 seconds N, longitude: 4 degrees 21 minutes 24.983 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}