<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-5">
    <div>
        <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            <a href="/">Home</a>
        </button>

        <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            <a href="/students">Students</a>
        </button>

        <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            <a href="/pokemons">Pokemons</a>
        </button>
    </div>

    <button class="mt-5 px-6 py-2 font-medium tracking-wide text-white transition-colors duration-300 transform bg-yellow-600 rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
        <a href="/pokemons/create">Créer un pokemon</a>
    </button>

    <div class="flex flex-wrap justify-center gap-5">
        @foreach ($pokemons as $pokemon)
            <div
                class="mt-5 w-full max-w-sm px-4 py-3 rounded-md shadow-md bg-purple-900">

                <div>
                    <h1 class="mt-2 text-lg font-semibold text-gray-800 dark:text-white">{{ $pokemon->nom }}</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">{{ $pokemon->type }}</p>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">{{ $pokemon->niveau }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
