<?php

namespace Geodesy\Datum;

use Geodesy\Models\AiryModified;

class Irl1975 extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new AiryModified);
    }

    public function datum()
    {
        return array (
            'TranslationVectors' => array(
                'x' => -482.530,
                'y' => 130.596,
                'z' => -564.557,
                ),
            'RotationalVectors' => array (
                'x' => -1.042,
                'y' => -0.214,
                'z' => -0.631,
                ),
            'Scale' => -8.150,
        );
    }

}