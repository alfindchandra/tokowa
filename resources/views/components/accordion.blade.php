<div class="mt-20">
    
<ol class="flex justify-center items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white dark:text-gray-400 sm:text-base sm:p-4 sm:space-x-4 rtl:space-x-reverse">
    <li class="flex items-center text-primary">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
            1
        </span>
       <a href="{{ url('/produk') }}">Melihat Produk</a> 
        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center text-primary">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            2
        </span>
        <a href="{{ url('/checkout') }}">Masukan Pesanan Ke Keranjang</a>
        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center text-primary">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            3
        </span>
        <a href="{{ url('https://wa.me/' . config('app.nowa')) }}">Kirim Wa</a>
    </li>
</ol>
</div>

<div class="w-full max-w-3xl mx-auto">
    <div class="accordion-item border border-gray-700 rounded-t-lg p-1">
        <button class="accordion-header w-full flex justify-between items-center p-4 bg-white hover:bg-gray-50 transition-all">
            <span class="text-lg font-medium">{{ config('app.namatoko') }} </span>
            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div class="accordion-content hidden p-4 bg-gray-50">
            <p>{{ config('app.namatoko') }} adalah toko online yang menjual berbagai macam produk berkualitas terbaik. Kami menyediakan produk berkualitas tinggi dengan harga terjangkau.</p>
        </div>
    </div>

    <div class="accordion-item border border-gray-700 p-1 -mt-0.5">
        <button class="accordion-header w-full flex justify-between items-center p-4 bg-white hover:bg-gray-50 transition-all">
            <span class="text-lg font-medium">Kategori Produk</span>
            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div class="accordion-content hidden p-4 bg-gray-50">
            <p>kami memiliki beberapa kategori produk yang menarik untuk Anda. Silakan pilih kategori yang Anda inginkan. pada halaman produk. anda dapat memilih produk yang Anda inginkan.</p>
        </div>
    </div>

    <div class="accordion-item border border-gray-700 rounded-b-lg p-1">
        <button class="accordion-header w-full flex justify-between items-center p-4 bg-white hover:bg-gray-50 transition-all">
            <span class="text-lg font-medium">Informasi Pengiriman</span>
            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div class="accordion-content hidden p-4 bg-gray-50">
            <p>setelah anda memesan melewati whatsapp kami akan segera mengirimkan pesanan anda ke alamat anda. pastikan mengisi alamat anda dengan benar.</p>
        </div>
    </div>
</div>