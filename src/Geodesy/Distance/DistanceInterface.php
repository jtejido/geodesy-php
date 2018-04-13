<?php

namespace Geodesy\Distance;

interface DistanceInterface
{

    public function getDistance();

    public function isInRange($range);
    
}
