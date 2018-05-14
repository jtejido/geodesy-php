<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class ST87Ouvea extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "ST87 Ouvea",
			'CRS' => 4750,
			'TranslationVectors' => array(
				'x' => 56.263,
				'y' => -16.136,
				'z' => 22.856,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "New Caledonia - Ouvea",
			'Remarks' => "Parameter values taken from ST87 Ouvea to RGNC91-93 (1) ( code 15885) assuming that RGNC91-93 is equivalent to WGS 84 to within the accuracy of the transformation.",
			'Source' => "Service Topographique de la Nouvelle Caledonie, Direction des Infrastructures, de la Topographie et des Transports Terrestres. www.dittt.gouv.nc",
			'Scope' => "Accuracy better than +/- 1 metre.",
			'Origin' => "Ouloup.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}