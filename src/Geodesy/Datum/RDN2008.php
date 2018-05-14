<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RDN2008 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Rete Dinamica Nazionale 2008",
			'CRS' => 6706,
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
			'Area' => "Italy - including San Marino and Vatican",
			'Remarks' => "Approximation at the +/- 1m level assuming that ETRS89 is equivalent to WGS 84. RDN2008 is a regional realisation of ETRS89.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Italian densification of ETRS89 realised through network of 99 permanent reference stations in ETRF2000@2008.0.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}