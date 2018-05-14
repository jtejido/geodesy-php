<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class NordSahara1959 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Nord Sahara 1959",
			'CRS' => 4307,
			'TranslationVectors' => array(
				'x' => 181.7,
				'y' => -64.7,
				'z' => -247.2,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Algeria",
			'Remarks' => "Derived at 1 astro station central to concession. Significant and varying differences (>100m) known to exist in neighbouring astro stations.",
			'Source' => "Groupement Isarene.",
			'Scope' => "Oil industry operations.",
			'Origin' => "Coordinates of primary network readjusted on ED50 datum and then transformed conformally to Clarke 1880 (RGS) ellipsoid.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}