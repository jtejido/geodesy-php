<?php

namespace Geodesy\Models;


class WGS72Model extends BaseModel implements ModelInterface
{

    CONST SEMI_MAJOR_AXIS = 6378135;

    CONST SEMI_MINOR_AXIS = 6356750.5200161;

    CONST FLATTENING = 298.26;

}