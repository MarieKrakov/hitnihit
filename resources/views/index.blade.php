<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HitniHIT</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="max-w-7xl mx-auto px-4 py-6">
        <div class="flex items-center justify-between">
            <a href="#" class="text-2xl font-bold text-gray-800 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
</svg>
                HitniHIT
            </a>
            <nav class="hidden lg:flex space-x-8">
                <a href="#" class="text-lg font-semibold text-indigo-500 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18m-6-6h6m-6 12h6" />
                    </svg>
                    Domů
                </a>
                <a href="#" class="text-lg font-semibold text-gray-600 hover:text-indigo-500 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 4h10M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z" />
                    </svg>
                    O aplikaci
                </a>
            </nav>
            <div class="hidden lg:flex space-x-4">
                <a href="#" class="px-6 py-2 text-sm font-semibold bg-gray-100 text-gray-500 rounded-md hover:bg-gray-200 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 21v-2a4 4 0 00-8 0v2m8-10a4 4 0 01-8 0 4 4 0 018 0z" />
                    </svg>
                    Registrace
                </a>
                <a href="#" class="px-6 py-2 text-sm font-semibold bg-indigo-500 text-white rounded-md hover:bg-indigo-600">Přihlášení
                </a>
            </div>
            <button class="lg:hidden text-gray-500 focus:outline-none">
                <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
                </svg>
            </button>
        </div>
    </header>

    <!-- Hero section -->
    <section class="max-w-4xl mx-auto text-center py-16">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Vítejte v HitniHIT</h1>
        <p class="text-gray-600 mb-8">Sledujte své potraviny a vyhodnocujte, zda překračujete hranici histaminu.</p>
        <div class="flex justify-center space-x-4 mb-12">
            <a href="/login" class="px-6 py-2 text-white bg-indigo-500 rounded-md hover:bg-indigo-600">
                Začít
            </a>
            <a href="#" class="px-6 py-2 text-gray-600 bg-white border rounded-md hover:bg-gray-100">
                Více informací
            </a>
        </div>
    </section>

    <!-- Odsazení před popisem -->
    <div class="h-3"></div>

    <!-- Popis aplikace -->
    <section class="bg-gray py-11">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Jak aplikace HitniHIT funguje?</h2>
            <p class="text-gray-600 mb-8 leading-relaxed">
                HitniHIT je aplikace určená pro lidi s histaminovou intolerancí. Umožňuje vám sledovat denní příjem potravin a automaticky vyhodnocuje, zda jste překročili doporučenou hranici histaminu. 
                Stačí zadat potraviny, které jste během dne snědli, a aplikace vám na základě jejich obsahu histaminu ukáže, jestli jste v bezpečné zóně.
            </p>
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                S čím vám může pomoci?
            </h3>
            <ul class="list-disc text-left mx-auto max-w-xl text-gray-600">
                <li class="mb-2 flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
    </svg>
    Sledování každodenního příjmu potravin a histaminu.
</li>
                <li class="mb-2 flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
    </svg>
    Sledování každodenního příjmu potravin a histaminu.
</li>
                <li class="mb-2 flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
    </svg>
    Sledování každodenního příjmu potravin a histaminu.
</li>
                <li class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Zpětně analyzuje vaše stravovací návyky a pomáhá lépe porozumět vašemu tělu.
                </li>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <span class="text-sm text-gray-600">&copy; 2024 HitniHIT. All Rights Reserved.</span>
            </div>
        </div>
    </footer>
</body>
</html>