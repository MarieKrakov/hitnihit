<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam potravin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <section class="max-w-6xl mx-auto mt-16 px-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Seznam potravin</h2>
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr>
                    <th class="py-4 px-6 text-left text-gray-600 font-semibold">Název</th>
                    <th class="py-4 px-6 text-left text-gray-600 font-semibold">Úroveň histaminu</th>
                    <th class="py-4 px-6 text-left text-gray-600 font-semibold">Kategorie</th>
                </tr>
            </thead>
            <tbody>
                @foreach($foods as $food)
                    <tr>
                        <td class="py-4 px-6">{{ $food->name }}</td>
                        <td class="py-4 px-6">{{ $food->histamine_level }}</td>
                        <td class="py-4 px-6">{{ $food->category }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>