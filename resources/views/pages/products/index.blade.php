<x-layouts.guest>

{{-- <div class="max-w-7xl mx-auto px-6 py-8">
            <section id="products-grid" class="lg:col-span-3 section-clickable">
                <div class="flex items-center justify-between mb-6">
                    <p class="text-gray-600" contenteditable="false">147 trous trouvés</p>
                    <select class="px-4 py-2 border border-gray-200 rounded-lg">
                        <option>Trier par popularité</option>
                        <option>Prix croissant</option>
                        <option>Prix décroissant</option>
                    </select>
                </div>
            </section>
        </div>
    </div>
</div> --}}
        
        <section id="page-header" class="mb-12 section-clickable">
            <div class="text-center mb-8">
                <h1 class="text-5xl font-bold text-void mb-4" contenteditable="false">Catalogue Premium</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" contenteditable="false">Découvrez notre collection exclusive de trous certifiés, authentifiés par blockchain et garantis par l'Institut International du Vide</p>
            </div>
            
            <div id="search-section" class="bg-white rounded-2xl shadow-lg p-6 mb-8 section-clickable">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 relative">
                        <i class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg></i>
                        <input type="text" placeholder="Rechercher un trou (ex: noir, serrure, ozone...)" class="w-full pl-12 pr-4 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-portal focus:border-transparent text-lg">
                    </div>
                    <select class="px-6 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-portal focus:border-transparent text-lg">
                        <option>Toutes catégories</option>
                        <option>Trous Cosmiques</option>
                        <option>Trous Domestiques</option>
                        <option>Trous Atmosphériques</option>
                        <option>Trous Numériques</option>
                        <option>Trous Temporels</option>
                    </select>
                </div>
            </div>
        </section>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            
            {{-- <section id="filters-sidebar" class="lg:col-span-1 section-clickable">
                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-28">
                    <h3 class="text-xl font-bold text-void mb-6" contenteditable="false">Filtres Avancés</h3>
                    
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-semibold text-void mb-3" contenteditable="false">Prix (HLC)</h4>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 rounded">
                                    <span class="text-gray-700" contenteditable="false">0 - 100 HLC</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 rounded">
                                    <span class="text-gray-700" contenteditable="false">100 - 1000 HLC</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 rounded">
                                    <span class="text-gray-700" contenteditable="false">1000+ HLC</span>
                                </label>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold text-void mb-3" contenteditable="false">Taille</h4>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 rounded">
                                    <span class="text-gray-700" contenteditable="false">Microscopique</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 rounded">
                                    <span class="text-gray-700" contenteditable="false">Standard</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 rounded">
                                    <span class="text-gray-700" contenteditable="false">Galactique</span>
                                </label>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold text-void mb-3" contenteditable="false">Certification</h4>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 rounded">
                                    <span class="text-gray-700" contenteditable="false">ISO 9001</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 rounded">
                                    <span class="text-gray-700" contenteditable="false">Quantum Verified</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 rounded">
                                    <span class="text-gray-700" contenteditable="false">NASA Approved</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <section id="products-grid" class="lg:col-span-4 w-10/12 mx-auto section-clickable">
                <div class="flex items-center justify-between mb-6">
                    <p class="text-gray-600" contenteditable="false">147 trous trouvés</p>
                    <select class="px-4 py-2 border border-gray-200 rounded-lg">
                        <option>Trier par popularité</option>
                        <option>Prix croissant</option>
                        <option>Prix décroissant</option>
                        <option>Plus récents</option>
                    </select>
                </div>

                <div id="products-container" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 section-clickable">
                    {{--premiere cartouche, ajouter un foreach ici --}}
                    @foreach ($trous as $trou) 
                    <div id="product-{{ $trou->id }}" class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow group section-clickable">
                        <div class="relative">
                            <img class="w-full h-48 object-cover" src="{{ $trou->images->first()->file_path }}" alt="{{ $trou->category->name }}">
                            <div class="absolute top-4 left-4 bg-red-500 text-white px-2 py-1 rounded text-xs" contenteditable="false">
                                RARE
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-void mb-2 group-hover:text-portal transition-colors" contenteditable="false">{{ $trou->name }}</h3>
                            <p class="text-gray-600 mb-4 text-sm" contenteditable="false">{{ $trou->description }}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <i class="text-yellow-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg></i>
                                    <span class="text-sm font-semibold text-gray-600 mr-2 text-xl" contenteditable="false">550550 HLC</span>
                                </div>
                                <button class="bg-portal-500 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors font-semibold" contenteditable="false">
                                    Acheter
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div id="pagination" class="flex justify-center mt-12 section-clickable">
                    <div class="flex items-center space-x-2">
                        <button class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50">
                            <i data-fa-i2svg=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path></svg></i>
                        </button>
                        <button class="px-4 py-2 bg-portal text-white rounded-lg" contenteditable="false">1</button>
                        <button class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50" contenteditable="false">2</button>
                        <button class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50" contenteditable="false">3</button>
                        <span class="px-4 py-2" contenteditable="false">...</span>
                        <button class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50" contenteditable="false">12</button>
                        <button class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50">
                            <i data-fa-i2svg=""><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path></svg></i>
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-layouts.guest>
