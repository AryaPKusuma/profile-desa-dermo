@extends('layouts')
@section('title', 'UMKM Desa Dermo')

@section('content')

    <section class=" py-14 flex flex-1 items-center bg-center bg-cover bg-gray-700 ">
        <div class=" pt-14 px-4 mx-auto max-w-screen-lg text-left sm:text-center md:pb-10 md:pt-20 md:px-12 ">
            <h1 class="mb-4 text-5xl font-semibold leading-none sm:text-6xl md:text-7xl text-white">
                UMKM
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                Daftar UMKM di Dermo
            </p>
            <form class="flex items-center max-w-lg mx-auto">
                <label for="umkm-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="umkm-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                        placeholder="Cari UMKM" required />
                </div>
            </form>
        </div>
    </section>

    <section class="bg-white">
        <div id="umkm-list" class="py-8 sm:py-10 lg:py-14 px-4 mx-auto max-w-screen-lg">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($umkms as $umkm)
                    <a href="{{ url('/umkm/' . $umkm->slug) }}"
                        class="flex flex-col items-center bg-white border border-gray-200 rounded-md w-full hover:bg-gray-100 mb-2">
                        <img class="object-cover w-full rounded-t-md" src="{{ asset('storage/' . $umkm->image) }}"
                            alt="">
                        <div class=" py-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $umkm->name }}
                            </h5>
                            <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">{{ $umkm->description }}</p>
                            <span
                                class="px-3 py-1 text-xs font-medium text-blue-700 bg-blue-100 rounded-full">{{ $umkm->category }}</span>
                        </div>
                    </a>
                @endforeach

            </div>

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


    <script type="text/javascript">
        $(document).ready(function() {
            $('#umkm-search').on('keyup', function() {
                var query = $(this).val();

                $.ajax({
                    url: "{{ route('search.umkm') }}",
                    type: "GET",
                    data: {'query': query},
                    success: function(data) {
                        $('#umkm-list').html(data);
                    }
                });
            });
        });
    </script>
@endsection
