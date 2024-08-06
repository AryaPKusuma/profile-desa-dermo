@extends('layouts')
@section('title', 'idnex')
@section('content')
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 py-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-bluet">
                <header class=" mb-4 md:mb-6 not-format">
                    <h1 class="text-3xl font-extrabold leading-tighttext-gray-900  md:text-4xl">
                        {{ $article->name }}
                    </h1>
                    <span>published at : {{ $article->published_at }}</span>
                </header>
                <figure>
                    <img class="mb-4 md:mb-6 rounded-lg" src="{{ asset('storage/' . $article->image) }}" alt="">
                    <figcaption>{{ $article->title }}</figcaption>
                </figure>
                <p class="lead">{!! $article->content !!}</p>
        </div>
    </main>


@endsection
