<nav class="fixed top-0 z-50 w-full bg-white border dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <!-- Bagian logo tetap di kiri -->
            <div class="flex items-center">
                <a href="{{ route('index') }}" class="flex items-center space-x-3 rtl:space-x-reverse ml-10">
                    <x-logo />
                    <span
                        class="self-center text-black text-xl font-semibold whitespace-nowrap dark:text-white">TECHNO</span>
                </a>
            </div>
            
            <!-- Bagian navigasi berada di kanan -->
            <div class="flex items-center ml-auto space-x-8 mr-10">
                <!-- Link Makanan -->
                <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                    {{ __('Makanan') }}
                </x-nav-link>
            
                <!-- Dropdown Cemilan -->
                <div x-data="{ open: false }" class="relative">
                    <!-- Tombol Dropdown -->
                    <x-nav-link @click="open = !open" class="cursor-pointer">
                        {{ __('Cemilan') }}
                        <!-- Panah Bawah -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </x-nav-link>
            
                    <!-- Isi Dropdown -->
                    <div x-show="open" @click.outside="open = false" class="absolute z-10 bg-white shadow-lg rounded-lg mt-2">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Cemilan Manis</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Cemilan Gurih</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Cemilan Pedas</a>
                    </div>
                </div>
            
                <!-- Link Fakta -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('#')">
                    {{ __('Fakta') }}
                </x-nav-link>
            </div>
            
        </div>
    </div>
</nav>
