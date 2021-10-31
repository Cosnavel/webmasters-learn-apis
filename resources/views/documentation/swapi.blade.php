@extends('layouts.markdown')

@section('content')


@markdown

# Swapi Dokumentation

<a name="intro"></a>
### Einführung

Willkommen zur Swapi, der Star Wars API! Diese Dokumentation soll Ihnen helfen, sich mit den verfügbaren Ressourcen vertraut zu machen und wie Sie diese mit HTTP-Anfragen verwenden können. Lesen Sie sich den Abschnitt *Erste Schritte* durch, bevor Sie eintauchen. Die meisten Ihrer Probleme sollten allein durch das Durchlesen gelöst werden.


<a name="start"></a>
### Erste Schritte


Lassen Sie uns unsere erste API-Anfrage an die Star Wars API stellen!

Öffnen Sie ein Terminal und verwenden Sie [curl] (http://curl.haxx.se) oder [httpie](https://github.com/httpie/httpie), um eine API-Anfrage für eine Ressource zu stellen. Im Beispiel unten versuchen wir, den ersten Planeten, Tatooine, zu bekommen:

```
http {{config('settings.swapi_docs_url')}}planets/1/
```

Wir werden [httpie](http://httpie.org) für unsere Beispiele verwenden, da es die Antworten gut anzeigt und uns eine ganze Reihe weiterer nützlicher Informationen liefert. Wenn Sie [httpie] nicht herunterladen wollen, benutzen Sie stattdessen einfach den Befehl *curl*.

Hier ist die Antwort, die wir erhalten:

```
HTTP/1.1 200 OK
Content-Type: application/json
{
    "climate": "arid",
    "created": "2014-12-09T13:50:49.641Z",
    "diameter": "10465",
    "edited": "2014-12-20T20:58:18.411Z",
    "gravity": "1 standard",
    "id": 1,
    "name": "Tatooine",
    "orbital_period": "304",
    "population": "200000",
    "rotation_period": "23",
    "surface_water": "1",
    "terrain": "desert"
}
```

Wenn Ihre Antwort etwas anders aussieht, geraten Sie nicht in Panik. Das liegt wahrscheinlich daran, dass seit der Erstellung dieser Dokumentation mehr Daten zur Swapi hinzugefügt wurden.

<a name="base"></a>
### Basis-URL

Die **Basis-URL** ist die Root-URL für die gesamte API. Wenn Sie jemals eine Anfrage an Swapi stellen und eine **404 NOT FOUND**-Antwort zurückerhalten, überprüfen Sie zuerst die Basis-URL.

Die Basis-URL für Swapi lautet:

`{{config('settings.swapi_docs_url')}}`

In der folgenden Dokumentation wird davon ausgegangen, dass Sie die Basis-URL den Endpunkten voranstellen, um Anfragen zu stellen.

<a name="rate"></a>
### Limitierung der Rate

Swapi hat eine Ratenbegrenzung, um böswilligen Missbrauch zu verhindern (als ob irgendjemand Star Wars-Daten missbrauchen würde!) und um sicherzustellen, dass unser Dienst eine potenziell große Menge an Datenverkehr bewältigen kann. Die Ratenbeschränkung erfolgt über die IP-Adresse und ist derzeit auf 1000 API-Anfragen pro Tag beschränkt. Das reicht aus, um alle Daten auf der Website einige Male abzufragen. Es sollte keinen Grund geben, die Ratenbegrenzung zu erreichen.

<a name="auth"></a>
### Authentifizierung

Swapi ist eine **vollständig offene API**. Es ist keine Authentifizierung erforderlich, um Daten abzufragen und zu erhalten. Das bedeutet auch, dass wir Ihre Möglichkeiten auf das Erhalten **(GET)** der Daten beschränkt haben. Wenn Sie einen Fehler in den Daten finden, dann erstellen Sie doch ein Issue in Github.

<a name="search"></a>
### Suche

Alle Ressourcen unterstützen einen `Suche-Parameter`, der den zurückgegebenen Ressourcensatz filtert.  Dies erlaubt es Ihnen, Abfragen zu machen wie:

```
{{config('settings.swapi_docs_url')}}people?filter[name]=luke
```

 Bei allen Suchvorgängen wird die Groß-/Kleinschreibung bei Teilübereinstimmungen in der Menge der Suchfelder nicht berücksichtigt. Um den Satz von Suchfeldern für jede Ressource zu sehen, sehen Sie sich die Dokumentation der einzelnen Ressourcen an.

# Kodierungen
- - -

JSON ist das von SWAPI standardmäßig bereitgestellte Datenformat.

# Resources
- - -

<a name="root"></a>
### Root

Die Root-Ressource bietet Informationen über alle verfügbaren Ressourcen innerhalb der API.

**Beispiel Anfrage:**

```
http {{config('settings.swapi_docs_url')}}
```

**Beispiel Antwort:**

```
HTTP/1.0 200 OK
Content-Type: application/json
{
    "films": "{{config('settings.swapi_docs_url')}}films",
    "people": "{{config('settings.swapi_docs_url')}}people",
    "planets": "{{config('settings.swapi_docs_url')}}planets",
    "species": "{{config('settings.swapi_docs_url')}}species",
    "starships": "{{config('settings.swapi_docs_url')}}starships",
    "vehicles": "{{config('settings.swapi_docs_url')}}vehicles"
}
```

**Attribute:**

- ```films``` *string*
-- URL root für Film resources
- ```people``` *string*
-- URL root für People resources
- ```planets``` *string*
-- URL root für Planet resources
- ```species``` *string*
-- URL root für Species resources
- ```starships``` *string*
-- URL root für Starships resources
- ```vehicles``` *string*
-- URL root für Vehicles resources


---

<a name="people"></a>
### Personen

Eine People-Ressource ist eine einzelne Person oder ein einzelner Charakter innerhalb des Star Wars-Universums.

**Endpunkte**

- ```/people/``` -- erhalte alle people resources
- ```/people/:id/``` -- erhalte eine bestimmte people resource

**Beispiel Anfrage:**

```
http {{config('settings.swapi_docs_url')}}people/1/
```

**Beispiel Antwort:**

```
HTTP/1.0 200 OK
Content-Type: application/json
{
    "birth_year": "19BBY",
    "created": "2014-12-09T13:50:51.644Z",
    "edited": "2014-12-20T21:17:56.891Z",
    "eye_color": "blue",
    "gender": "male",
    "hair_color": "blond",
    "height": "172",
    "homeworld": "1",
    "id": 1,
    "mass": "77",
    "name": "Luke Skywalker",
    "skin_color": "fair"
}
```

**Attribute:**

- ```name``` *string*
-- Der Name dieser Person.
- ```birth_year``` *string*
-- Das Geburtsjahr der Person unter Verwendung des universumsinternen Standards von **BBY** oder **ABY** - vor der Schlacht von Yavin oder nach der Schlacht von Yavin. Die Schlacht von Yavin ist eine Schlacht, die am Ende der Star Wars-Episode IV: Eine neue Hoffnung stattfindet.
- ```eye_color``` *string*
-- Die Augenfarbe dieser Person. Wird "unknown" sein, wenn sie nicht bekannt ist, oder "n/a", wenn die Person kein Auge hat.
- ```gender``` *string*
-- Das Geschlecht dieser Person. Entweder "Male", "Female" oder "unknown", "n/a", wenn die Person kein Geschlecht hat.
- ```hair_color``` *string*
-- Die Haarfarbe dieser Person. Wird "unknown" sein, wenn sie nicht bekannt ist, oder "n/a", wenn die Person keine Haare hat.
- ```height``` *string*
-- Die Größe der Person in Zentimetern.
- ```mass``` *string*
-- Die Masse der Person in Kilogramm.
- ```skin_color``` *string*
-- Die Hautfarbe dieser Person.
- ```homeworld``` *string*
-- Die ID einer Planet Ressource, ein Planet, auf dem diese Person geboren wurde oder den sie bewohnt.
- ```id``` *integer*
-- Die einzigartige ID dieser Resource.
- ```created``` *string*
-- Das ISO 8601-Datumsformat der Zeit, zu der diese Ressource erstellt wurde.
- ```edited``` *string*
-- Das ISO 8601 Datumsformat der Zeit, zu der diese Ressource bearbeitet wurde.

**Suchfelder:**

- ```name```

- - -
<a name="films"></a>
### Filme

Eine Film-Ressource ist ein einzelner Film.

**Endpunkte**

- ```/films/``` -- erhalte alle film resources
- ```/films/:id/``` -- erhalte eine bestimmte film resource

**Beispiel Anfrage:**

```
http {{config('settings.swapi_docs_url')}}films/1
```

**Beispiel Antwort:**

```
HTTP/1.0 200 OK
Content-Type: application/json
{
"characters": "[1,2,3,4,5,6,7,8,9,10,12,13,14,15,16,18,19,81]",
"created": "2014-12-10T14:23:31.880Z",
"director": "George Lucas",
"edited": "2014-12-20T19:49:45.256Z",
"episode_id": "4",
"id": 1,
"opening_crawl": "It is a period of civil war.\r\nRebel spaceships, striking\r\nfrom a hidden base, have won\r\ntheir first victory against\r\nthe evil Galactic Empire.\r\n\r\nDuring the battle, Rebel\r\nspies managed to steal secret\r\nplans to the Empire's\r\nultimate weapon, the DEATH\r\nSTAR, an armored space\r\nstation with enough power\r\nto destroy an entire planet.\r\n\r\nPursued by the Empire's\r\nsinister agents, Princess\r\nLeia races home aboard her\r\nstarship, custodian of the\r\nstolen plans that can save her\r\npeople and restore\r\nfreedom to the galaxy....",
"planets": "[1,2,3]",
"producer": "Gary Kurtz, Rick McCallum",
"release_date": "1977-05-25",
"species": "[1,2,3,4,5]",
"starships": "[2,3,5,9,10,11,12,13]",
"title": "A New Hope",
"vehicles": "[4,6,7,8]"
}
```

**Attribute:**

- ```title``` *string*
-- Der Titel dieses Films
- ```episode_id``` *string*
-- Die Episodennummer dieses Films.
- ```opening_crawl``` *string*
-- Die einleitenden Absätze am Anfang des Films.
- ```director``` *string*
-- Der Name des Regisseurs dieses Films.
- ```producer``` *string*
-- Der/die Name(n) des/der Produzenten dieses Films. Komma getrennt.
- ```release_date``` *string*
-- Das ISO 8601 Datumsformat der Filmveröffentlichung im Land des ursprünglichen Urhebers.
- ```species``` *array*
-- Ein Array von species resources, die in diesem Film vorkommen.
- ```starships``` *array*
-- Ein Array von starship resources, die in diesem Film vorkommen.
- ```vehicles``` *array*
-- Ein Array von vehicle resources, die in diesem Film vorkommen.
- ```characters``` *array*
-- Ein Array von people resources, die in diesem Film vorkommen.
- ```planets``` *array*
-- Ein Array von planet resources, die in diesem Film vorkommen.
- ```id``` *integer*
-- Die einzigartige ID dieser Resource.
- ```created``` *string*
-- Das ISO 8601-Datumsformat der Zeit, zu der diese Ressource erstellt wurde.
- ```edited``` *string*
-- Das ISO 8601 Datumsformat der Zeit, zu der diese Ressource bearbeitet wurde.

**Suchfelder:**

- ```director```
- ```producer```
- ```title```

- - -
<a name="starships"></a>
### Raumschiffe

Eine Raumschiff-Ressource ist ein einzelnes Transportfahrzeug mit Hyperantriebsfähigkeit.

**Endpunkte**

- ```/starships/``` -- erhalte alle starship resources
- ```/starships/:id/``` -- erhalte eine bestimmte starship resource

**Beispiel Anfrage:**

```
http {{config('settings.swapi_docs_url')}}starships/21
```

**Beispiel Antwort:**

```
HTTP/1.0 200 OK
Content-Type: application/json
{
    "MGLT": "70",
    "hyperdrive_rating": "3.0",
    "id": 21,
    "pilots": "[22]",
    "starship_class": "Patrol craft"
}
```

**Attribute:**

- ```starship_class``` *string*
-- Die Klasse dieses Raumschiffs, wie z.B. "Starfighter" oder "Deep Space Mobile Battlestation"
- ```hyperdrive_rating``` *string*
-- Die Klasse dieses Raumschiff-Hyperantriebs.
- ```MGLT``` *string*
-- Die maximale Anzahl von Megalights, die dieses Raumschiff in einer Standardstunde reisen kann. Ein "Megalight" ist eine Standardeinheit der Entfernung und wurde im Star Wars-Universum noch nie zuvor definiert. Diese Zahl ist nur für die Messung des Geschwindigkeitsunterschieds von Raumschiffen wirklich nützlich. Wir können davon ausgehen, dass sie ähnlich wie AU, die Entfernung zwischen unserer Sonne (Sol) und der Erde, ist.
- ```pilots``` *array*
-- Ein Array von people resources, von denen dieses Raumschiff gesteuert wurde.
- ```id``` *integer*
-- Die einzigartige ID dieser Resource.

**Suchfelder:**

- ```starship_class```
- ```MGLT```

- - -
<a name="vehicles"></a>
### Fahrzeuge

Eine Fahrzeug-Ressource ist ein einzelnes Transportfahrzeug, das **keine** Hyperantriebsfähigkeit besitzt.

**Endpunkte**

- ```/vehicles/``` -- erhalte alle vehicle resources
- ```/vehicles/:id/``` -- erhalte eine bestimmte vehicle resource

**Beispiel Anfrage:**

```
http {{config('settings.swapi_docs_url')}}vehicles/4/
```

**Beispiel Antwort:**

```
HTTP/1.0 200 OK
Content-Type: application/json
{
    "id": 14,
    "pilots": "[1,18]",
    "vehicle_class": "airspeeder"
}
```

**Attribute:**

- ```vehicle_class``` *string*
-- Die Klasse dieses Fahrzeugs, wie z.B. "Wheeled" oder "Repulsorcraft".
- ```pilots``` *array*
-- Ein Array von people resources, von denen dieses Fahrzeug gesteuert wurde.
- ```id``` *integer*
-- Die einzigartige ID dieser Resource.

**Suchfelder:**

- ```vehicle_class```

- - -
<a name="species"></a>
### Spezies

Eine Spezies-Ressource ist eine Art von Person oder Charakter innerhalb des Star Wars-Universums.

**Endpunkte**

- ```/species/``` -- erhalte alle species resources
- ```/species/:id/``` -- erhalte eine bestimmte species resource

**Beispiel Anfrage:**

```
http {{config('settings.swapi_docs_url')}}species/3/
```

**Beispiel Antwort:**

```
HTTP/1.0 200 OK
Content-Type: application/json
{
    "average_height": "210",
    "average_lifespan": "400",
    "classification": "mammal",
    "created": "2014-12-10T16:44:31.486Z",
    "designation": "sentient",
    "edited": "2014-12-20T21:36:42.142Z",
    "eye_colors": "blue, green, yellow, brown, golden, red",
    "hair_colors": "black, brown",
    "homeworld": "14",
    "id": 3,
    "language": "Shyriiwook",
    "name": "Wookie",
    "people": "[13,80]",
    "skin_colors": "gray"
}
```

**Attribute:**

- ```name``` *string*
-- Der Name dieser Art.
- ```classification``` *string*
-- Die Klassifizierung dieser Art, wie z.B. "Säugetier" oder "Reptil".
- ```designation``` *string*
-- Die Kennzeichnung dieser Art, wie z.B. "empfindungsfähig".
- ```average_height``` *string*
-- Die durchschnittliche Höhe dieser Art in Zentimetern.
- ```average_lifespan``` *string*
-- Die durchschnittliche Lebensdauer dieser Art in Jahren.
- ```eye_colors``` *string*
-- Eine durch Komma getrennte Reihe von gemeinsamen Augenfarben für diese Art, "keine", wenn diese Art typischerweise keine Augen hat.
- ```hair_colors``` *string*
-- Eine durch Komma getrennte Reihe von gemeinsamen Haarfarben für diese Art, "keine", wenn diese Art typischerweise keine Haare hat.
- ```skin_colors``` *string*
-- Eine durch Komma getrennte Zeichenfolge der üblichen Hautfarben für diese Art, "keine", wenn diese Art keine typische Haut hat.
- ```language``` *string*
-- Die von dieser Art allgemein gesprochene Sprache.
- ```homeworld``` *string*
-- Die ID einer Planet Ressource, eines Planeten, von dem diese Spezies abstammt.
- ```people``` *array*
-- Ein Array von people resources, die zu dieser Spezies gehören.
- ```id``` *integer*
-- Die einzigartige ID dieser Resource.
- ```created``` *string*
-- Das ISO 8601-Datumsformat der Zeit, zu der diese Ressource erstellt wurde.
- ```edited``` *string*
-- Das ISO 8601 Datumsformat der Zeit, zu der diese Ressource bearbeitet wurde.

**Suchfelder:**

- ```name```
- ```classification```
- ```designation```
- ```language```

- - -
<a name="planets"></a>
### Planeten

Eine Planeten-Ressource ist eine große Masse, ein Planet oder Planetoid im Star Wars-Universum zum Zeitpunkt 0 ABY.

**Endpunkte**

- ```/planets/``` -- erhalte alle planets resources
- ```/planets/:id/``` -- erhalte eine bestimmte planets resource

**Beispiel Anfrage:**

```
http {{config('settings.swapi_docs_url')}}planets/1/
```

**Beispiel Antwort:**

```
HTTP/1.0 200 OK
Content-Type: application/json
{
    "climate": "arid",
    "created": "2014-12-09T13:50:49.641Z",
    "diameter": "10465",
    "edited": "2014-12-20T20:58:18.411Z",
    "gravity": "1 standard",
    "id": 1,
    "name": "Tatooine",
    "orbital_period": "304",
    "population": "200000",
    "rotation_period": "23",
    "surface_water": "1",
    "terrain": "desert"
}
```

**Attribute:**

- ```name``` *string*
-- Der Name dieses Planeten.
- ```diameter``` *string*
-- Der Durchmesser dieses Planeten in Kilometern.
- ```rotation_period``` *string*
-- Die Anzahl der Standardstunden, die dieser Planet benötigt, um eine einzige Umdrehung um seine Achse auszuführen.
- ```orbital_period``` *string*
-- Die Anzahl der Standardtage, die dieser Planet benötigt, um eine einzige Umlaufbahn seines lokalen Sterns zu absolvieren.
- ```gravity``` *string*
-- Eine Zahl, die die Schwerkraft dieses Planeten angibt, wobei "1" normal oder 1 Standard G ist. "2" ist doppelt oder 2 Standard Gs. "0,5" ist die Hälfte oder 0,5 Standard-Gs.
- ```population``` *string*
-- Die durchschnittliche Population von fühlenden Wesen, die diesen Planeten bewohnen.
- ```climate``` *string*
-- Das Klima dieses Planeten. Komma getrennt, wenn unterschiedlich.
- ```terrain``` *string*
-- Das Terrain dieses Planeten. Komma getrennt, wenn unterschiedlich.
- ```surface_water``` *string*
-- Der Prozentsatz der Planetenoberfläche, der natürlich vorkommendes Wasser oder Gewässer ist.
- ```id``` *integer*
-- Die einzigartige ID dieser Resource.
- ```created``` *string*
-- Das ISO 8601-Datumsformat der Zeit, zu der diese Ressource erstellt wurde.
- ```edited``` *string*
-- Das ISO 8601 Datumsformat der Zeit, zu der diese Ressource bearbeitet wurde.

**Suchfelder:**

- ```name```
- ```terrain```
- ```climate```

- - -
<a name="transport"></a>
### Transportmittel

Eine Transport-Ressource ist eine Transportmittel im Star Wars-Universum.

**Endpunkte**

- ```/transport/``` -- erhalte alle transport resources
- ```/transport/:id/``` -- erhalte eine bestimmte transport resource

**Beispiel Anfrage:**

```
http {{config('settings.swapi_docs_url')}}transport/4/
```

**Beispiel Antwort:**

```
HTTP/1.0 200 OK
Content-Type: application/json
{
    "cargo_capacity": "50000",
    "consumables": "2 months",
    "cost_in_credits": "150000",
    "created": "2014-12-10T15:36:25.724Z",
    "crew": "46",
    "edited": "2014-12-20T21:30:21.661Z",
    "id": 4,
    "length": "36.8 ",
    "manufacturer": "Corellia Mining Corporation",
    "max_atmosphering_speed": "30",
    "name": "Sand Crawler",
    "passengers": "30"
}
```

**Attribute:**

- ```name``` *string*
-- Der Name dieses Transportmittels.
- ```cargo_capacity``` *string*
-- Die maximale Anzahl von Kilogramm, die dieses Raumschiff transportieren kann.
- ```consumables``` *string*
-- Die maximale Zeitspanne, in der dieses Raumschiff Verbrauchsmaterial für die gesamte Besatzung bereitstellen kann, ohne dass eine erneute Versorgung erforderlich ist.
- ```cost_in_credits``` *string*
-- Die Kosten für dieses Raumschiff neu, in galaktischen Credits.
- ```crew``` *string*
-- Die Zahl des Personals, das für den Betrieb oder die Steuerung dieses Raumschiffs benötigt wird.
- ```length``` *string*
-- Die Länge dieses Raumschiffs in Metern.
- ```manufacturer``` *string*
-- Der Hersteller dieses Raumschiffs. Komma getrennt, wenn mehr als eins.
- ```max_atmosphering_speed``` *string*
-- Die Höchstgeschwindigkeit dieses Raumschiffs in der Atmosphäre. "N/A", wenn dieses Raumschiff nicht in der Lage ist, in der Atmosphäre zu fliegen.
- ```passengers``` *string*
-- Die Zahl der nicht lebensnotwendigen Personen, die dieses Raumschiff transportieren kann.
- ```id``` *integer*
-- Die einzigartige ID dieser Resource.
- ```created``` *string*
-- Das ISO 8601-Datumsformat der Zeit, zu der diese Ressource erstellt wurde.
- ```edited``` *string*
-- Das ISO 8601 Datumsformat der Zeit, zu der diese Ressource bearbeitet wurde.

**Suchfelder:**

- ```name```
- ```consumables```
- ```cargo_capacity```
- ```passengers```
- ```max_atmosphering_speed```
- ```crew```
- ```length```
- ```cost_in_credits```
- ```manufacturer```

@endmarkdown

@endsection
