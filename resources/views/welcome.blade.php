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
                  <nav class="relative flex items-center justify-between">
                      <img class=" h-24 w-auto" src="{{asset('img/we_logo.png')}}" alt="Logo">
                    <a href="https://github.com/Cosnavel/webmasters-learn-apis" ><div class="w-full sm:w-auto inline-flex items-center justify-center text-black font-medium bg-white bg-opacity-20 group-hover:bg-opacity-30 rounded-lg shadow-sm group-hover:shadow-lg py-3 px-5 border border-white border-opacity-10 transform group-hover:-translate-y-0.5 transition-all duration-150"><svg width="24" height="24" fill="currentColor" class="text-black mr-3 text-opacity-50"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.606 9.606 0 0112 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48C19.137 20.107 22 16.373 22 11.969 22 6.463 17.522 2 12 2z" class=""></path></svg>View on GitHub</div></a>

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
