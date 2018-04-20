<?php

namespace Geodesy\Constants;

class Constants
{

    // Since earth has been considered spherical in most (Law of Cosine and Haversine) formulas here, we'll have the Earth's mean radius
	CONST SPHERICAL_R = 6371.000;

    // WGS-84 semi-major axis
    CONST WGS_R = 6378.137;

    // WGS-84 first eccentricity
    CONST E = 8.1819190842622e-2;

}