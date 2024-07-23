@extends('layouts')

@section('title', 'Artikel')

@section('content')
    {{-- bg-gradient-to-r from-blue-600 to-violet-600 --}}
    <section class=" py-14 flex flex-1 items-center bg-center bg-cover bg-gray-700 ">
        <div class=" pt-14 px-4 mx-auto max-w-screen-xl text-left sm:text-center md:pb-10 md:pt-20 md:px-12 ">
            <h1 class="mb-4 text-5xl font-semibold leading-none sm:text-6xl md:text-7xl text-white">
                Artikel
            </h1>
            <p class="text-lg font-normal text-gray-300 lg:text-xl">
                Informasi dan Berita Terkini
            </p>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-4 sm:py-8 md:py-12 px-4 mx-auto max-w-screen-md">


            {{-- <article class="p-6 my-2 flex justify-between bg-white rounded-lg border-b shadow-none border-gray-200">
                <figure class="m-w-xs">
                    <img class="rounded-" src="{{ asset('storage/' . $article->image) }}" alt="">
                </figure>
                <div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="{{ url('/artikel/'.$article->slug) }}">
                        {{ $article->name }}</a>
                    </h2>
                    <div class="mb-5 truncate font-light text-gray-500 dark:text-gray-400">
                        {!! $article->content !!}
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <span class="text-sm">{{ $article->published_at }}</span>
                        </div>
                        <a href="{{ url('/artikel/'.$article->slug) }}"
                            class="inline-flex items-center font-medium text-primary-600 hover:underline">
                            Baca Selengkapnya
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </article> --}}

            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">
                @foreach ($articles as $article)
                    <article class="max-w-xs hover:bg-gray-200 p-2 border rounded-lg">
                        <a href="{{ url('/artikel/' . $article->slug) }}">
                            <img src="{{ asset('storage/' . $article->image) }}" class="mb-2 rounded-lg" alt="Image 1">
                        </a>
                        <h2 class="mb-1 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                            <a href="{{ url('/artikel/' . $article->slug) }}">{{ $article->name }}</a>
                        </h2>
                        {{-- <p class="text-gray-500">{!! $article->content !!}</p> --}}
                        <span href="#" class="inline-flex items-center text-sm font-normal text-gray-600">
                            {{ $article->published_at }}
                        </span>
                    </article>
                @endforeach
            </div>

            <div class="flex justify-between mt-8">

                @if ($articles->onFirstPage())
                    <span class="invisible">
                        Previous
                    </span>
                @else
                    <a href="{{ $articles->previousPageUrl() }}"
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Previous
                    </a>
                @endif

                <!-- Next Button -->
                @if ($articles->hasMorePages())
                    <a href="{{ $articles->nextPageUrl() }}"
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
