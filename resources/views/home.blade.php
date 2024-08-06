@extends('layouts')

@section('title', 'Home')

@section('content')

    <section
        class="bg-center bg-fixed bg-cover bg-no-repeat bg-[url('https://images.unsplash.com/photo-1495107334309-fcf20504a5ab?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]
         bg-gray-600 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Desa
                Dermo</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Kecamatan Benjeng, Kabupaten Gresik</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">

                <a href="{{ route('umkm') }}"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Info UMKM
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>

                <a href="https://desadermo.gresikkab.go.id/" class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-70">
                    Desa Siap
                </a>

            </div>
        </div>
    </section>

    <section class="bg-white">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto md:max-w-screen-lg xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden md:order-last border rounded-md"
                src="{{ asset('storage\images\luas.png') }}"
                alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Luas Wilayah
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                    Desa kami membentang seluas 133,33 hektar, dengan tanah sawah seluas 62,30 hektar dan lahan bukan sawah
                     seluas 91,03 hektar. Keberagaman lahan ini memberikan potensi besar dalam berbagai sektor.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-gray-50">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto md:max-w-screen-lg xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden md:order-first border rounded-md"
                src="{{ asset('storage\images\sarana_l.png') }}"
                alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Sarana dan Prasarana
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                    Desa kami dilengkapi dengan fasilitas yang menunjang kehidupan masyarakat, antara lain Sekolah Dasar,
                    fasilitas kesehatan, dan lapangan olahraga untuk mendukung kegiatan fisik dan rekreasi warga.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto md:max-w-screen-lg xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden md:order-last border rounded-md"
                src="{{ asset('storage\images\tani.png') }}"
                alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pertanian
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                    Lahan pertanian kami yang subur menjadi salah satu potensi utama desa. Beragam tanaman dapat tumbuh dengan baik, memberikan hasil yang menjanjikan.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-gray-50">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto md:max-w-screen-lg xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden md:order-first border rounded-md"
                src="{{ asset('storage\images\sdm.png') }}"
                alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Sumber Daya Manusia
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                    Mempunyai kurang lebih 460 keluarga, 11 rukun tetangga, dan 2 rukun warga.
                </p>
            </div>
        </div>
    </section>


    {{-- <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto md:max-w-screen-lg">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Berita Lainya</h2>
            <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Judul Berita</a>
                    </h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, Delectus et
                        expedita facere eius.</p>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Judul Berita</a>
                    </h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, Delectus et
                        expedita facere eius.</p>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Judul Berita</a>
                    </h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, Delectus et
                        expedita facere eius.</p>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Judul Berita</a>
                    </h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, Delectus et
                        expedita facere eius.</p>
                </article>
            </div>
        </div>
    </aside> --}}

@endsection
