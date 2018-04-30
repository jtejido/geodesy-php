<?php

namespace Geodesy\Transformer;

use Geodesy\Location\LatLong;
use Geodesy\Datum\DatumInterface;

interface TransformerInterface
{
	public function transform(LatLong $source, DatumInterface $destinationDatum);
}
