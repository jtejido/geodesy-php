<?php

namespace Geodesy\Datum;

use Geodesy\Models\PZ90;

class PZ90 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Parametry Zemli 1990",
			'CRS' => 4740,
			'TranslationVectors' => array(
				'x' => 1.08,
				'y' => 0.27,
				'z' => 0.9,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => -0.16,
			),
			'Scale' => 0.12,
			'Area' => "World",
			'Remarks' => "Mandated for use in Russia by GosStandard of Russia Decree #327 of August 9, 2001. Republished but with one significant figure less precision to parameter values in GOST R 51794-2008 of December 18 2008.",
			'Source' => "GOST R 51794-2001, approved by GosStandard of Russia Decree #327 of August 9, 2001.",
			'Scope' => "Geodetic applications. Accuracy better than 0.5 metre.",
			'Origin' => "Defined through coordinates of stations of the satellite geodetic network (SGN) in Russia at epoch 1990.0.",
		);

	public function __construct()
	{
		parent::__construct(new PZ90);
	}

}