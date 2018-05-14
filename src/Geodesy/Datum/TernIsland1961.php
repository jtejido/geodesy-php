<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class TernIsland1961 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Tern Island 1961",
			'CRS' => 4707,
			'TranslationVectors' => array(
				'x' => -114,
				'y' => 116,
				'z' => 333,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "USA - Hawaii - Tern Island and Sorel Atoll",
			'Remarks' => "Derived at 1 satellite station. Same transformation parameter values related to same datum area given in original 1987 DMA TR8350.2 edition for Sorol Atoll.",
			'Source' => "DMA / NIMA / NSA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: station FRIG on tern island, station B4 on Sorol Atoll.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}