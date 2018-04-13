Geodesy-PHP
=============

Geodesy-PHP is a PHP port of some known geodesic functions for getting distance from a known point A to a known point B, given their latitude and longitude (good for working out distances between latitude/longitude data provided by Google Maps or any Restful APIs).

This has been helpful to me at a time when working out the distance between different vendors and the user's location (and check if they're within a certain range).

It provides distance calculations by:

1. [Spherical Law of Cosines](https://en.wikipedia.org/wiki/Spherical_law_of_cosines) 

2. [Haversine formula](https://en.wikipedia.org/wiki/Haversine_formula)

3. [Vincenty's formulae](https://en.wikipedia.org/wiki/Vincenty%27s_formulae)


### Usage: ###


Both **HaversineFormula** and **SphericalCosine** Class gives results in kilometer/s while the more accurate **VincentyFormula** is in meter/s.


```
use Geodesy\Location\LatLong;
use Geodesy\Distance\HaversineFormula;
use Geodesy\Distance\VincentyFormula;
use Geodesy\Distance\SphericalCosine;

$lat1 = 48.148636;
$long1 = 17.107558;

$lat2 = 48.208810;
$long2 = 16.372477;

$loc1 = new LatLong;
$loc1->setLatitude($lat1);
$loc1->setLongitude($long1);


$loc2 = new LatLong;
$loc2->setLatitude($lat2);
$loc2->setLongitude($long2);



$distance = new HaversineFormula($loc1, $loc2);

// get the distance
$distance->getDistance();

/** 
 * Is within range?
 * Haversine and Cosine both assumes the value as kilometer/s while VincentyFormula is in meter/s.
 */
$distance->isInRange(500);
```