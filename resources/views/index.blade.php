<x-navbar>
    <x-slot name="title">
        Index
    </x-slot>

    <div class="text-center pt-24 pb-12 font-bold text-6xl font-montserrat">
        MASAKAN PADANG
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Flex container untuk card -->
        <div class="flex flex-wrap justify-center gap-6"> <!-- Flex container dengan gap -->
            @forelse ($menus as $menu)
                <div class="flex-grow-0 flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 px-4"> <!-- Ukuran card agar responsif -->
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#" class=" flex justify-center items-center">
                            <img src="{{ asset('storage/menus/' . $menu->foto) }}" alt="Image of {{ $menu->nama }}" class="rounded-lg w-64">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $menu->nama }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{Str::limit( $menu->desk, 100, ' . . .')}}</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger text-center pl-6 my-3">
                    Data Kegiatan belum Tersedia.
                </div>
            @endforelse
        </div>
    </div>

    <x-footer />
</x-navbar>
dfdf