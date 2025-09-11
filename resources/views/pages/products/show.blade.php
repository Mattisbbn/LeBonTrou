<x-layouts.guest>

<div class="max-w-7xl mx-auto px-6 py-8">
        
    <nav id="breadcrumb" class="flex items-center space-x-2 text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-portal-600 cursor-pointer">Accueil</a>
        <i class="text-xs" data-fa-i2svg=""><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path></svg></i>
        <a href="{{ route('products') }}" class="hover:text-portal-600 cursor-pointer">Catalogue</a>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">
        
        <section id="product-gallery" class="space-y-4">
            <div class="relative">
                <img class="w-full h-96 object-cover rounded-2xl shadow-lg" src="{{ $trou->images->first()->file_path }}" alt="{{ $trou->name }}">
                <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                    {{ $trou->category->name }}
                </div>
                <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-lg text-sm">
                    Vue d'ensemble
                </div>
            </div>

            <section id="product-description" class="lg:col-span-2 space-y-8">
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-void mb-6">Description du produit</h2>
                    <div class="prose max-w-none">
                        <p class="text-gray-700 mb-4">
                            {{ $trou->description}}
                        </p>
                        <h3 class="text-xl font-semibold text-void mb-3">Caractéristiques techniques</h3>
                        <p class="text-gray-700 mb-4">
                            Profondeur : {{ $trou->depth}}m
                        </p>
                        <p class="text-gray-700 mb-4">
                            Volume : {{ $trou->volume}}m3
                        </p>
                        <p class="text-gray-700 mb-4">
                            Taille : {{ $trou->diameter}}m
                        </p>
                        <h3 class="text-xl font-semibold text-void mb-3 mt-6">Utilisations recommandées</h3>
                        <p class="text-gray-700">
                            {{ $trou->recommended_uses}}
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
                    <i class="text-yellow-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg></i>
                    <i class="text-yellow-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg></i>
                    <i class="text-yellow-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg></i>
                    <i class="text-yellow-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg></i>
                    <i class="text-yellow-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg></i>
                </div>
                <span class="text-gray-600">4.9/5 (127 avis)</span>
                <span class="text-portal cursor-pointer hover:underline">Voir tous les avis</span>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-5xl font-bold text-portal-600">{{ $calculatedPrice }} HLC</span>
                </div>
            </div>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-void mb-2">Options de livraison</label>
                    <div class="space-y-2">
                        <label class="flex items-center p-3 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="delivery" class="mr-3" checked="">
                            <div class="flex-1">
                                <p class="font-semibold">{{ $trou->shipments->first()->name }}</p>
                                <p class="text-sm text-gray-600">Délai: {{ $trou->shipments->first()->time_to_ship }} jours - Gratuit</p>
                            </div>
                        </label>
                        <label class="flex items-center p-3 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="delivery" class="mr-3">
                            <div class="flex-1">
                                <p class="font-semibold">{{ $trou->shipments->last()->name }}</p>
                                <p class="text-sm text-gray-600">Délai: {{ $trou->shipments->last()->time_to_ship }} jours - {{ $trou->shipments->last()->price }} HLC</p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex space-x-4">
                {{-- Bouton "Ajouter au panier" --}}
                <button
                    class="flex-1 inline-flex items-center justify-center bg-portal-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-blue-800 transition-colors">
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
            </div>
            

            {{-- <div class="grid grid-cols-3 gap-6 pt-6 text-center">
                <div>
                    <svg class="w-10 h-10 mx-auto text-portal mb-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8z"/>
                    </svg>
                    <p class="text-sm font-semibold">Garantie Éternelle</p>
                </div>
            
                <div>
                    <svg class="w-10 h-10 mx-auto text-portal mb-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z"/>
                    </svg>
                    <p class="text-sm font-semibold">Certifié ISO</p>
                </div>
            
                <div>
                    <svg class="w-10 h-10 mx-auto text-portal mb-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2v82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9V380.8c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/>
                    </svg>
                    <p class="text-sm font-semibold">Livraison Express</p>
                </div>
            </div>            
        </section>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
       

        <section id="product-sidebar" class="space-y-6">
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-void mb-4">Produits similaires</h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:border-portal cursor-pointer">
                        <img class="w-12 h-12 object-cover rounded-lg" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/e8a0f4e50e-55d78f974a84768f5bc7.png" alt="white dwarf star, cosmic object">
                        <div class="flex-1">
                            <p class="font-semibold text-sm">Naine Blanche</p>
                            <p class="text-portal font-bold">890 HLC</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:border-portal cursor-pointer">
                        <img class="w-12 h-12 object-cover rounded-lg" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/77ba666880-456c35ade82168964294.png" alt="neutron star pulsar, dense cosmic object">
                        <div class="flex-1">
                            <p class="font-semibold text-sm">Étoile à Neutrons</p>
                            <p class="text-portal font-bold">1,450 HLC</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:border-portal cursor-pointer">
                        <img class="w-12 h-12 object-cover rounded-lg" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/d72bbbfc03-c5e80c0f57837baade25.png" alt="quasar bright cosmic object, active galaxy">
                        <div class="flex-1">
                            <p class="font-semibold text-sm">Quasar Actif</p>
                            <p class="text-portal font-bold">3,200 HLC</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-void mb-4">Informations vendeur</h3>
                <div class="flex items-center space-x-3 mb-4">
                    <img class="w-12 h-12 rounded-full object-cover" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/6a785bee1b-f6399b8f14baeaa40ada.png" alt="nasa logo, space agency emblem">
                    <div>
                        <p class="font-semibold">NASA Certified</p>
                        <p class="text-sm text-gray-600">Vendeur professionnel</p>
                    </div>
                </div>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Évaluations:</span>
                        <span class="font-semibold">99.8% (12,847)</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Membre depuis:</span>
                        <span class="font-semibold">1958</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Localisation:</span>
                        <span class="font-semibold">Houston, TX</span>
                    </div>
                </div>
                <button class="w-full mt-4 bg-gray-100 text-gray-700 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                    Contacter le vendeur
                </button>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-void mb-4">Sécurité &amp; Garanties</h3>
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <i class="text-green-500" data-fa-i2svg=""><svg class="svg-inline--fa fa-circle-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path></svg></i>
                        <span class="text-sm">Paiement sécurisé</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="text-green-500" data-fa-i2svg=""><svg class="svg-inline--fa fa-shield-halved" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shield-halved" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z"></path></svg></i>
                        <span class="text-sm">Protection acheteur</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="text-green-500" data-fa-i2svg=""><svg class="svg-inline--fa fa-arrow-rotate-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-rotate-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M125.7 160H176c17.7 0 32 14.3 32 32s-14.3 32-32 32H48c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32s32 14.3 32 32v51.2L97.6 97.6c87.5-87.5 229.3-87.5 316.8 0s87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3s-163.8-62.5-226.3 0L125.7 160z"></path></svg></i>
                        <span class="text-sm">Retour 30 jours</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="text-green-500" data-fa-i2svg=""><svg class="svg-inline--fa fa-certificate" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="certificate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z"></path></svg></i>
                        <span class="text-sm">Authentifié blockchain</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div> --}}

</x-layouts.guest> 
