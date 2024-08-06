<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($umkms as $umkm)
        <a href="{{ url('/umkm/' . $umkm->slug) }}"
            class="flex flex-col items-center bg-white border border-gray-200 rounded-md w-full hover:bg-gray-100 mb-2">
            <img class="object-cover w-full rounded-t-md" src="{{ asset('storage/' . $umkm->image) }}" alt="">
            <div class=" py-4 px-4 leading-normal w-full">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white w-full">
                    {{ $umkm->name }}
                </h5>
                <span
                    class="px-3 py-1 text-xs font-medium text-primary-700 bg-primary-100 rounded-full">{{ $umkm->category }}</span>
            </div>
        </a>
    @endforeach
</div>

{{-- pagination --}}
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
