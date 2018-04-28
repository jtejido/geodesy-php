<?php

namespace Geodesy\Unit;

interface UnitInterface
{
	public function convert(float $value): float;
}
