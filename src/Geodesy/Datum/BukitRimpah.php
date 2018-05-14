<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class BukitRimpah extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Bukit Rimpah",
			'CRS' => 4219,
			'TranslationVectors' => array(
				'x' => 384,
				'y' => -664,
				'z' => 48,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Indonesia - Banga & Belitung Islands",
			'Remarks' => "Accuracy estimate not available.",
			'Source' => "U.S. National Imagery and Mapping Agency TR8350.2 revision of October 1997; http://earth-info.nga.mil/GandG/tr8350/tr8350_2.html",
			'Scope' => "For military purposes.",
			'Origin' => "2 degrees 00 minutes 40.16 seconds S, 105 degrees 51 minutes 39.76 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}