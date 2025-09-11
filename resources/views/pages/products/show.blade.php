<x-layouts.guest>

    <div class="max-w-7xl mx-auto px-6 py-8">

        <nav id="breadcrumb" class="flex items-center space-x-2 text-sm text-gray-600 mb-8">
            <a href="{{ route('home') }}" class="hover:text-portal-600 cursor-pointer">Accueil</a>
            <i class="text-xs" data-fa-i2svg=""><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true"
                    focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                    <path fill="currentColor"
                        d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                    </path>
                </svg></i>
            <a href="{{ route('products') }}" class="hover:text-portal-600 cursor-pointer">Catalogue</a>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">

            <section id="product-gallery" class="space-y-4">
                <div class="relative">
                    <img class="w-full h-96 object-cover rounded-2xl shadow-lg"
                        src="{{ $trou->images->first()->file_path }}" alt="{{ $trou->name }}">
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        {{ $trou->category->name }}
                    </div>
                    <div
                        class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-lg text-sm">
                        Vue d'ensemble
                    </div>
                </div>

                <section id="product-description" class="lg:col-span-2 space-y-8">
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-void mb-6">Description du produit</h2>
                        <div class="prose max-w-none">
                            <p class="text-gray-700 mb-4">
                                {{ $trou->description }}
                            </p>
                            <h3 class="text-xl font-semibold text-void mb-3">Caractéristiques techniques</h3>
                            <p class="text-gray-700 mb-4">
                                Profondeur : {{ $trou->depth }}m
                            </p>
                            <p class="text-gray-700 mb-4">
                                Volume : {{ $trou->volume }}m3
                            </p>
                            <p class="text-gray-700 mb-4">
                                Taille : {{ $trou->diameter }}m
                            </p>
                            <h3 class="text-xl font-semibold text-void mb-3 mt-6">Utilisations recommandées</h3>
                            <p class="text-gray-700">
                                {{ $trou->recommended_uses }}
                            </p>
                        </div>
                    </div>
                </section>
            </section>

            <section id="product-info" class="space-y-6">
                <div>
                    <h1 class="text-4xl font-bold text-void mb-2">{{ $trou->name }}</h1>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-1">
                        <i class="text-yellow-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                </path>
                            </svg></i>
                        <i class="text-yellow-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                </path>
                            </svg></i>
                        <i class="text-yellow-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                </path>
                            </svg></i>
                        <i class="text-yellow-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                </path>
                            </svg></i>
                        <i class="text-yellow-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                </path>
                            </svg></i>
                    </div>
                    <span class="text-gray-600">4.9/5 (127 avis)</span>
                    <span class="text-portal cursor-pointer hover:underline">Voir tous les avis</span>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <div class="flex items-start flex-col  mb-4">
                        <span class="text-5xl font-bold text-portal-600">{{ $calculatedPrice }} HLC </span>
                        <span class="text-sm text-gray-600/50"> {{ $calculatedPrice * $price }} €</span>
                    </div>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-void mb-2">Options de livraison</label>
                        <div class="space-y-2">
                            <label
                                class="flex items-center p-3 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50">
                                <input type="radio" name="delivery" class="mr-3" checked="">
                                <div class="flex-1">
                                    <p class="font-semibold">{{ $trou->shipments->first()->name }}</p>
                                    <p class="text-sm text-gray-600">Délai:
                                        {{ $trou->shipments->first()->time_to_ship }} jours - Gratuit</p>
                                </div>
                            </label>
                            <label
                                class="flex items-center p-3 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50">
                                <input type="radio" name="delivery" class="mr-3">
                                <div class="flex-1">
                                    <p class="font-semibold">{{ $trou->shipments->last()->name }}</p>
                                    <p class="text-sm text-gray-600">Délai:
                                        {{ $trou->shipments->last()->time_to_ship }} jours -
                                        {{ $trou->shipments->last()->price }} HLC</p>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

            <div class="flex space-x-4">
                {{-- Bouton "Ajouter au panier" --}}
                <button
                    href="{{ route('cart', $trou->id) }}" class="flex-1 inline-flex items-center justify-center bg-portal-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-blue-800 transition-colors">
                    <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                            d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                    </svg>
                    Ajouter au panier
                </button>

                {{-- Bouton "Favori" --}}
                <button
                    class="inline-flex items-center justify-center px-6 py-4 border-2 border-portal text-portal-600 rounded-xl hover:bg-portal hover:text-red-600 transition-colors">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                    </svg>
                </button>

                </form>



</x-layouts.guest>
