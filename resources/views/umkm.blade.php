@extends('layouts')
@section('title', 'UMKM Desa Dermo')

@section('content')

    <section class=" py-14 flex flex-1 items-center bg-center bg-cover bg-gray-700 ">
        <div class=" pt-14 px-4 mx-auto max-w-screen-xl text-left sm:text-center md:pb-12 md:pt-24 md:px-12 ">
            <h1 class="mb-4 text-5xl font-semibold leading-none sm:text-6xl md:text-7xl text-white">
                Artikel
            </h1>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 sm:py-10 lg:py-14 px-4 mx-auto max-w-screen-md">
            @foreach ($umkms as $umkm)
                <a href="{{ url('/umkm/' . $umkm->slug) }}"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg md:flex-row w-full hover:bg-gray-100 mb-4">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('storage/' . $umkm->image) }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $umkm->name }}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $umkm->description }}</p>
                    </div>
                </a>
            @endforeach
            <div class="flex justify-between mt-8">

                @if ($umkms->onFirstPage())
                    <span class="invisible">
                        Previous
                    </span>
                @else
                    <a href="{{ $umkms->previousPageUrl() }}"
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Previous
                    </a>
                @endif

                <!-- Next Button -->
                @if ($umkms->hasMorePages())
                    <a href="{{ $umkms->nextPageUrl() }}"
                        class="flex items-center justify-center px-3 h-8 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Next
                    </a>
                @else
                    <span class="invisible">
                        Next
                    </span>
                @endif
            </div>
        </div>
    </section>



@endsection
