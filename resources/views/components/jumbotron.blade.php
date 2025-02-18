
<div class="relative max-h-screen bg-gradient-to-l to-teal-200 from-teal-600">
    <div class="container mx-auto px-4 py-12 md:py-24 text-center md:text-left">
        <div class="flex flex-col md:flex-row items-center  justify-between gap-8">
            <div class="w-full md:w-1/2 space-y-6">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-gray-900 font-caveat">
                    Slamat Datang
                </h1><a class="text-teal-950 text-4xl md:text-5xl lg:text-6xl font-bold">Di {{ config('app.namatoko') }}</a>
                <p class="text-lg text-gray-600 max-w-xl">
                   Kami membeli produk dari sales dan pabrik untuk memberikan Anda harga terbaik dan kualitas yang tak tertandingi. Temukan produk impian Anda di sini!"
                </p>
                <div class="flex flex-col md:flex-row gap-4">
                    <a href="#" class="bg-teal-500 hover:bg-teal-600 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                        Lihat Produk
                    </a>
                    <a href="https://wa.me/{{ config('app.nowa') }}?text=Saya%20ingin%20membeli%20produk%20yang%20anda%20jual" target="_blank" class="border border-teal-800 text-teal-800 hover:bg-teal-500 hover:text-white px-8 py-3 rounded-lg font-semibold transition-colors flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                        </svg>
                        <span> Hubungi Admin</span>
                       
                    </a>
                </div>
            </div>

          
        <div class="w-full md:w-1/2 justify-center hidden md:block">
                <img src="{{ asset('image/jumbotron.png') }}" alt="">
                </div>
            </div>
            </div>
        </div>
    </div>



</div>