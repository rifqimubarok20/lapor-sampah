<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($dataLaporan as $laporan)
                    <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <!-- Gambar -->
                        <a href="#">
                            <img class="rounded-t-lg w-full h-48 object-cover"
                                src="{{ $laporan->image ? asset('storage/' . $laporan->image) : asset('images/default-image.jpg') }}"
                                alt="Gambar Laporan" />
                        </a>

                        <!-- Konten -->
                        <div class="p-5">
                            <!-- Nama Pelapor -->
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $laporan->nama_pelapor ?? 'Nama Pelapor Tidak Diketahui' }}
                            </h5>

                            <!-- Pesan -->
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ $laporan->pesan ?? 'Tidak ada pesan yang tersedia.' }}
                            </p>

                            <!-- Link Maps -->
                            @if (!empty($laporan->link_maps))
                                <a href="{{ $laporan->link_maps }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Link Maps
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            @else
                                <p class="text-gray-500 dark:text-gray-400">
                                    Link Maps tidak tersedia.
                                </p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
