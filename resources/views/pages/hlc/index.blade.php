<x-layouts.guest>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/js/hlc.js')


    <main class="w-8/10 mx-auto">
        <div class="bg-gradient-to-r from-void-950 to-deep-950 text-white rounded-3xl p-8 relative overflow-hidden mt-6">
            <div class="absolute top-0 right-0 w-64 h-64 bg-portal opacity-10 rounded-full -mr-32 -mt-32"></div>
            <div class="relative z-10">
                <div class="flex items-center space-x-4">
                    <div class="w-16 h-16 p rounded-full flex items-center justify-center">
                        <img src="{{ asset('images/global/hooleycoin.webp') }}" class="w-12 h-12">
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold" contenteditable="false">HoleyCoin (HLC)</h1>
                        <p class="text-gray-300" contenteditable="false">La cryptomonnaie révolutionnaire du vide . </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex flex-col shadow-2xl rounded-2xl p-4 mt-6">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-bold" contenteditable="false">Évolution du Prix HLC
                </h2>

                <div>
                    <button id="1D"
                        class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg text-sm font-medium hover:bg-gray-200">1J</button>
                    <button id="7D"
                        class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg text-sm font-medium hover:bg-gray-200">7J</button>
                    <button id="1M"
                        class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg text-sm font-medium hover:bg-gray-200">1M</button>
                </div>
            </div>
            <canvas id="monnaieChart"></canvas>
        </div>
    </main>

</x-layouts.guest>
