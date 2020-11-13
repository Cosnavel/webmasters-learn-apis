Documentation
How to use the API?
All the stars in one request
A URL returns all the stars in the database with all the data:

https://api.le-systeme-solaire.net/rest/bodies/
Star by star
A URL returns all the data of a star:

https://api.le-systeme-solaire.net/rest/bodies/{id}
API parameters
# Setting Action
1 data Used to limit the data returned (separated by a comma).
Example:data=id,semimajorAxis,isPlanet
2 exclude Allows you to exclude certain data (separated by a comma).
Example:exclude=id,isPlanet
2 order Allows you to sort the result.
Example: order=semimajorAxis,asc
NB: Only one sorting parameter allowed.
3 page Used to paginate the result of a sorted query. You must specify the page number (number> = 1) and the page size
(size> = 1 and 20 by default).
Example: page=1,10
NB: You cannot use “page” without the “order” parameter.
4 rowData Used to transform objects into a record.
Example: rowData=true
NB: This action can be done in JavaScript on the client side!
NB: The default is false.
5 filter [] Allows you to filter the result. Each filter is made up of data, an operator and a value (separated by a
comma).
Example: filter[]=id,eq,mars
The accepted operators are:
cs (like)
sw (start with)
ew (end with)
eq (equal)
lt (less than)
the (less or equal than)
ge (greater or equal than)
gt (greater than)
bt (between)
All inverse operators exist: ncs - nsw - new - neq - nlt - nle - nge - ngt - nbt.
NB: If a filter is invalid it will be ignored.
6 satisfy Allows you to force whether all filters apply (default choice) or just some.
Example: satisfy=any
NB: the only possible value is any
Available data
# Last name Type Content
1 id string Identifier of the star in the API.
2 name string Name of the star (in French).
3 englishName string English name of the star.
4 isPlanet boolean Is it a planet?
5 moons
[{moon, rel}, ...] array
[{string, string}, ...] Table with all the satellites.
moon: satellite name, rel: API address for the satellite.
6 semimajorAxis integrate The semi-major axis in kilometers.
7 perihelion integrate The perihelion in kilometers.
8 apheion integrate Aphelion in kilometers.
9 eccentricity decimal Orbital eccentricity.
10 inclination decimal The orbital tilt in degrees.
11 mass
{massValue, massExponent} object
{number, integer} The mass of the object in 10 n kg.
massValue: mass of the star, massExponent: exponent 10 of the mass.
12 vol
{volValue, volExponent} object
{number, integer} The volume of the object in 10 n kg.
volValue: volume of the star, volExponent: exponent 10 of the volume.
13 density decimal The toothness of the star in g.cm 3 .
14 gravity decimal The surface gravity in ms -2 .
15 escape decimal The escape speed in ms -1 .
16 meanRadius integrate The average radius in kilometers.
17 equaRadius integrate The equatorial radius in kilometers.
18 polarRadius integrate The polar radius in kilometers.
19 escape flattening Flattening.
20 dimension string Dimension of the star in kilometers on 3 axes X, Y and Z for non-spherical stars.
21 sideralOrbit decimal The period of the star's revolution around another star (the Sun or a planet) in terrestrial
days.
22 sideralRotation decimal The period of rotation of the star, the time necessary for the star to complete a turn on
itself, in hours.
23 aroundPlanet
{planet, rel} object
{string, string} For a satellite, the planet around which the star orbits.
planet: name of the planet, rel: API address for the planet.
24 discoveredBy string Name of the discoverer of the star.
25 discoveryDate string Date of discovery of the star
26 alternativeName string Temporary designation.
27 axialTilt decimal Tilt on the axis.
