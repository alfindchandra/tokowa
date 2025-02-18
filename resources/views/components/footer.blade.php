<footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-6 items-center">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
         
             <a href="{{ url('/') }}" class="flex items-center justify-center mb-6">
            <img src="{{ asset('image/tokowa1.png') }}" alt="Logo Toko Bu Joni" class="h-12 mr-3 p-2 rounded-full bg-white">
            <h1 class="text-2xl font-bold">{{ config('app.namatoko') }}</h1>
               </a>
            <div>
                <h2 class="text-lg font-semibold mb-2">Navigasi</h2>
                <ul class="space-y-2">
                    <li><a href="{{ url('/') }}" class="hover:text-primary">Beranda</a></li>
                    <li><a href="{{ url('/tentang') }}" class="hover:text-primary">Tentang Kami</a></li>
                    <li><a href="{{ url('/produk') }}" class="hover:text-primary">Produk</a></li>
                    <li><a href="{{ url('/kontak') }}" class="hover:text-primary">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-lg font-semibold mb-2">Ikuti Kami</h2>
                <div class="space-y-2 flex flex-col">
                    <a href="#" class="hover:text-blue-500"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="{{ url('https://wa.me/' . config('app.nowa') .'') }}" class="hover:text-green-500"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
            <div>
                <h2 class="text-lg font-semibold mb-2">Informasi</h2>
                <ul class="space-y-2">
                    <li class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 737.509 740.824" id="Whatsapp" class="h-5 w-5">
                    <path fill-rule="evenodd" d="M630.056 107.658C560.727 38.271 468.525.039 370.294 0 167.891 0 3.16 164.668 3.079 367.072c-.027 64.699 16.883 127.855 49.016 183.523L0 740.824l194.666-51.047c53.634 29.244 114.022 44.656 175.481 44.682h.151c202.382 0 367.128-164.689 367.21-367.094.039-98.088-38.121-190.32-107.452-259.707m-259.758 564.8h-.125c-54.766-.021-108.483-14.729-155.343-42.529l-11.146-6.613-115.516 30.293 30.834-112.592-7.258-11.543c-30.552-48.58-46.689-104.729-46.665-162.379C65.146 198.865 202.065 62 370.419 62c81.521.031 158.154 31.81 215.779 89.482s89.342 134.332 89.311 215.859c-.07 168.242-136.987 305.117-305.211 305.117m167.415-228.514c-9.176-4.591-54.286-26.782-62.697-29.843-8.41-3.061-14.526-4.591-20.644 4.592-6.116 9.182-23.7 29.843-29.054 35.964-5.351 6.122-10.703 6.888-19.879 2.296-9.175-4.591-38.739-14.276-73.786-45.526-27.275-24.32-45.691-54.36-51.043-63.542-5.352-9.183-.569-14.148 4.024-18.72 4.127-4.11 9.175-10.713 13.763-16.07 4.587-5.356 6.116-9.182 9.174-15.303 3.059-6.122 1.53-11.479-.764-16.07-2.294-4.591-20.643-49.739-28.29-68.104-7.447-17.886-15.012-15.466-20.644-15.746-5.346-.266-11.469-.323-17.585-.323-6.117 0-16.057 2.296-24.468 11.478-8.41 9.183-32.112 31.374-32.112 76.521s32.877 88.763 37.465 94.885c4.587 6.122 64.699 98.771 156.741 138.502 21.891 9.45 38.982 15.093 52.307 19.323 21.981 6.979 41.983 5.994 57.793 3.633 17.628-2.633 54.285-22.19 61.932-43.616 7.646-21.426 7.646-39.791 5.352-43.617-2.293-3.826-8.41-6.122-17.585-10.714" clip-rule="evenodd" fill="#ffffff" class="color000000 svgShape"></path>
                    </svg>
                        <a href="{{ url('/privacy-policy') }}" class="hover:text-primary">{{ config('app.nowa') }}</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="Maps" class="h-5 w-5">
                        <path d="M17.55 22.87a1 1 0 0 1-.92-.61l-.57-.89c-.39-.61-.93-1.44-1.52-2.38C11.45 14 10 10.67 10 8.72a7.61 7.61 0 0 1 15.21 0c0 2.44-2.42 6.9-4.45 10.21-2.49 3.94-2.63 3.94-3.21 3.94Zm0-19.74A5.6 5.6 0 0 0 12 8.72c0 .87.56 3.22 4.29 9.21.51.83 1 1.57 1.36 2.14.37-.56.86-1.31 1.4-2.19 2.64-4.3 4.16-7.64 4.16-9.16a5.61 5.61 0 0 0-5.66-5.59Z" fill="#ffffff" class="color000000 svgShape"></path>
                        <path d="M17.7 30.88a1 1 0 0 1-.58-.19c-1.71-1.21-3.64-2.54-4.27-2.92l-9.46.67a1 1 0 0 1-1-.54 1 1 0 0 1 .13-1.1l7-8.2a1 1 0 0 1 .61-.34l5.07-.79a1 1 0 0 1 1 .46c.51.83 1 1.57 1.36 2.14.37-.56.86-1.31 1.4-2.19a1 1 0 0 1 1-.47l5.56.79a1 1 0 0 1 .81.68c3.31 10 3.31 10.2 3.31 10.4a1 1 0 0 1-.62.92 1 1 0 0 1-.95-.1c-.37-.21-2.68-1.3-4.87-2.32l-5 3a1 1 0 0 1-.5.1zm-4.63-5.13c.36 0 .52 0 4.68 2.94l4.93-2.9a1 1 0 0 1 .92 0l3.4 1.56c-.64-2-1.61-5-2.37-7.26l-4.31-.61c-2.11 3.39-2.26 3.39-2.81 3.39a1 1 0 0 1-.92-.61l-.57-.89c-.31-.49-.72-1.11-1.17-1.82l-4.05.63-5.17 6.09c3.69-.27 7.27-.52 7.44-.52zm4.39-14.5a2.93 2.93 0 1 1 2.93-2.93 2.93 2.93 0 0 1-2.93 2.93zm0-3.86a.93.93 0 1 0 .93.93.93.93 0 0 0-.93-.93z" fill="#ffffff" class="color000000 svgShape"></path>
                        </svg>
                        <a href="{{ url('/terms') }}" class="hover:text-primary">{{ config('app.alamat') }}</a>
                    </li>
                    <li class="flex items-center space-x-2">
                       <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 16 16" id="Gmail" class="h-5 w-5">
                        <path d="M14.5 2h-13A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm-1.766 1L8 6.738 3.266 3h9.468zM2 13V4.646l6 4.615 6-4.616V13H2z" fill="#ffffff" class="color000000 svgShape"></path>
                        </svg>
                        <a href="{{ url('/terms') }}" class="hover:text-primary">{{ config('app.gmail') }}</a>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="my-6 border-gray-700" />

     
        <div class="text-center text-sm">
            &copy; {{ date('Y') }} {{ config('app.namatoko') }}. Semua Hak Dilindungi.
        </div>
    </div>
</footer>
