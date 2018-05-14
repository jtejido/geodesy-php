<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RGPF extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reseau Geodesique de la Polynesie Francaise",
			'CRS' => 4687,
			'TranslationVectors' => array(
				'x' => -0.072,
				'y' => 0.507,
				'z' => 0.245,
			),
			'RotationalVectors' => array(
				'x' => 0.0183,
				'y' => -0.0003,
				'z' => 0.007,
			),
			'Scale' => 0.0093,
			'Area' => "French Polynesia",
			'Remarks' => "Transformation is to original definition of WGS 84. It is consistent with later WGS 84 realisations G730, G873 and G1150 to no better than 1m.",
			'Source' => "Gouvernement de la Polyn?sie Fran?aise, Service de l'Urbanisme, Section topographie. Also www.shom.fr, technical report 002/199.",
			'Scope' => "Accuracy +/- 0.5 metre (to original definition of WGS 84 - see remarks).",
			'Origin' => "ITRF92 at epoch 1993.0. Densification by GPS of the Reference Network of French Polynesia, a coordinate set of 13 stations determined through DORIS observations.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}