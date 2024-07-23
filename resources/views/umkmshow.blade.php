@extends('layouts')
@section('title', 'UMKM')

@section('content')



    <section class="bg-center bg-cover bg-no-repeat bg-gray-700 bg-blend-multiply"
        style="background-image: url({{ asset('storage/' . $umkm->image) }})">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 md:py-48">
            @if ($umkm->logo == null)
                <img class="invisible square relative mx-auto rounded-xl w-20" src="">
            @else
                <img class="square relative mx-auto rounded-xl w-20" src="{{ asset('storage/' . $umkm->logo) }}"
            alt="{{ $umkm->name }}">
            @endif

            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                {{ $umkm->name }}</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">{{ $umkm->description }}</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#products"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Lihat Produk / jasa
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="https://wa.me/{{ $umkm->phone }}"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Hubungi
                </a>
            </div>
        </div>
    </section>


    <section>
        <div class="py-4 sm:py-8 lg:py-14 px-4 mx-auto max-w-screen-lg">
            <header>
                <h2 class="text-3xl mx-auto font-bold text-gray-800 mb-8 border-l-4 border-blue-900 ps-2">Keunggulan</h2>
            </header>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @if ($umkm->features->count() == 0)
                <p class="text-gray-500">Tidak ada fitur</p>
                @endif
                @foreach ($umkm->features as $feature)
                    <div class="block mb-4 sm:mb-6 p-6 bg-white border-2 border-gray-200 rounded-md">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $feature->header }}
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $feature->content }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-8 bg-gray-100" id="products">
        <div class="container mx-auto px-4 max-w-screen-lg min-h-96">
            <header>
                <h2 class="text-3xl mx-auto font-bold text-gray-800 mb-8 border-l-4 border-blue-900 ps-2">Daftar Produk / Jasa</h2>
            </header>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @if (count($umkm->products) == 0)
                    <p class="text-gray-500">Tidak ada produk / jasa</p>
                @endif
                @foreach ($umkm->products as $product)
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <img src="{{ asset('storage/' . $product->photo) }}" alt="Coffee"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-1">{{ $product->name }}</h3>
                            <div class="mt-1 flex items-center justify-between">
                                <span
                                    class="text-gray-700 font-medium">Rp{{ rtrim(rtrim(number_format($product->price, 2, ',', '.'), '0'), ',') }}
                                    /
                                    {{ $product->unit_type }}</span>
                                <button
                                    class="px-4 py-2 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition duration-200">
                                    Pesan
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto md:max-w-screen-lg xl:gap-8 lg:grid md:grid-cols-3 sm:py-16 lg:px-6">
            <figure class="md:col-span-2">
                {!! $umkm->googlemap !!}
            </figure>
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 border-l-4 border-blue-900 ps-2">Alamat
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">{{ $umkm->address }}</p>
            </div>
        </div>
    </section>



@endsection
