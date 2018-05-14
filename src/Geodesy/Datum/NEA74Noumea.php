<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class NEA74Noumea extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "NEA74 Noumea",
			'CRS' => 4644,
			'TranslationVectors' => array(
				'x' => 10.18,
				'y' => 350.43,
				'z' => -291.37,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "New Caledonia - Grande Terre - Noumea",
			'Remarks' => "Parameter values taken from NEA74 Noumea to RGNC91-93 (1) ( code 15886) assuming that RGNC91-93 is equivalent to WGS 84 to within the accuracy of the transformation.",
			'Source' => "Service Topographique de la Nouvelle Caledonie, Direction des Infrastructures, de la Topographie et des Transports Terrestres. www.dittt.gouv.nc",
			'Scope' => "Accuracy 1 metre.",
			'Origin' => "Noumea old signal station.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}