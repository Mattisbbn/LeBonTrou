<x-layouts.guest>
    <main id="login-container" class="flex items-center justify-center py-16 px-4 bg-gradient-to-br from-void-950 via-deep-950 to-portal-600  cursor-default-must">
        <div class="w-full max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div id="login-form-section" class="bg-white rounded-2xl shadow-2xl p-8 lg:p-12 section-clickable">
                    <div class="text-center mb-8">

                        <h2 class="text-3xl font-bold text-void mb-2" contenteditable="false">Accès Sécurisé au Vide</h2>
                        <p class="text-gray-600" contenteditable="false">Connectez-vous à votre portefeuille HoleyCoin</p>
                    </div>

                    <form id="login-form" class="space-y-6 section-clickable">
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-void" contenteditable="false">Adresse Email Quantique</label>
                            <div class="relative">
                                <i class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path></svg></i>
                                <input type="email" class="w-full pl-12 pr-4 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-portal focus:border-transparent transition-all" placeholder="votre@email.com" required="">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-void" contenteditable="false">Mot de Passe Gravitationnel</label>
                            <div class="relative">
                                <i class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400" data-fa-i2svg=""><svg class="svg-inline--fa fa-lock" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"></path></svg></i>
                                <input type="password" class="w-full pl-12 pr-12 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-portal focus:border-transparent transition-all" placeholder="••••••••" required="">
                                <button type="button" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                    <i data-fa-i2svg=""><svg class="svg-inline--fa fa-eye" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"></path></svg></i>
                                </button>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="w-4 h-4 text-portal bg-gray-100 border-gray-300 rounded focus:ring-portal">
                                <span class="text-sm text-gray-600" contenteditable="false">Mémoriser dans le vide</span>
                            </label>
                            <span class="text-sm text-portal hover:text-blue-700 font-medium cursor-pointer" contenteditable="false">Mot de passe oublié?</span>
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-portal-600 to-quantum-600 cursor-pointer text-white py-4 rounded-lg font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-200" contenteditable="false">
                            <i class="mr-2" data-fa-i2svg=""><svg class="svg-inline--fa fa-right-to-bracket" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="right-to-bracket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path></svg></i>
                            Accéder au Portail
                        </button>



                        <div class="text-center pt-4">
                            <p class="text-gray-600" contenteditable="false">
                                Nouveau dans le vide?
                                <a href="{{ route('register') }}" class="text-portal hover:text-blue-700 font-semibold cursor-pointer" contenteditable="false">Créer un compte</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div id="info-section" class="text-white space-y-8 section-clickable">
                    <div class="space-y-6">
                        <h3 class="text-4xl font-bold leading-tight" contenteditable="false">
                            Votre Passerelle vers <span class="text-transparent bg-clip-text bg-gradient-to-r from-portal-600 to-quantum-600" contenteditable="false">l'Infini du Vide</span>
                        </h3>
                        <p class="text-xl text-gray-300" contenteditable="false">
                            Accédez à votre portefeuille HoleyCoin sécurisé et explorez notre catalogue exclusif de trous certifiés.
                        </p>
                    </div>

                    <div id="security-features" class="space-y-4 section-clickable">
                        <div class="flex items-center space-x-4 bg-white/10 backdrop-blur-sm rounded-lg p-4">
                            <div class="w-12 h-12 bg-portal rounded-full flex items-center justify-center">
                                <i class="text-white" data-fa-i2svg=""><svg class="svg-inline--fa fa-shield-halved" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shield-halved" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z"></path></svg></i>
                            </div>
                            <div>
                                <h4 class="font-semibold" contenteditable="false">Sécurité Quantique</h4>
                                <p class="text-gray-300 text-sm" contenteditable="false">Chiffrement gravitationnel de niveau militaire</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4 bg-white/10 backdrop-blur-sm rounded-lg p-4">
                            <div class="w-12 h-12 bg-quantum rounded-full flex items-center justify-center">
                                <i class="text-white" data-fa-i2svg=""><svg class="svg-inline--fa fa-coins" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="coins" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2l0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5V176c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336V300.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4V304v5.7V336zm32 0V304 278.1c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5V272c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5V432c0 44.2-86 80-192 80S0 476.2 0 432V396.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"></path></svg></i>
                            </div>
                            <div>
                                <h4 class="font-semibold" contenteditable="false">Portefeuille HoleyCoin</h4>
                                <p class="text-gray-300 text-sm" contenteditable="false">Gestion avancée de vos actifs dans le vide</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4 bg-white/10 backdrop-blur-sm rounded-lg p-4">
                            <div class="w-12 h-12 bg-void rounded-full flex items-center justify-center">
                                <i class="text-white" data-fa-i2svg=""><svg class="svg-inline--fa fa-chart-line" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"></path></svg></i>
                            </div>
                            <div>
                                <h4 class="font-semibold" contenteditable="false">Analytics du Néant</h4>
                                <p class="text-gray-300 text-sm" contenteditable="false">Suivez vos investissements en temps réel</p>
                            </div>
                        </div>
                    </div>

                    {{-- <div id="stats-section" class="bg-white/10 backdrop-blur-sm rounded-xl p-6 section-clickable">
                        <h4 class="text-xl font-bold mb-4" contenteditable="false">Statistiques en Temps Réel</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-portal" contenteditable="false">127,394</div>
                                <div class="text-sm text-gray-300" contenteditable="false">Trous Certifiés</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-quantum" contenteditable="false">0.00042</div>
                                <div class="text-sm text-gray-300" contenteditable="false">HLC/USD</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-green-400" contenteditable="false">+15.7%</div>
                                <div class="text-sm text-gray-300" contenteditable="false">24h Change</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-yellow-400" contenteditable="false">42,891</div>
                                <div class="text-sm text-gray-300" contenteditable="false">Utilisateurs Actifs</div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div id="testimonial" class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 section-clickable">
                        <div class="flex items-center space-x-4 mb-4">
                            <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-3.jpg" alt="avatar" class="w-12 h-12 rounded-full">
                            <div>
                                <h5 class="font-semibold" contenteditable="false">Dr. Stephen Hawking Jr.</h5>
                                <p class="text-gray-300 text-sm" contenteditable="false">Physicien Quantique</p>
                            </div>
                        </div>
                        <p class="text-gray-300 italic" contenteditable="false">
                            "LeBonTrou a révolutionné ma compréhension du vide. Mes investissements en trous noirs m'ont rapporté plus que mes recherches sur la relativité!"
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
    </main>
</x-layouts.guest>
