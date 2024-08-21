<x-app-layout>
    <x-slot name="title">
        Menu
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="pt-6 pb-1 pl-6">
                    <x-primary-button href="{{ route('menu.create') }}" class="w-64">
                        Tambah Menu
                    </x-primary-button>
                </div>
                <div class="p-6 text-gray-900 flex justify-center font-bold text-2xl">
                    {{ __("Menu Masakan Padang !!") }}
                </div>
                <div class="px-6 relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg overflow-hidden">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Deskripsi
                                </th>
                                <th scope="col" class="text-center">
                                    Foto
                                </th>
                                <th scope="col" class="text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($menus as $menu)
                                <tr>
                                    <td scope="col" class="px-6 py-3">{{ $menu->nama }}</td>
                                    <td scope="col" class="px-6 py-3">{{ $menu->desk }}</td>
                                    <td class="text-center flex justify-center">
                                        <img src="{{ asset('/storage/menus/'.$menu->foto) }}" class="p-6 rounded" style="width: 200px" alt="gambar">
                                    </td>
                                    <td class="text-center">
                                        <div class="flex justify-center items-center">
                                            <a href="{{ route('menu.edit', $menu->id) }}" class="text-blue-700 hover:text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">EDIT</a>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-700 hover:text-white hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">HAPUS</button>
                                            </form>
                                        </div>
                                    </td>         
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        <div class="alert alert-danger text-center pl-6 my-3">
                                            Data Kegiatan belum Tersedia.
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        // Pesan dengan SweetAlert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</x-app-layout>
