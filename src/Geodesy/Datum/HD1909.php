<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class HD1909 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Hungarian Datum 1909",
			'CRS' => 3819,
			'TranslationVectors' => array(
				'x' => -595.48,
				'y' => -121.69,
				'z' => -515.35,
			),
			'RotationalVectors' => array(
				'x' => -4.115,
				'y' => 2.9383,
				'z' => -0.853,
			),
			'Scale' => 3.408,
			'Area' => "Hungary",
			'Remarks' => "Horizontal coordinates of 66 points of the National Geodetic Network were used to compute this transformation.",
			'Source' => "Timar, Molnar and Marta in Geodezia es Kartografia 55(3) pp16-21. www.fomi.hu/internet/magyar/szaklap/geodkart.htm",
			'Scope' => "GIS and topographic survey.",
			'Origin' => "Fundamental point not given in information source, but presumably Szolohegy which is origin of later HD72.",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}