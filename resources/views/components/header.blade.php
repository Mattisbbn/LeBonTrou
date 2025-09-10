<header class="bg-black-100 text-white">

    <div class="w-11/12 mx-auto py-2 flex justify-between items-center">

        <a href="{{ route('home') }}">
            <h1 class="text-3xl font-bold">LeBonTrou</h1>
        </a>

        <div class=" gap-2 items-center justify-center ">
            <div id="menu" class="gap-6 hidden md:flex relative">
                <div class="flex flex-col md:static md:flex-row  absolute top-0 -left-40  gap-0 md:gap-6  z-10 bg-black-100/70  rounded-lg  md:w-auto md:bg-transparent whitespace-nowrap">
                    <a class="hover:bg-gray-50/5 md:hover:bg-transparent w-full py-2 px-4 md:py-0 md:px-0" href="#">Catalogue</a>
                    <a class="hover:bg-gray-50/5 md:hover:bg-transparent w-full py-2 px-4 md:py-0 md:px-0" href="{{ route('hlc') }}">Cours HooleyCoin</a>
                    <a class="hover:bg-gray-50/5 md:hover:bg-transparent w-full py-2 px-4 md:py-0 md:px-0" href="#">A propos</a>
                </div>

            </div>
            <img id="menu-icon" src="{{ asset('images/global/hamburger-icon.svg') }}" class="block md:hidden h-6 w-6">

        </div>


    </div>
</header>
