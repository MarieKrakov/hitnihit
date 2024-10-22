<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam potravin - HitniHIT</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <header class="max-w-7xl mx-auto px-4 py-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold">HitniHIT - Foods</h1>
    <nav>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="text-sm font-semibold text-indigo-500 hover:text-indigo-600">
                Odhlásit se
            </button>
        </form>
    </nav>
</header>
    <section class="max-w-6xl mx-auto mt-16 px-8">
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('status') }}
            </div>
        @endif
<!-- Tabulka s existujícími potravinami -->
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Seznam potravin</h2>
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr>
                    <th class="py-4 px-6 text-left text-gray-600 font-semibold">Název</th>
                    <th class="py-4 px-6 text-left text-gray-600 font-semibold">Úroveň histaminu</th>
                    <th class="py-4 px-6 text-left text-gray-600 font-semibold">Kategorie</th>
                    <th class="py-4 px-6 text-left text-gray-600 font-semibold">Akce</th>
                </tr>
            </thead>
            <tbody>
                @foreach($foods as $food)
                    <tr>
                        <td class="py-4 px-6">{{ $food->name }}</td>
                        <td class="py-4 px-6">{{ $food->histamine_level }}</td>
                        <td class="py-4 px-6">{{ $food->category }}</td>
                        <td class="py-4 px-6">
                            <form action="{{ route('foods.destroy', $food->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-sm text-red-500 hover:text-red-700">Odstranit</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
         <!-- Formulář pro přidání nové potraviny -->
        <div class="mt-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Přidat novou potravinu</h3>
            <form action="{{ route('foods.store') }}" method="POST" class="w-full max-w-md space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-800 mb-2">Název potraviny</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                </div>
                <div>
                    <label for="histamine_level" class="block text-sm font-semibold text-gray-800 mb-2">Úroveň histaminu (1-3)</label>
                    <input type="number" id="histamine_level" name="histamine_level" min="1" max="3" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                </div>
                <div>
                    <label for="category" class="block text-sm font-semibold text-gray-800 mb-2">Kategorie</label>
                    <input type="text" id="category" name="category" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" />
                </div>
                <button type="submit" class="w-full py-3 text-lg font-semibold text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Přidat potravinu</button>
            </form>
        </div>
    </section>
</body>
</html>
