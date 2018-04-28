<?php

namespace Geodesy\Models;


class WGS84Model extends BaseModel implements ModelInterface
{

    CONST SEMI_MAJOR_AXIS = 6378137;

    CONST SEMI_MINOR_AXIS = 6356752.314245;

    CONST FLATTENING = 298.257223563;

}