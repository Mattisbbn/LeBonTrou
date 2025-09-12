<header class="bg-black-100 text-white fixed top-0 w-full z-50 shadow-md">
    <div class="w-11/12 mx-auto py-2 flex justify-between items-center">
        <a href="{{ route('home') }}">
            <h1 class="text-3xl font-bold">LeBonTrou</h1>
        </a>

        <div class="gap-2 items-center justify-center">
            <div id="menu" class="gap-6 hidden md:flex relative">
                <div class="flex flex-col md:static md:flex-row absolute top-0 -left-40 gap-0 md:gap-6 z-10 bg-black-100/70 rounded-lg md:w-auto md:bg-transparent whitespace-nowrap items-center">
                    <a class="hover:bg-gray-50/5 md:hover:bg-transparent w-full py-2 px-4 md:py-0 md:px-0" href="{{ route('products') }}">Catalogue</a>
                    <a class="hover:bg-gray-50/5 md:hover:bg-transparent w-full py-2 px-4 md:py-0 md:px-0" href="{{ route('hlc') }}">Cours HooleyCoin</a>
                    <a class="hover:bg-gray-50/5 md:hover:bg-transparent w-full py-2 px-4 md:py-0 md:px-0" href="">A propos</a>
                    <a href="{{ route('login') }}" class="bg-portal-600 px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors" contenteditable="false">
                        <i class="mr-2" data-fa-i2svg=""><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path></svg></i>Connexion
                    </a>
                </div>
            </div>
            <img id="menu-icon" src="{{ asset('images/global/hamburger-icon.svg') }}" class="block md:hidden h-6 w-6">
        </div>
    </div>
</header>
<div class="pt-12">
</div>
