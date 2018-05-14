<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class MAGNASIRGAS extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Marco Geocentrico Nacional de Referencia",
			'CRS' => 4686,
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
			'Area' => "Colombia",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "MAGNA-SIRGAS is a national realization of SIRGAS and coincident with WGS 84 to within 1 metre. This transformation has an accuracy equal to the coincidence figure.",
			'Origin' => "Documented as ITRF94 at epoch 1995.4 but possibly a rounded value as SIRGAS95 is at epoch 1995.42. Bogota observatory coordinates: Latitude: 4 degrees 35 minutes 46.3215 seconds N, longitude: 74 degrees 04 minutes 39.0285 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}