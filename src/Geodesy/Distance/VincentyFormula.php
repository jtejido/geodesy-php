<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

class VincentyFormula extends BaseDistance implements DistanceInterface
{

    public function __construct(LatLong $source, LatLong $destination)
    {
        parent::__construct($source, $destination);
    }

    /**
     * Vincenty's formula is using an accurate ellipsoidal model of the earth as opposed to a pressumably perfectly spherical shape.
     * Vincenty’s solution for the distance between points on an ellipsoidal earth model is accurate to within a millimeter.
     * While it doesn't appear to take into account the seismic activity of the earth (yes, where we are right now isn't the same next month 
     * or year, and so on), it depends on standards to give out a precise latitude and longitude data (http://itrf.ign.fr/ITRF_solutions/2014)
     * This is a long formula (we use the indirect):
     * https://en.wikipedia.org/wiki/Vincenty%27s_formulae
     */
    public function distance()
    {
        $lat1 = deg2rad($this->source->getLatitude());
        $lat2 = deg2rad($this->destination->getLatitude());
        $long1 = deg2rad($this->source->getLongitude());
        $long2 = deg2rad($this->destination->getLongitude());
        $a = 6378137;
        $b = 6356752.314245;
        $f = 1 / 298.257223563;
        $L = $long2 - $long1;
        $U1 = atan((1 - $f) * tan($lat1));
        $U2 = atan((1 - $f) * tan($lat2));
        $sinU1 = sin($U1);
        $cosU1 = cos($U1);
        $sinU2 = sin($U2);
        $cosU2 = cos($U2);
        $lambda = $L;
        $iterLimit = 100;
        do 
        {
            $sinLambda = sin($lambda);
            $cosLambda = cos($lambda);
            $sinSigma = sqrt(pow(($cosU2 * $sinLambda), 2) + pow(($cosU1 * $sinU2 - $sinU1 * $cosU2 * $cosLambda),2));
            if ($sinSigma == 0) 
            {
                return 0;
            }

            $cosSigma = $sinU1 * $sinU2 + $cosU1 * $cosU2 * $cosLambda;
            $sigma = atan2($sinSigma, $cosSigma);
            $sinAlpha = ($cosU1 * $cosU2 * $sinLambda) / $sinSigma;
            $cosSqAlpha = 1 - $sinAlpha * $sinAlpha;
            $cos2SigmaM = $cosSigma - 2 * $sinU1 * $sinU2 / $cosSqAlpha;

            if (is_nan($cos2SigmaM)) {
                $cos2SigmaM = 0;
            } 

            $C = $f / 16 * $cosSqAlpha * (4 + $f * (4 - 3 * $cosSqAlpha));
            $lambda_prime = $lambda;
            $lambda =    $L + (1 - $C) * $f * $sinAlpha  
                        *   ($sigma + $C * $sinSigma   
                                *   ($cos2SigmaM + $C * $cosSigma
                                        *   (-1 + 2 * $cos2SigmaM * $cos2SigmaM)
                                    )
                            );
        
        } while (abs($lambda - $lambda_prime) > 1e12 && --$iterLimit > 0);

        if ($iterLimit == 0) 
        {
            return 0; // Failed to converge
        }

        $uSq = $cosSqAlpha * (pow($a, 2)- pow($b, 2)) / ($b * $b);
        $A = 1 + $uSq / 16384
                * (4096 + $uSq * (-768 + $uSq * (320 - 175 * $uSq)));
        $B = $uSq / 1024 * (256 + $uSq * (-128 + $uSq * (74 - 47 * $uSq)));
        $deltaSigma = 
                    $B * $sinSigma
                        * ($cos2SigmaM + $B / 4
                            * ($cosSigma 
                                * (-1 + 2 * $cos2SigmaM * $cos2SigmaM) - $B / 6 * $cos2SigmaM
                                    * (-3 + 4 * $sinSigma * $sinSigma)
                                        * (-3 + 4 * $cos2SigmaM * $cos2SigmaM)));
        
        $s = $b * $A * ($sigma - $deltaSigma);
        
        return $s / 1000;
    }    

}