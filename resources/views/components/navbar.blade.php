<nav class="bg-gradient-to-r from-teal-500 to-tertiary shadow-sm shadow-teal-800 z-50 fixed top-0 left-0 right-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-18">
            <!-- Logo and Brand Name -->
             <div class="flex-shrink-0 flex items-center gap-1">
            <img class="hidden lg:block h-10 w-auto fill-current p-1.5 rounded-full bg-black" src="{{ asset('image/tokowa2.png') }}" alt="Logo">
            <a href="#" class="flex-shrink-0 flex items-center font-bold text-2xl italic">
                Toko<span class="ml-2 text-white font-caveat"> Bu Joni</span></div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="/" class="text-white hover:text-slate-900 text-lg font-medium">Beranda</a>
                    <a href="{{ route('home.tentang') }}" class="text-white hover:text-slate-900 text-lg font-medium">Tentang Kami</a>
                    <a href="/" class="text-white hover:text-slate-900 text-lg font-medium">Produk</a>
                    <a href="#" class="text-white hover:text-slate-900 text-lg font-medium">Kontak</a>
                </div>
            </div>

            <div class="hidden md:block">
                <a href="https://wa.me/+6281382176161{{ config('app.nowa') }}?text=Saya%20ingin%20membeli%20produk%20yang%20anda%20jual%20barang%20apa%20saja%20yang%20murah%20hari%20ini" target="_blank" class="border border-white text-white hover:bg-teal-400 px-6 py-2 rounded-lg font-semibold transition-colors flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" enable-background="new 0 0 24.692 24.763" viewBox="0 0 24.692 24.763" id="Whatsapp">
                <path d="M12.692,0c-6.627,0-12,5.373-12,12c0,2.333,0.677,4.504,1.829,6.347L0,24.763l6.444-2.533C8.266,23.346,10.4,24,12.692,24c6.627,0,12-5.373,12-12S19.32,0,12.692,0z M12.692,22c-1.828,0-3.627-0.51-5.204-1.475l-0.849-0.52l-3.1,1.218l1.211-3.082l-0.534-0.854C3.22,15.691,2.692,13.863,2.692,12c0-5.514,4.486-10,10-10s10,4.486,10,10S18.207,22,12.692,22z" fill="#ffffff" class="color000000 svgShape"></path>
                <path d="M10,14.693c1.368,1.368,4.523,3.358,6.279,2.824s2.019-1.475,2.019-1.475l-0.039-1.456l-2.863-1c0,0-0.637,0.055-1.504,1.077c-1.165-0.155-2.413-1.449-2.413-1.449s-1.294-1.249-1.449-2.413c1.022-0.867,1.077-1.504,1.077-1.504l-1-2.863L8.651,6.394c0,0-0.941,0.262-1.475,2.019S8.631,13.324,10,14.693z" fill="#ffffff" class="color000000 svgShape"></path>
                </svg>
                        <span> Hubungi</span>
                       
                    </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-teal-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="text-white hover:bg-teal-600 block px-3 py-2 rounded-md text-base font-medium">Beranda</a>
            <a href="#" class="text-white hover:bg-teal-600 block px-3 py-2 rounded-md text-base font-medium">Tentang Kami</a>
            <a href="#" class="text-white hover:bg-teal-600 block px-3 py-2 rounded-md text-base font-medium">Produk</a>
            <a href="#" class="text-white hover:bg-teal-600 block px-3 py-2 rounded-md text-base font-medium">Kontak</a>
            <a href="https://wa.me/{{ config('app.nowa') }}?text=Saya%20ingin%20membeli%20produk%20yang%20anda%20jual%20barang%20apa%20saja%20yang%20murah%20hari%20ini" target="_blank" class="border border-white text-white hover:bg-teal-400 px-4 py-2 rounded-lg font-semibold transition-colors flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                        </svg><span> Hubungi Admin</span>
                       
            </a>       
        </div>
    </div>
</nav>
