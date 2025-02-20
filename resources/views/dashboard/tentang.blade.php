@extends('dashboard.navbarpro')


@section('tentang')
<div class="container py-20">
    <div class="bg-gray-100 text-gray-900">
    <div class="max-w-5xl mx-auto p-6">
        <header class="text-center mb-10">
            <h1 class="text-4xl font-bold text-primary">Tentang Kami</h1>
            <p class="text-lg mt-2">Selamat datang di {{ config('app.namatoko') }}, tempat di mana kebutuhan sehari-hari Anda terpenuhi dengan mudah dan nyaman. Kami adalah toko kelontong yang berkomitmen untuk menyediakan berbagai produk berkualitas tinggi dengan harga yang terjangkau. Dengan pengalaman bertahun-tahun dalam melayani masyarakat, kami memahami betul apa yang dibutuhkan oleh pelanggan kami.</p>
            <p class="text-lg mt-2">Di {{config('app.namatoko')}}, kami percaya bahwa setiap pelanggan adalah bagian dari keluarga kami. Oleh karena itu, kami selalu berusaha untuk memberikan pelayanan terbaik, mulai dari pilihan produk yang lengkap hingga pengalaman berbelanja yang menyenangkan. Kami menyediakan berbagai macam barang, mulai dari bahan makanan segar, produk rumah tangga, hingga kebutuhan sehari-hari lainnya. Kami bangga menginformasikan bahwa semua produk kami berasal dari distributor langsung, sehingga Anda dapat yakin akan kualitas dan kesegaran setiap barang yang Anda beli.</p>
        </header>
        <section class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800">Visi</h2>
            <p class="mt-2 text-gray-600">Visi kami adalah menjadi toko kelontong pilihan utama di {{ config('app.alamat') }}, dikenal karena kualitas produk dan pelayanan yang ramah. Kami ingin menciptakan pengalaman berbelanja yang tidak hanya memenuhi kebutuhan, tetapi juga memberikan kepuasan dan kenyamanan bagi setiap pelanggan yang datang.</p>
            <p class="mt-2 text-gray-600">Kami berkomitmen untuk terus berinovasi dalam menghadirkan produk-produk baru dan menarik, serta menjaga hubungan baik dengan pelanggan dan komunitas sekitar. Dengan sumber barang dari distributor langsung, kami dapat memastikan bahwa setiap produk yang kami tawarkan adalah yang terbaik untuk Anda.</p>
        </section>
        <section class="mt-6 bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800">Misi</h2>
            <p class="mt-2 text-gray-600">Misi kami adalah menyediakan produk berkualitas tinggi dan layanan yang memuaskan bagi setiap pelanggan. Kami berusaha untuk:</p>
            <ul class="list-disc list-inside text-gray-600 mt-2">
                <li><strong>Menawarkan Produk Berkualitas:</strong> Menyediakan berbagai macam produk, mulai dari bahan makanan segar hingga barang kebutuhan sehari-hari, dengan kualitas terbaik dan harga yang bersaing. Semua produk kami diambil langsung dari distributor terpercaya, menjamin kesegaran dan keaslian.</li>
                <li><strong>Memberikan Pelayanan Terbaik:</strong> Menciptakan pengalaman berbelanja yang menyenangkan dengan pelayanan yang ramah dan profesional dari staf kami.</li>
                <li><strong>Mendukung Komunitas Lokal:</strong> Berkontribusi pada perkembangan komunitas dengan mendukung produk lokal dan berpartisipasi dalam kegiatan sosial.</li>
                <li><strong>Mendengarkan Pelanggan:</strong> Selalu terbuka untuk masukan dan saran dari pelanggan, agar kami dapat terus meningkatkan layanan dan produk yang kami tawarkan.</li>
            </ul>
        </section>
    </div>
</div>
</div>
@endsection