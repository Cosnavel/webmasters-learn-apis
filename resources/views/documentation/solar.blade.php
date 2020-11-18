@extends('layouts.markdown')

@section('content')


@markdown

# Solar System API Dokumentation

<a name="intro"></a>
### Einführung

Willkommen zur Solar System API! Diese Dokumentation soll Ihnen helfen, sich mit den verfügbaren Ressourcen vertraut zu machen und wie Sie diese mit HTTP-Anfragen verwenden können. Lesen Sie sich den Abschnitt *Erste Schritte* durch, bevor Sie eintauchen. Die meisten Ihrer Probleme sollten allein durch das Durchlesen gelöst werden.

Welche Daten sind überhaupt enthalten?

-Alle Planeten und ihre Monde,
-Alle Zwergplaneten
-Alle Hauptasteroiden
-Physikalische Eigenschaften wie Abmessungen, Masse, Abflachung, Schwerkraft, Neigung und Temperatur.
-Orbital-Parameter wie Semimajorachse, Perihel, Aphel, Exzentrizität, Orbitalperiode und Orbitalgeschwindigkeit.
-Geschichtliche Eigenschaften wie Entdeckungsumstände, Entdecker, Entdeckungsjahr und vorläufige Bezeichnung.

<a name="start"></a>
### Erste Schritte


Lassen Sie uns unsere erste API-Anfrage an die Solar System API stellen!

Öffnen Sie ein Terminal und verwenden Sie [curl] (http://curl.haxx.se) oder [httpie](https://github.com/httpie/httpie), um eine API-Anfrage für eine Ressource zu stellen.

```
http {{env('SOLAR_DOCS_URL')}}bodies/terre
```

Wir werden [httpie](http://httpie.org) für unsere Beispiele verwenden, da es die Antworten gut anzeigt und uns eine ganze Reihe weiterer nützlicher Informationen liefert. Wenn Sie [httpie] nicht herunterladen wollen, benutzen Sie stattdessen einfach den Befehl *curl*.

Hier ist die Antwort, die wir erhalten:

```
HTTP/1.1 200 OK
Content-Type: application/json
HTTP/1.0 200 OK
Content-Type: application/json
{
    "alternativeName": "",
    "aphelion": "152100000.0",
    "aroundPlanet": null,
    "axialTilt": "23.4393",
    "density": "5.5136",
    "dimension": "",
    "discoveredBy": "",
    "discoveryDate": "",
    "eccentricity": "0.0167",
    "equaRadius": "6378.1366",
    "escape": "11190.0",
    "flattening": "0.00335",
    "gravity": "9.8",
    "id": "terre",
    "inclination": "0.0",
    "isPlanet": "1",
    "mass": {
        "massExponent": 24,
        "massValue": 5.97237
    },
    "meanRadius": "6371.0084",
    "moons": [
        {
            "moon": "La Lune"
        }
    ],
    "name": "Earth",
    "perihelion": "147095000.0",
    "polarRadius": "6356.8",
    "semimajorAxis": "149598262.0",
    "sideralOrbit": "365.256",
    "sideralRotation": "23.9345",
    "vol": {
        "volExponent": 12,
        "volValue": 1.08321
    }
}
```

Wenn Ihre Antwort etwas anders aussieht, geraten Sie nicht in Panik. Das liegt wahrscheinlich daran, dass seit der Erstellung dieser Dokumentation mehr Daten zur API hinzugefügt wurden.

<a name="base"></a>
### Basis-URL

Die **Basis-URL** ist die Root-URL für die gesamte API. Wenn Sie jemals eine Anfrage an Swapi stellen und eine **404 NOT FOUND**-Antwort zurückerhalten, überprüfen Sie zuerst die Basis-URL.

Die Basis-URL für Solar System lautet:

`{{env('SOLAR_DOCS_URL')}}`

In der folgenden Dokumentation wird davon ausgegangen, dass Sie die Basis-URL den Endpunkten voranstellen, um Anfragen zu stellen.

<a name="rate"></a>
### Limitierung der Rate

Solar System hat eine Ratenbegrenzung, um böswilligen Missbrauch zu verhindern und um sicherzustellen, dass unser Dienst eine potenziell große Menge an Datenverkehr bewältigen kann. Die Ratenbeschränkung erfolgt über die IP-Adresse und ist derzeit auf 1000 API-Anfragen pro Tag beschränkt. Das reicht aus, um alle Daten auf der Website einige Male abzufragen. Es sollte keinen Grund geben, die Ratenbegrenzung zu erreichen.

<a name="auth"></a>
### Authentifizierung

Solar System ist eine **vollständig offene API**. Es ist keine Authentifizierung erforderlich, um Daten abzufragen und zu erhalten. Das bedeutet auch, dass wir Ihre Möglichkeiten auf das Erhalten **(GET)** der Daten beschränkt haben. Wenn Sie einen Fehler in den Daten finden, dann erstellen Sie doch ein Issue in Github.

<a name="search"></a>
### Suche

Alle Ressourcen unterstützen einen `Suche-Parameter`, der den zurückgegebenen Ressourcensatz filtert.  Dies erlaubt es Ihnen, Abfragen zu machen wie:

```
{{env('SOLAR_DOCS_URL')}}bodies?filter[name]=earth
```

 Bei allen Suchvorgängen wird die Groß-/Kleinschreibung bei Teilübereinstimmungen in der Menge der Suchfelder nicht berücksichtigt. Um den Satz von Suchfeldern für jede Ressource zu sehen, sehen Sie sich die Dokumentation der einzelnen Ressourcen an.

# Kodierungen
- - -

JSON ist das standardmäßig bereitgestellte Datenformat.

# Resources
- - -

<a name="bodies"></a>
### Sterne

**Endpunkte**

- ```/bodies/``` -- Alle Sterne in einer Anfrage
- ```/bodies/:id/``` -- Gibt alle Daten eines Sterns zurück:

**Beispiel Anfrage:**

```
http {{env('SOLAR_DOCS_URL')}}bodies/terre
```

**Beispiel Antwort:**

```
HTTP/1.0 200 OK
Content-Type: application/json
{
    "alternativeName": "",
    "aphelion": "152100000.0",
    "aroundPlanet": null,
    "axialTilt": "23.4393",
    "density": "5.5136",
    "dimension": "",
    "discoveredBy": "",
    "discoveryDate": "",
    "eccentricity": "0.0167",
    "equaRadius": "6378.1366",
    "escape": "11190.0",
    "flattening": "0.00335",
    "gravity": "9.8",
    "id": "terre",
    "inclination": "0.0",
    "isPlanet": "1",
    "mass": {
        "massExponent": 24,
        "massValue": 5.97237
    },
    "meanRadius": "6371.0084",
    "moons": [
        {
            "moon": "La Lune"
        }
    ],
    "name": "Earth",
    "perihelion": "147095000.0",
    "polarRadius": "6356.8",
    "semimajorAxis": "149598262.0",
    "sideralOrbit": "365.256",
    "sideralRotation": "23.9345",
    "vol": {
        "volExponent": 12,
        "volValue": 1.08321
    }
}
```

**Attribute:**

- ```id``` *string*
-- Id des Körpers in der API.
- ```name``` *string*
-- Name des Körpers in Englisch.
- ```isPlanet``` *boolean*
-- Ist der Körpers ein Planet?
- ```moons``` *json*
-- Array mit allen Namen von Monden, die dem Körper zugehörig sind.
- ```semimajorAxis``` *string*
-- Semimajor Achse des Körpers in Kilometern.
- ```perihelion``` *string*
-- Perihel in Kilometern.
- ```aphelion``` *string*
-- Aphel in Kilometern.
- ```eccentricity``` *string*
-- Orbitale Exzentrizität.
- ```inclination``` *string*
-- Orbitalneigung in Grad.
- ```mass``` *json*
-- Körper Masse in 10n kg.
massValue: Körpermasse, massExponent: Exponent 10.
- ```vol``` *json*
-- Körpervolumen in 10n kg.
volValue: Körpervolumen, volExponent: Exponant 10.
- ```density``` *string*
-- Körperdichte in g.cm3.
- ```gravity``` *string*
-- Oberflächenschwerkraft in m.s-2.
- ```escape``` *string*
-- Fluchtgeschwindigkeit in m.s-1.
- ```meanRadius``` *string*
-- Mittlerer Radius in Kilometern.
- ```equaRadius``` *string*
-- Äquatorialer Radius in Kilometern.
- ```polarRadius``` *string*
-- Polarradius in Kilometern.
- ```flattening``` *string*
-- Abflachung.
- ```dimension``` *string*
-- Körpermaß auf den 3 Achsen X, Y und Z für nicht-sphärische Körper.
- ```sideralOrbit``` *string*
-- Sideral Orbitalzeit für einen Körper um einen anderen (die Sonne oder einen Planeten) am Erdentag.
- ```sideralRotation``` *string*
-- Sideralrotation, notwendige Zeit, um sich um sich selbst zu drehen, in Stunde.
- ```aroundPlanet``` *json*
-- Für einen Mond der Name des Planet, den er umkreist.
- ```discoveredBy``` *string*
-- Name der Entdeckung.
- ```discoveryDate``` *string*
-- Datum der Entdeckung.
- ```alternativeName``` *string*
-- Vorläufiger Name.
- ```axialTilt``` *string*
-- Axiale Neigung.


**Suchfelder:**

- ```name```
- ```alternativeName```
- ```discoveredBy```


@endmarkdown

@endsection
