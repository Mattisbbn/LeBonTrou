<x-layouts.guest>
    <main>
        <section class="flex bg-gradient-to-br from-void-950 via-deep-950 to-portal-600 lg:h-[700px] h-screen relative overflow-hidden text-white">
            <div class="w-10/12 m-auto flex items-center justify-center lg:flex-row flex-col ">
                <div class="lg:w-1/2 md:w-4/5 w-full">
                    <div class="space-y-8">
                        <h1 class="2xl:text-6xl sm:text-5xl  text-4xl   font-bold">Le trou n'est plus une<span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-ribbon-700 to-medium-purple-500"><br>absence de matière</span></h1>
                        <p class="2xl:text-2xl sm:text-xl  text-lg  my-4">C'est une ressource stratégique.</p>
                        <p class="text-white/75 2xl:text-xl sm:text-lg text-base mt-6">Découvrez le premier marché mondial de trous certifiés. <br> De la singularité cosmique au simple trou de serrure.</p>
                        <button class="bg-portal-600 px-8 py-4 rounded-md  font-semibold hover:bg-blue-700 transition-colors sm:text-lg text-sm">Explorer le catalogue</button>
                        <a href="{{ route('hlc') }}" class="ms-2 bg-portal px-8 py-4 rounded-md  font-semibold border sm:text-lg text-sm border-white hover:bg-white hover:text-void-950 transition-colors">Cours HoleyCoin</a>
                    </div>
                </div>
                <div class="relative xl:w-2/5 lg:w-2/6 md:w-4/5 w-full">
                    <img class="w-full h-96 object-cover rounded-2xl shadow-2xl" src="{{ asset('images/home/blackhole.webp') }}">
                    <div class="absolute -top-4 -right-4 bg-quantum-900 px-4 py-2 rounded-lg">
                        <span class="text-sm font-semibold" contenteditable="false">Certifié Quantique</span>
                    </div>
                </div>
            </div>

        </section>
    </main>
</x-layouts.guest>
