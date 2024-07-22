@extends('layouts')
@section('title', 'UMKM')

@section('content')



    <section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply"
        style="background-image: url({{ asset('storage/' . $umkm->image) }})">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 md:py-48">
            <img class="square relative mx-auto rounded-xl w-20" src="{{ asset('storage/' . $umkm->logo) }}"
                alt="{{ $umkm->name }}">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                {{ $umkm->name }}</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">{{ $umkm->description }}</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
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
        <div class="py-4 sm:py-8 lg:py-14 px-4 mx-auto max-w-screen-md">
            @foreach ($umkm->features as $feature)
                <div class="block mx-auto mb-4 sm:mb-6 p-6 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $feature->header }}
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $feature->content }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-gray-50">
        <div class="py-8 sm:py-10 lg:py-14 px-4 mx-auto max-w-screen-md">
            @foreach ($umkm->products as $product)
                <ul>
                    <li>{{ $product->name }}</li>
                    <li>${{ $product->price }}</li>
                </ul>
            @endforeach
        </div>
    </section>

@endsection
