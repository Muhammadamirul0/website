<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-center font-bold text-2xl">
                    {{ __("You're logged in!") }}
                </div>
                <div class="pt-6 pb-1 pl-6">
                    <x-button href="{{ route('menu.index') }}" class="w-64">
                        Tambah Menu
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
