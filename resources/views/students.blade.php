<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-3">

    <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
        <a href="/">Home</a>
    </button>

    <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
        <a href="/students">Students</a>
    </button>

    <button class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
        <a href="/pokemons">Pokemons</a>
    </button>

    <form action="/student/poster" method="POST" class="mt-5 text-center">
        @csrf

        <label for="">Nom :</label>
        <input type="text" name="nom" class="border">

        <label for="">Genre :</label>
        <input type="text" name="genre" class="border">

        <label for="">Email :</label>
        <input type="email" name="email" class="border">

        <label for="">Age :</label>
        <input type="number" name="age" class="border">

        <button
            class="px-6 py-2 font-medium tracking-wide text-white transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80"
            type="submit">
            Créer un student
        </button>
    </form>

    <div class="flex flex-wrap justify-center gap-5">
        @foreach ($students as $student)
            <div
                class="mt-5 w-full max-w-sm px-4 py-3 bg-white rounded-md shadow-md 
    {{ $student->age > 24 ? 'dark:bg-purple-900' : ($student->age == 22 || $student->age == 23 ? 'dark:bg-blue-500' : 'dark:bg-gray-800') }}">

                <div>
                    <h1 class="mt-2 text-lg font-semibold text-gray-800 dark:text-white">{{ $student->nom }}</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">{{ $student->genre }}</p>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">{{ $student->email }}</p>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">{{ $student->age }}</p>
                </div>
            </div>
        @endforeach
    </div>


</body>

</html>
