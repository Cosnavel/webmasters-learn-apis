<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Webmasters Learning API</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
    </head>
    <body class="bg-gray-50">
            <div class="relative  overflow-hidden">
              <div class="relative pt-12 pb-12">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
                  <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
                    <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                      <div class="flex items-center justify-between w-full md:w-auto">
                          <img class=" h-24 w-auto" src="https://de.webmasters-europe.org/assets/we/logo-2a978babedfd5869d221e46c5ed763347bb2867b1065d36d75bcf8895205cd40.png" alt="Logo">
                      </div>
                    </div>
                  </nav>
                </div>
                <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
                  <div class="text-center">
                    <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                      Webmasters
                      <br class="xl:hidden">
                      <span class="text-indigo-600">Learn APIs</span>
                    </h2>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                      Hier finden sie die Dokumentationen zu unseren derzeitigen "Lern APIs". Diese können sie jederzeit für Übungen des Lehrmaterials und andere Projekte verwenden.
                    </p>
                    <div class="mt-5 flex justify-around">
                      <div class="rounded-md shadow ">
                      <a href="{{route('documentation.swapi')}}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                          SWAPI (Star Wars API)
                        </a>
                      </div>
                      <div class="rounded-md shadow">
                      <a href="{{route('documentation.solar')}}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                          Solar System API
                        </a>
                      </div>
                    </div>
                  </div>
                </main>
              </div>
            </div>
    </body>
</html>
