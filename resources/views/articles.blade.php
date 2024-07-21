@extends('layouts')

@section('title', 'Artikel')

@section('content')

    <section class=" py-14 flex flex-1 items-center bg-center bg-cover bg-gradient-to-r from-blue-600 to-violet-600">
        <div class=" pt-14 px-4 mx-auto max-w-screen-xl text-left sm:text-center lg:pb-14 lg:pt-28 lg:px-12 ">
            <h1 class="mb-4 text-5xl font-semibold leading-none sm:text-6xl md:text-7xl text-white">
                Artikel
            </h1>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 sm:py-10 lg:py-14 px-4 mx-auto max-w-screen-md">

            @foreach ($articles as $article)
                <article class="p-6 my-2 bg-white rounded-lg border-b shadow-none border-gray-200">
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
                </article>
            @endforeach

            <div class="flex justify-between mt-8">

                @if ($articles->onFirstPage())
                    <span
                        class="invisible">
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
                    <span
                        class="invisible">
                        Next
                    </span>
                @endif
            </div>
        </div>
    </section>





@endsection
