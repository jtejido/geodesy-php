<?php

namespace Geodesy\Constants;

class Constants
{

    // Since earth has been considered spherical in most (Law of Cosine and Haversine) formulas here, we'll have the Earth's mean radius
	CONST SPHERICAL_R = 6371000;

    // WGS-84 semi-major axis
    CONST A = 6378137;

    // WGS-84 semi-minor axis
    CONST B = 6356752.314245;

    // WGS-84 flattening
    CONST F = 1 / 298.257223563;

    // WGS-84 eccentricity
    CONST ECCENTRICITY = 0.0818191908426215;


}