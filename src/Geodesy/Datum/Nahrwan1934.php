<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Nahrwan1934 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Nahrwan 1934",
			'CRS' => 4744,
			'TranslationVectors' => array(
				'x' => 242.2,
				'y' => 144.9,
				'z' => -370.3,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Asia - Middle East - Iraq and SW Iran",
			'Remarks' => "Derived by concatenation of parameter values published by IGN Paris from Nahrwan 1934 to WGS 72 at the Nahrwan SE Base station near Baghdad with DMA WGS 72 to WGS 84 parameter values. For more accurate transformation away from origin see codes 7008-7032.",
			'Source' => "Total",
			'Scope' => "Oil exploration.",
			'Origin' => "Fundamental point: Nahrwan south base.  Latitude: 33 degrees 19 minutes 10.87 seconds N, longitude: 44 degrees 43 minutes 25.54 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}