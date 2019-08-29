<?php

namespace Geodesy\Distance;

use Geodesy\Datum\WGS84;
use Geodesy\Location\LatLong;
use Geodesy\Transformer\MolodenskyBadekasTransform;
use Geodesy\Transformer\TransformerInterface;
use Geodesy\Unit\Metre;
use Geodesy\Unit\UnitInterface;

abstract class BaseDistance {

	protected $source;

	protected $destination;

	protected $commonDatum;

	protected $unit;

	protected $transformer;

	public function __construct(LatLong $source, LatLong $destination) {
		$this->source = $source;
		$this->destination = $destination;
		$this->unit = new Metre; // default unit
		$this->commonDatum = new WGS84;
		$this->transformer = new MolodenskyBadekasTransform;
	}

	protected function getSourceLatitude(): float {
		return deg2rad($this->source->getLatitude());
	}

	protected function getSourceLongitude(): float {
		return deg2rad($this->source->getLongitude());
	}

	protected function getDestinationLatitude(): float {
		return deg2rad($this->destination->getLatitude());
	}

	protected function getDestinationLongitude(): float {
		return deg2rad($this->destination->getLongitude());
	}

	public function setTransformer(TransformerInterface $transformer) {
		$this->transformer = $transformer;
	}

	public function getTransformer(): TransformerInterface {
		return $this->transformer;
	}

	public function setUnit(UnitInterface $unit) {
		$this->unit = $unit;
	}

	protected function getUnit(): UnitInterface {
		return $this->unit;
	}

	public function getDistance(): float{
		$this->checkDatum();
		return round($this->getUnit()->convert($this->distance()), 3);
	}

	public function checkDatum() {

		$sourceDatum = $this->source->getReference();
		$destinationDatum = $this->destination->getReference();

		if (!$sourceDatum instanceof WGS84) {
			$this->source = $this->getTransformer()->transform($this->source, new WGS84);
		}

		if (!$destinationDatum instanceof WGS84) {
			$this->destination = $this->getTransformer()->transform($this->destination, new WGS84);
		}
	}

	protected function getSemiMajorAxis(): float {
		return $this->commonDatum->getSemiMajorAxis();
	}

	protected function getSemiMinorAxis(): float {
		return $this->commonDatum->getSemiMinorAxis();
	}

	protected function getInverseFlattening(): float {
		return $this->commonDatum->getInverseFlattening();
	}

	public function getSecondEccentricitySquared(): float {
		return $this->commonDatum->getSecondEccentricitySquared();
	}

	public function isInRange(float $range): bool {
		return $this->getDistance() <= $this->getUnit()->convert($range);
	}

}