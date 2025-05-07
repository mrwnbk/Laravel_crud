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

    <button
        class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
        <a href="/">Home</a>
    </button>

    <button
        class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
        <a href="/students">Students</a>
    </button>

    <button
        class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
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

                <form action="/delete/{{ $student->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit"
                        class="mt-2 px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>
                </form>
            </div>
        @endforeach
    </div>


</body>

</html>
