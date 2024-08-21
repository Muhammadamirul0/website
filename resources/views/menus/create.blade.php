<x-app-layout>
    <x-slot name="title">
        Create Menu
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-button href="{{ url('/menu') }}" class="w-64">
                        Kembali
                    </x-button>
                </div>
                <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div  class="px-6 pb-6">
                    <div class="mt-2">
                        <label for="nama"
                            class="pl-6 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Masakan
                        </label>
                            <input type="text" name="nama" id="nama"
                            class="pl-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Nama Masakan" required="">
                            @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>

                            @enderror
                    </div>
                    <div class="mt-2">
                        <label for="desk"
                            class="pl-6 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Makanan</label>
                            <textarea class="form-control pl-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('desk') is-invalid @enderror" name="desk" rows="5" placeholder="Masukkan Deskripsi Masakan">{{ old('desk') }}</textarea>
                            @error('alamat')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>

                            @enderror
                    </div>
                    <div class="mt-2">
                        <label for="foto"
                        class="pl-6 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Masakan</label>
                        <input type="file"
                         class="create form-control @error('foto') is-invalid @enderror" name="foto">
                    
                        <!-- error message untuk image -->
                        @error('foto')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SAVE</button>
                        <button type="reset" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">RESET</button>
                    </div>
                    </div>
            </div>
        </div>
    </div>

</x-app-layout>