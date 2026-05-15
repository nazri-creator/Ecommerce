<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-xl">

                {{-- Header Bar --}}
                <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-base font-semibold text-gray-700 dark:text-gray-200">Daftar Produk</h3>
                    <a href="{{ route('product.create') }}"
                        class="inline-flex items-center gap-1.5 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                        + Tambah Produk
                    </a>
                </div>

                <div class="p-6 overflow-x-auto text-white">
                    <table class="datatable w-full">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Brand</th>
                                <th class="text-center">Kategori</th>
                                <th>Nama Produk</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Harga Dasar</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $i)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $i->brand->name }}</td>
                                <td class="text-center">{{ $i->category->name }}</td>
                                <td class="font-medium text-gray-800 dark:text-gray-100">{{ $i->name }}</td>
                                <td class="text-gray-500 max-w-xs truncate">{{ $i->description }}</td>
                                <td class="text-center font-medium">Rp {{ number_format($i->base_price, 0, ',', '.') }}</td>
                                <td class="text-center">
                                    @if($i->is_active === 'ACTIVE')
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                            Aktif
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                                            Non Aktif
                                        </span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('product.show', $i->id) }}"
                                        class="inline-flex items-center gap-1 px-3 py-1.5 text-xs font-medium text-blue-700 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors border border-blue-200">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center py-8 text-gray-400 italic">
                                    Belum ada produk tersedia.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
