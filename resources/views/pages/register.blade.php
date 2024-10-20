<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace - HitniHIT</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="max-w-7xl mx-auto px-4 py-6 flex items-center justify-between">
        <div class="flex items-center">
            <a href="/" class="text-2xl font-bold text-gray-800 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                HitniHIT
            </a>
        </div>
        <nav class="hidden md:flex space-x-8">
            <a href="/login" class="text-lg font-semibold text-gray-600 hover:text-indigo-500">Přihlášení</a>
        </nav>
    </header>

    <!-- Sekce registrace -->
    <section class="max-w-6xl mx-auto mt-16 flex flex-col md:flex-row gap-12">
        <!-- Registrace -->
        <div class="bg-indigo-100 w-full px-12 py-16 rounded-xl shadow-lg flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Registrace</h2>
            <form action="/register" method="POST" class="w-full max-w-sm mx-auto space-y-6">
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-800 mb-2">Jméno</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                </div>
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-800 mb-2">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                </div>
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-800 mb-2">Heslo</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                </div>
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-800 mb-2">Potvrzení hesla</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                </div>
                <button type="submit" class="w-full py-3 text-lg font-semibold text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Registrovat se</button>
            </form>
            <p class="mt-4 text-center text-sm text-gray-600">Již máte účet? <a href="/login" class="font-semibold text-indigo-600 hover:text-indigo-700">Přihlaste se zde</a></p>
        </div>
    </section>

</body>
</html>