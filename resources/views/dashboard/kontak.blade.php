@extends('dashboard.navbarpro')


@section('kontak')
<body class="bg-gray-100 text-gray-900 my-20">
    <div class="max-w-5xl mx-auto p-6">
        <header class="text-center mb-10">
            <h1 class="text-4xl font-bold text-blue-600">Kontak Kami</h1>
            <p class="text-lg mt-2">Hubungi kami untuk informasi lebih lanjut atau kunjungi lokasi kami.</p>
        </header>
        <section class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800">Informasi Kontak</h2>
            <p class="mt-2 text-gray-600"><strong>WhatsApp:</strong> {{ config('app.nowa') }}</p>
            <p class="mt-2 text-gray-600"><strong>Alamat:</strong> {{ config('app.alamat') }}</p>
            <p class="mt-2 text-gray-600"><strong>Email:</strong> {{ config('app.gmail') }}</p>
        </section>
        <section class="mt-6 bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800">Lokasi Kami</h2>
            <div class="mt-4">
                <iframe class="w-full h-64 rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.7983758563405!2d111.87365812743212!3d-7.149297322807733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77821e05fb485b%3A0x10c0d71a3e792b19!2sBu%20Joni!5e0!3m2!1sid!2sid!4v1739723336148!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </div>
</body>
@endsection