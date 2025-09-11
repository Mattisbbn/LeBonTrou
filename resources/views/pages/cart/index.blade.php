<x-layouts.guest>

<div class="max-w-5xl mx-auto px-6 py-8">
        
    <nav id="breadcrumb" class="flex items-center space-x-2 text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-portal-600 cursor-pointer">Accueil</a>
        <i class="text-xs" data-fa-i2svg=""><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path></svg></i>
        <a href="{{ route('products') }}" class="hover:text-portal-600 cursor-pointer">Catalogue</a>
    </nav>

    <div class="text-center mb-8">
        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="text-green-600 text-3xl" data-fa-i2svg=""><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg></i>
        </div>
        <h1 class="text-4xl font-bold text-void mb-2">Récapitulatif de votre achat</h1>
        <p class="text-gray-600 text-lg">Vérifiez les détails avant de finaliser votre transaction</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <section id="order-details" class="lg:col-span-2 space-y-6">
            
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-void mb-6 flex items-center">
                    <i class="text-portal mr-3" data-fa-i2svg=""><svg class="svg-inline--fa fa-bag-shopping" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bag-shopping" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"></path></svg></i>
                    Détails du produit
                </h2>
                <div class="flex items-start space-x-6">
                    <img class="w-32 h-32 object-cover rounded-xl" src="{{ $cart[0]['image'] }}" alt="black hole in space with event horizon, cosmic void, scientific visualization">
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-void mb-2">{{ $cart[0]['name'] }}</h3>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Masse:</span>
                                <span class="font-semibold">{{ $cart[0]['price'] }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Catégorie:</span>
                                <span class="font-semibold">{{ $cart[0]['category'] }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Livraison:</span>
                                <span class="font-semibold">{{ $cart[0]['delivery'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-500 line-through">{{ $cart[0]['price'] }}</p>
                        <p class="text-2xl font-bold text-portal">{{ $cart[0]['price'] }}</p>
                        <p class="text-green-600 text-sm font-semibold">-23% de réduction</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-void mb-6 flex items-center">
                    <i class="text-portal mr-3" data-fa-i2svg=""><svg class="svg-inline--fa fa-chart-line" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"></path></svg></i>
                    Cours HoleyCoin en temps réel
                </h2>
                <div id="hlc-main-chart" class="h-64 mb-4" data-highcharts-chart="0" style="overflow: hidden;"><div id="highcharts-r8ei4ke-0" dir="ltr" style="position: relative; overflow: hidden; width: 576px; height: 250px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); user-select: none; touch-action: manipulation; outline: none; padding: 0px;" class="highcharts-container "><svg version="1.1" class="highcharts-root" style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, sans-serif; font-size: 1rem;" xmlns="http://www.w3.org/2000/svg" width="576" height="250" viewBox="0 0 576 250" role="img" aria-label=""><desc>Created with Highcharts 12.4.0</desc><defs><filter id="highcharts-drop-shadow-0"><feDropShadow dx="1" dy="1" flood-color="#000000" flood-opacity="0.75" stdDeviation="2.5"></feDropShadow></filter><clipPath id="highcharts-r8ei4ke-11-"><rect x="0" y="0" width="497" height="193" fill="none"></rect></clipPath><linearGradient x1="0" y1="0" x2="0" y2="1" id="highcharts-r8ei4ke-14"><stop offset="0" stop-color="rgb(37,99,235)" stop-opacity="0.3"></stop><stop offset="1" stop-color="rgb(37,99,235)" stop-opacity="0.05"></stop></linearGradient></defs><rect fill="transparent" class="highcharts-background" filter="none" x="0" y="0" width="576" height="250" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="69" y="10" width="497" height="193" filter="none"></rect><g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1"><path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 107.5 10 L 107.5 203" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 188.5 10 L 188.5 203" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 269.5 10 L 269.5 203" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 351.5 10 L 351.5 203" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 432.5 10 L 432.5 203" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 513.5 10 L 513.5 203" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1"><path fill="none" stroke="#f3f4f6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 69 203.5 L 566 203.5" opacity="1"></path><path fill="none" stroke="#f3f4f6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 69 138.5 L 566 138.5" opacity="1"></path><path fill="none" stroke="#f3f4f6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 69 74.5 L 566 74.5" opacity="1"></path><path fill="none" stroke="#f3f4f6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 69 10.5 L 566 10.5" opacity="1"></path></g><rect fill="none" class="highcharts-plot-border" data-z-index="1" stroke="#cccccc" stroke-width="0" x="69" y="10" width="497" height="193"></rect><g class="highcharts-axis highcharts-xaxis" data-z-index="2"><path fill="none" class="highcharts-tick" stroke="#e5e7eb" stroke-width="1" d="M 107.5 203 L 107.5 213" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#e5e7eb" stroke-width="1" d="M 188.5 203 L 188.5 213" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#e5e7eb" stroke-width="1" d="M 269.5 203 L 269.5 213" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#e5e7eb" stroke-width="1" d="M 351.5 203 L 351.5 213" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#e5e7eb" stroke-width="1" d="M 432.5 203 L 432.5 213" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#e5e7eb" stroke-width="1" d="M 513.5 203 L 513.5 213" opacity="1"></path><path fill="none" class="highcharts-axis-line" stroke="#e5e7eb" stroke-width="1" data-z-index="7" d="M 69 203.5 L 566 203.5"></path></g><g class="highcharts-axis highcharts-yaxis" data-z-index="2"><text x="26.32501220703125" data-z-index="7" text-anchor="middle" transform="translate(0,0) rotate(270 26.32501220703125 106.5)" class="highcharts-axis-title" style="font-size: 0.8em; fill: rgb(107, 114, 128);" y="106.5">Prix (€)</text><path fill="none" class="highcharts-axis-line" stroke="#333333" stroke-width="0" data-z-index="7" d="M 69 10 L 69 203"></path></g><g class="highcharts-series-group" data-z-index="3" filter="none"><g class="highcharts-series highcharts-series-0 highcharts-area-series" data-z-index="0.1" opacity="1" transform="translate(69,10) scale(1 1)" clip-path="url(#highcharts-r8ei4ke-11-)"><path fill="url(#highcharts-r8ei4ke-14)" d="M 4.8725490196078 40.658666666667 L 86.081699346405 38.857333333333 L 167.2908496732 44.261333333333 L 248.5 35.640666666667 L 329.7091503268 29.979333333333 L 410.91830065359 34.225333333333 L 492.12745098039 32.552666666667 L 492.12745098039 193 L 410.91830065359 193 L 329.7091503268 193 L 248.5 193 L 167.2908496732 193 L 86.081699346405 193 L 4.8725490196078 193 Z" class="highcharts-area" data-z-index="0" fill-opacity="1" style="pointer-events: none;"></path><path fill="none" d="M 4.8725490196078 40.658666666667 L 86.081699346405 38.857333333333 L 167.2908496732 44.261333333333 L 248.5 35.640666666667 L 329.7091503268 29.979333333333 L 410.91830065359 34.225333333333 L 492.12745098039 32.552666666667" class="highcharts-graph" data-z-index="1" stroke="#2563eb" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" filter="none"></path><path fill="none" d="M 4.8725490196078 40.658666666667 L 86.081699346405 38.857333333333 L 167.2908496732 44.261333333333 L 248.5 35.640666666667 L 329.7091503268 29.979333333333 L 410.91830065359 34.225333333333 L 492.12745098039 32.552666666667" data-z-index="2" class="highcharts-tracker-line" stroke-linecap="round" stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"></path></g><g class="highcharts-markers highcharts-series-0 highcharts-area-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(69,10) scale(1 1)" clip-path="none"><path fill="#2563eb" d="M 4.5 42.658666666667 A 2 2 0 1 1 4.5001999999996665 42.658666656667 Z" stroke="#ffffff" stroke-width="0" opacity="1" class="highcharts-point"></path><path fill="#2563eb" d="M 86.5 40.857333333333 A 2 2 0 1 1 86.50019999999967 40.857333323333 Z" stroke="#ffffff" stroke-width="0" opacity="1" class="highcharts-point"></path><path fill="#2563eb" d="M 167.5 46.261333333333 A 2 2 0 1 1 167.50019999999967 46.261333323333 Z" stroke="#ffffff" stroke-width="0" opacity="1" class="highcharts-point"></path><path fill="#2563eb" d="M 248.5 37.640666666667 A 2 2 0 1 1 248.50019999999967 37.640666656667 Z" stroke="#ffffff" stroke-width="0" opacity="1" class="highcharts-point"></path><path fill="#2563eb" d="M 329.5 31.979333333333 A 2 2 0 1 1 329.50019999999967 31.979333323332998 Z" stroke="#ffffff" stroke-width="0" opacity="1" class="highcharts-point"></path><path fill="#2563eb" d="M 410.5 36.225333333333 A 2 2 0 1 1 410.50019999999967 36.225333323333 Z" stroke="#ffffff" stroke-width="0" opacity="1" class="highcharts-point"></path><path fill="#2563eb" d="M 492.5 34.552666666667 A 2 2 0 1 1 492.50019999999967 34.552666656667 Z" stroke="#ffffff" stroke-width="0" opacity="1" class="highcharts-point"></path></g></g><text x="288" class="highcharts-title" data-z-index="4" text-align="center" y="25" text-anchor="middle" transform-origin="10 22" transform="translate(0,0) scale(1 1)" style="font-size: 1.2em; font-weight: bold; fill: rgb(51, 51, 51);"></text><text x="288" class="highcharts-subtitle" data-z-index="4" text-align="center" y="24" text-anchor="middle" transform-origin="10 15" transform="translate(0,0) scale(1 1)" style="font-size: 0.8em; fill: rgb(102, 102, 102);"></text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4" style="font-size: 0.8em; fill: rgb(102, 102, 102);" text-align="left" y="247" transform-origin="10 15" transform="translate(0,0) scale(1 1)"></text><g class="highcharts-datalabels-group" data-z-index="6"></g><g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"><text x="107.45110588008" text-anchor="middle" transform="translate(0,0)" style="cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" y="230" opacity="1">12:00</text><text x="188.66025620688" text-anchor="middle" transform="translate(0,0)" style="cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" y="230" opacity="1">16:00</text><text x="269.86940653368" text-anchor="middle" transform="translate(0,0)" style="cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" y="230" opacity="1">20:00</text><text x="351.07855686048" text-anchor="middle" transform="translate(0,0)" style="cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" y="230" opacity="1">11 sept.</text><text x="432.28770718727" text-anchor="middle" transform="translate(0,0)" style="cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" y="230" opacity="1">04:00</text><text x="513.49685751407" text-anchor="middle" transform="translate(0,0)" style="cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" y="230" opacity="1">08:00</text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="54" text-anchor="end" transform="translate(0,0)" style="cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" y="207" opacity="1">0</text><text x="54" text-anchor="end" transform="translate(0,0)" style="cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" y="142" opacity="1">0,5</text><text x="54" text-anchor="end" transform="translate(0,0)" style="cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" y="78" opacity="1">1</text><text x="54" text-anchor="end" transform="translate(0,0)" style="cursor: default; font-size: 0.8em; fill: rgb(51, 51, 51);" y="14" opacity="1">1,5</text></g></svg></div></div>
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="text-sm text-gray-600">Prix actuel</p>
                        <p class="text-xl font-bold text-portal">1.247 €</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="text-sm text-gray-600">Variation 24h</p>
                        <p class="text-xl font-bold text-green-600">+5.23%</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="text-sm text-gray-600">Volume</p>
                        <p class="text-xl font-bold text-gray-800">1.2M HLC</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-void mb-6 flex items-center">
                    <i class="text-portal mr-3" data-fa-i2svg=""><svg class="svg-inline--fa fa-truck" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg></i>
                    Informations de livraison
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-semibold text-void mb-3">Adresse de livraison</h3>
                        <div class="bg-gray-50 rounded-lg p-4 space-y-1 text-sm">
                            <p class="font-semibold">Dr. Stephen Hawking</p>
                            <p>Institut de Physique Théorique</p>
                            <p>Université de Cambridge</p>
                            <p>Cambridge CB3 0WA, Royaume-Uni</p>
                            <p>Coordonnées galactiques: Secteur 7G</p>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-void mb-3">Méthode de livraison</h3>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <i class="text-portal" data-fa-i2svg=""><svg class="svg-inline--fa fa-rocket" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rocket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2v82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9V380.8c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"></path></svg></i>
                                <span class="font-semibold">Téléportation Quantique</span>
                            </div>
                            <p class="text-sm text-gray-600">Livraison instantanée via tunnel de ver certifié</p>
                            <p class="text-sm text-green-600 font-semibold mt-2">GRATUIT</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="payment-summary" class="space-y-6">
            
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-void mb-6 flex items-center">
                    <i class="text-portal mr-3" data-fa-i2svg=""><svg class="svg-inline--fa fa-calculator" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calculator" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM96 64H288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32zm32 160a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM96 352a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM64 416c0-17.7 14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM192 256a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm64-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM288 448a32 32 0 1 1 0-64 32 32 0 1 1 0 64z"></path></svg></i>
                    Résumé financier
                </h2>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Prix du produit</span>
                        <span class="font-semibold">3,200 HLC</span>
                    </div>
                    <div class="flex justify-between items-center text-green-600">
                        <span>Réduction (-23%)</span>
                        <span class="font-semibold">-750 HLC</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Sous-total</span>
                        <span class="font-semibold">2,450 HLC</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Livraison</span>
                        <span class="font-semibold text-green-600">Gratuit</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Taxes quantiques</span>
                        <span class="font-semibold">245 HLC</span>
                    </div>
                    <hr class="border-gray-200">
                    <div class="flex justify-between items-center text-xl font-bold">
                        <span class="text-void">Total</span>
                        <span class="text-portal">2,695 HLC</span>
                    </div>
                    <p class="text-sm text-gray-600 text-center">≈ 3,361.85 € au cours actuel</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h3 class="text-xl font-bold text-void mb-6">Méthode de paiement</h3>
                <div class="space-y-3">
                    <label class="flex items-center p-4 border-2 border-portal rounded-xl cursor-pointer bg-blue-50">
                        <input type="radio" name="payment" class="mr-3" checked="">
                        <div class="flex items-center space-x-3">
                            <i class="text-portal text-xl" data-fa-i2svg=""><svg class="svg-inline--fa fa-bitcoin" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="bitcoin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zm-141.651-35.33c4.937-32.999-20.191-50.739-54.55-62.573l11.146-44.702-27.213-6.781-10.851 43.524c-7.154-1.783-14.502-3.464-21.803-5.13l10.929-43.81-27.198-6.781-11.153 44.686c-5.922-1.349-11.735-2.682-17.377-4.084l.031-.14-37.53-9.37-7.239 29.062s20.191 4.627 19.765 4.913c11.022 2.751 13.014 10.044 12.68 15.825l-12.696 50.925c.76.194 1.744.473 2.829.907-.907-.225-1.876-.473-2.876-.713l-17.796 71.338c-1.349 3.348-4.767 8.37-12.471 6.464.271.395-19.78-4.937-19.78-4.937l-13.51 31.147 35.414 8.827c6.588 1.651 13.045 3.379 19.4 5.006l-11.262 45.213 27.182 6.781 11.153-44.733a1038.209 1038.209 0 0 0 21.687 5.627l-11.115 44.523 27.213 6.781 11.262-45.128c46.404 8.781 81.299 5.239 95.986-36.727 11.836-33.79-.589-53.281-25.004-65.991 17.78-4.098 31.174-15.792 34.747-39.949zm-62.177 87.179c-8.41 33.79-65.308 15.523-83.755 10.943l14.944-59.899c18.446 4.603 77.6 13.717 68.811 48.956zm8.417-87.667c-7.673 30.736-55.031 15.12-70.393 11.292l13.548-54.327c15.363 3.828 64.836 10.973 56.845 43.035z"></path></svg></i>
                            <div>
                                <p class="font-semibold">Portefeuille HoleyCoin</p>
                                <p class="text-sm text-gray-600">Solde: 5,847 HLC</p>
                            </div>
                        </div>
                    </label>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h3 class="text-xl font-bold text-void mb-4">Sécurité &amp; Garanties</h3>
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <i class="text-green-500" data-fa-i2svg=""><svg class="svg-inline--fa fa-shield-halved" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shield-halved" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z"></path></svg></i>
                        <span class="text-sm">Transaction sécurisée 256-bit</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="text-green-500" data-fa-i2svg=""><svg class="svg-inline--fa fa-certificate" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="certificate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z"></path></svg></i>
                        <span class="text-sm">Authentifié blockchain</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="text-green-500" data-fa-i2svg=""><svg class="svg-inline--fa fa-arrow-rotate-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-rotate-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M125.7 160H176c17.7 0 32 14.3 32 32s-14.3 32-32 32H48c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32s32 14.3 32 32v51.2L97.6 97.6c87.5-87.5 229.3-87.5 316.8 0s87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3s-163.8-62.5-226.3 0L125.7 160z"></path></svg></i>
                        <span class="text-sm">Retour 30 jours</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="text-green-500" data-fa-i2svg=""><svg class="svg-inline--fa fa-infinity" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="infinity" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M0 241.1C0 161 65 96 145.1 96c38.5 0 75.4 15.3 102.6 42.5L320 210.7l72.2-72.2C419.5 111.3 456.4 96 494.9 96C575 96 640 161 640 241.1v29.7C640 351 575 416 494.9 416c-38.5 0-75.4-15.3-102.6-42.5L320 301.3l-72.2 72.2C220.5 400.7 183.6 416 145.1 416C65 416 0 351 0 270.9V241.1zM274.7 256l-72.2-72.2c-15.2-15.2-35.9-23.8-57.4-23.8C100.3 160 64 196.3 64 241.1v29.7c0 44.8 36.3 81.1 81.1 81.1c21.5 0 42.2-8.5 57.4-23.8L274.7 256zm90.5 0l72.2 72.2c15.2 15.2 35.9 23.8 57.4 23.8c44.8 0 81.1-36.3 81.1-81.1V241.1c0-44.8-36.3-81.1-81.1-81.1c-21.5 0-42.2 8.5-57.4 23.8L365.3 256z"></path></svg></i>
                        <span class="text-sm">Garantie éternelle</span>
                    </div>
                </div>
            </div>

            <button class="w-full bg-portal-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-blue-700 transition-colors shadow-lg">
                <i class="mr-2" data-fa-i2svg=""><svg class="svg-inline--fa fa-lock" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"></path></svg></i>Finaliser l'achat
            </button>

            <div class="text-center">
                <p class="text-xs text-gray-500">En finalisant votre achat, vous acceptez nos</p>
                <p class="text-xs text-portal hover:underline cursor-pointer">Conditions générales de vente cosmique</p>
            </div>
        </section>
    </div>
</div>

</x-layouts.guest>
