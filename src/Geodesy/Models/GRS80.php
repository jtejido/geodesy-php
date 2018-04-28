<?php

namespace Geodesy\Models;


class GRS80 extends BaseModel implements ModelInterface
{

    CONST SEMI_MAJOR_AXIS = 6378137;

    CONST SEMI_MINOR_AXIS = 6356752.3141404;

    CONST FLATTENING = 298.257222101;

}