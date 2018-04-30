
![Earth](https://www.mkompf.com/gps/images/sphere2.png)


Geodesy-PHP
=============

Geodesy-PHP is a port of some known geodesic/math functions for getting distance from a known point A to a known point B given their coordinates (good for working out distances between different latitude/longitude data provided by Google Geolocation or any RESTful APIs).

It also supports conversion between units of length, Polar position to Cartesian coordinates, and different Reference Datums.

It provides distance calculations by:


### [Great-circle distance](https://en.wikipedia.org/wiki/Great-circle_distance) ###

1. [Spherical Law of Cosines](https://en.wikipedia.org/wiki/Spherical_law_of_cosines) 

2. [Haversine Formula](https://en.wikipedia.org/wiki/Haversine_formula)


### [Ellipsoid Geodesics](https://en.wikipedia.org/wiki/Geodesics_on_an_ellipsoid) ###

1. [Vincenty's Formula](https://en.wikipedia.org/wiki/Vincenty%27s_formulae)

2. [Hubeny's Formula](https://www.geo.tuwien.ac.at/fileadmin/editors/VGI/VGI_195403_Hubeny.pdf)

3. [Thomas' Formula](http://www.dtic.mil/dtic/tr/fulltext/u2/703541.pdf)

4. [Andoyer-Lambert Formula](https://navlib.net/wp-content/uploads/2013/10/admiralty-manual-of-navigation-vol-1-1964-english501c.pdf)

5. [Elliptic Distance](http://edukacja.3bird.pl/download/fizyka/astronomia-jean-meeus-astronomical-algorithms.pdf)

6. [Forsythe-Andoyer-Lambert Formula](http://www2.unb.ca/gge/Pubs/TR77.pdf)



## Unit Conversion ##


All operations are set in *Metre*. But it can also convert distance (and other transformation) values to:


1. Kilometre

2. Mile

3. Nautical Mile

4. Astronomical Unit



## Position Conversion ##


It also allows coordinate/geographical conversions between the ff:


1. Polar to Cartesian

2. Cartesian to Polar

3. Polar to Web Mercator

4. Web Mercator to Polar



## Transformation Options ##


Reference Datums are, by default, set to WGS84. You can also transform one coordinate taken from a different source to another (see [this](https://epsg.io/) for reference), as it also comes with some pre-built datums (though very limited in number as it has little use for me aside from WGS84, i.e. at the time of writing this). 

The following are the transformer options:


1. 3-Parameter Molodensky Transformer

2. 7-Parameter Helmert Transformer

3. 10-Parameter Molodensky-Badekas Transformer



Documentation
=============

You can read about it [here](https://myth-of-sissyphus.blogspot.com/2018/04/geodesyphp-great-earth-distance-library.html)