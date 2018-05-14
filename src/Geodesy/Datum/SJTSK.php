<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class SJTSK extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "System of the Unified Trigonometrical Cadastral Network",
			'CRS' => 4156,
			'TranslationVectors' => array(
				'x' => -589,
				'y' => -76,
				'z' => -480,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Europe - Czechoslovakia",
			'Remarks' => "Derived at 6 stations.",
			'Source' => "U.S. National Imagery and Mapping Agency TR8350.2 revision of October 1997; http://earth-info.nga.mil/GandG/tr8350/tr8350_2.html",
			'Scope' => "For military purposes. Accuracy 4m, 2m and 3m in X, Y and Z axes.",
			'Origin' => "Modification of Austrian MGI datum, code 6312.",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}