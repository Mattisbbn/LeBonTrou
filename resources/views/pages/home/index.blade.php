<x-layouts.guest>
    <main>
        <section class="flex bg-gradient-to-br from-void-950 via-deep-950 to-portal-600 lg:h-[700px] h-screen relative overflow-hidden text-white">
            <div class="w-10/12 m-auto flex items-center justify-center lg:flex-row flex-col ">
                <div class="lg:w-1/2 md:w-4/5 w-full">
                    <div class="space-y-8">
                        <h1 class="2xl:text-6xl sm:text-5xl  text-4xl   font-bold">Le trou n'est plus une<span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-ribbon-700 to-medium-purple-500"><br>absence de matière</span></h1>
                        <p class="2xl:text-2xl sm:text-xl  text-lg  my-4">C'est une ressource stratégique.</p>
                        <p class="text-white/75 2xl:text-xl sm:text-lg text-base mt-6">Découvrez le premier marché mondial de trous certifiés. <br> De la singularité cosmique au simple trou de serrure.</p>
                        <div class="flex flex-wrap gap-2">
                        <a href="{{ route('products') }}" class="bg-portal-600 px-8 py-4 rounded-md  font-semibold hover:bg-blue-700 transition-colors sm:text-lg text-sm">Explorer le catalogue</a>
                        <a href="{{ route('hlc') }}" class="bg-portal px-8 py-4 rounded-md  font-semibold border sm:text-lg text-sm border-white hover:bg-white hover:text-void-950 transition-colors">Cours HoleyCoin</a>
                        </div>
                    </div>
                </div>
                <div class="relative xl:w-2/5 lg:w-2/6 md:w-4/5 w-full hidden md:block">
                    <img class="w-full h-96 object-cover rounded-2xl shadow-2xl"  src="{{ asset('images/home/blackhole.webp') }}">
                    <div class="absolute -top-4 -right-4 bg-quantum-900 px-4 py-2 rounded-lg">
                        <span class="text-sm font-semibold" contenteditable="false">Certifié Quantique</span>
                    </div>
                </div>
            </div>

        </section>


        <section id="holey-coin-explanation" class="py-16 bg-white cursor-default-must">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold text-void mb-4" contenteditable="false">Le HoleyCoin (HLC) : Une Révolution Monétaire</h3>
                    <p class="text-gray-600" contenteditable="false">La première cryptomonnaie basée sur des indicateurs économiques ultra-précis</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        <div class="bg-gray-50 rounded-2xl p-8">
                            <div class="flex items-center justify-center mb-6">
                                <img class="w-32 h-32 rounded-full  shadow-lg" src="{{ asset('images/global/hooleycoin.webp') }}">
                            </div>
                            <h4 class="text-2xl font-bold text-void text-center mb-4" contenteditable="false">Logo Officiel HoleyCoin</h4>
                            <p class="text-gray-600 text-center" contenteditable="false">Symbole de l'innovation dans le vide économique</p>
                        </div>

                        <div class="bg-gradient-to-r from-portal-600 to-quantum-600 text-white p-6 rounded-xl">
                            <div class="flex items-center mb-4">
                                <i class="text-2xl mr-3" data-fa-i2svg=""></i>
                                <h5 class="text-xl font-semibold" contenteditable="false">Valeur Actuelle</h5>
                            </div>
                            <div class="text-3xl font-bold" contenteditable="false">1 HLC = {{ $price }} €</div>
                            <div class="text-sm opacity-90 mt-2" contenteditable="false">Basé sur les dernières données du Soudan du Sud</div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-gray-50 rounded-xl p-6">
                            <h4 class="text-xl font-bold text-void mb-4" contenteditable="false">Algorithme de Valorisation Révolutionnaire</h4>
                            <p class="text-gray-700 mb-4" contenteditable="false">
                                Le HoleyCoin utilise un algorithme propriétaire basé sur deux indicateurs économiques fondamentaux :
                            </p>

                            <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <div class="w-8 h-8 bg-portal-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <i class="text-white text-sm" data-fa-i2svg=""><svg class="svg-inline--fa fa-globe" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"></path></svg></i>
                                    </div>
                                    <div>
                                        <h6 class="font-semibold text-void" contenteditable="false">PIB par habitant du Soudan du Sud</h6>
                                        <p class="text-gray-600 text-sm" contenteditable="false">Indicateur macro-économique de référence pour la stabilité monétaire mondiale</p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-3">
                                    <div class="w-8 h-8 bg-quantum-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <i class="text-white text-sm" data-fa-i2svg=""><svg class="svg-inline--fa fa-wind" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wind" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M288 32c0 17.7 14.3 32 32 32h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H352c53 0 96-43 96-96s-43-96-96-96H320c-17.7 0-32 14.3-32 32zm64 352c0 17.7 14.3 32 32 32h32c53 0 96-43 96-96s-43-96-96-96H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H384c-17.7 0-32 14.3-32 32zM128 512h32c53 0 96-43 96-96s-43-96-96-96H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H160c17.7 0 32 14.3 32 32s-14.3 32-32 32H128c-17.7 0-32 14.3-32 32s14.3 32 32 32z"></path></svg></i>
                                    </div>
                                    <div>
                                        <h6 class="font-semibold text-void" contenteditable="false">Vitesse du vent à Saint-Rémy-en-Bouzemont-Saint-Genest-et-Isson</h6>
                                        <p class="text-gray-600 text-sm" contenteditable="false">Facteur de volatilité atmosphérique garantissant la fluctuation naturelle de la monnaie</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6">
                            <h5 class="font-semibold text-void mb-3" contenteditable="false">Formule de Calcul du HoleyCoin</h5>
                            <div class="bg-gray-100 p-4 rounded-lg font-mono text-sm">
                                <code>HLC = (((PIB moyen par habitant du Soudan du Sud * Vitesse du vent à Saint-Rémy-en-Bouzemont-Saint-Genest-et-Isson) ÷ taille moyennne des trous de serrures) ÷ le nombre de hotdog mangée aux états unis le 4 juillet lors de la fête nationale) ÷ 1 000 000 </code>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layouts.guest>
