<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Detail Produk') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-5">

            <div>
                <a href="{{ route('product.index') }}"
                    class="inline-flex items-center gap-1.5 text-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition-colors">
                    ← Kembali ke Daftar Produk
                </a>
            </div>

            <div class="bg-white shadow-sm dark:bg-gray-800 sm:rounded-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
                    <h3 class="text-base font-semibold text-gray-700 dark:text-gray-200">Informasi Produk</h3>
                    <span class="{{ $product->is_active === 'ACTIVE' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' }} inline-flex items-center px-3 py-1 rounded-full text-xs font-medium">
                        {{ $product->is_active === 'ACTIVE' ? 'Aktif' : 'Non Aktif' }}
                    </span>
                </div>

                <div class="p-6">
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">
                        {{ $product->name }}
                    </h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-700 dark:text-gray-300">
                        <div class="flex gap-2">
                            <span class="font-semibold text-gray-500 w-28 shrink-0">Deskripsi</span>
                            <span>{{ $product->description }}</span>
                        </div>
                        <div class="flex gap-2">
                            <span class="font-semibold text-gray-500 w-28 shrink-0">Harga Dasar</span>
                            <span class="font-medium text-blue-600">Rp {{ number_format($product->base_price, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex gap-2">
                            <span class="font-semibold text-gray-500 w-28 shrink-0">Brand</span>
                            <span>{{ $product->brand->name }}</span>
                        </div>
                        <div class="flex gap-2">
                            <span class="font-semibold text-gray-500 w-28 shrink-0">Kategori</span>
                            <span>{{ $product->category->name }}</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Varian Produk --}}
            <div class="bg-white shadow-sm dark:bg-gray-800 sm:rounded-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
                    <h3 class="text-base font-semibold text-gray-700 dark:text-gray-200">Varian Produk</h3>
                    <a href="{{ route('productvariant.create', ['product_id' => $product->id]) }}"
                        class="inline-flex items-center gap-1.5 px-3 py-1.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                        + Tambah Varian
                    </a>
                </div>

                <div class="p-6 overflow-x-auto text-white">
                    <table class="datatable w-full" id="table-variant">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Produk</th>
                                <th>Nama Warna</th>
                                <th class="text-center">Kode Warna</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($variants as $variant)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $variant->product->name }}</td>
                                <td>{{ $variant->color_name }}</td>
                                <td class="text-center">
                                    <span class="inline-flex items-center gap-1.5">
                                        <span class="inline-block w-4 h-4 rounded-full border border-gray-300"
                                            style="background-color: {{ $variant->color_code }}"></span>
                                        {{ $variant->color_code }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Gambar Produk --}}
            <div class="bg-white shadow-sm dark:bg-gray-800 sm:rounded-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
                    <h3 class="text-base font-semibold text-gray-700 dark:text-gray-200">Gambar Produk</h3>
                    <a href="{{ route('productimage.create', ['product_id' => $product->id]) }}"
                        class="inline-flex items-center gap-1.5 px-3 py-1.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                        + Tambah Gambar
                    </a>
                </div>

                @if($images->isNotEmpty())
                <div class="px-6 pt-5 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                    @foreach($images as $image)
                    <div class="group relative rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow">
                        <img src="{{ $image->image_url }}"
                             alt="Product image"
                             class="w-full h-32 object-cover bg-gray-100"
                             onerror="this.onerror=null;this.src='https://placehold.co/200x128?text=No+Image';">
                        @if($image->is_primary)
                        <span class="absolute top-1.5 left-1.5 bg-blue-600 text-white text-xs px-2 py-0.5 rounded-full font-medium">
                            Utama
                        </span>
                        @endif
                    </div>
                    @endforeach
                </div>
                @endif

                <div class="p-6 overflow-x-auto text-white">
                    <table class="datatable w-full" id="table-image">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Produk</th>
                                <th>URL Gambar</th>
                                <th class="text-center">Primary</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($images as $image)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $variants->firstWhere('id', $image->variant_id)?->product?->name ?? '-' }}</td>
                                <td class="max-w-xs">
                                    <a href="{{ $image->image_url }}" target="_blank"
                                        class="text-blue-600 hover:underline text-xs break-all">
                                        {{ $image->image_url }}
                                    </a>
                                </td>
                                <td class="text-center">
                                    @if($image->is_primary)
                                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-700">Ya</span>
                                    @else
                                        <span class="text-gray-400 text-xs">-</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Ukuran Produk --}}
            <div class="bg-white shadow-sm dark:bg-gray-800 sm:rounded-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
                    <h3 class="text-base font-semibold text-gray-700 dark:text-gray-200">Ukuran Produk</h3>
                    <a href="{{ route('productsize.create', ['product_id' => $product->id]) }}"
                        class="inline-flex items-center gap-1.5 px-3 py-1.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                        + Tambah Ukuran
                    </a>
                </div>

                <div class="p-6 overflow-x-auto text-white">
                    <table class="datatable w-full" id="table-size">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Ukuran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sizes as $size)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-700 font-semibold text-gray-700 dark:text-gray-200 text-sm">
                                        {{ $size->size_name }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function () {
            const emptyText = '<span class="text-gray-400 italic text-sm">Belum ada data.</span>';

            $('#table-variant').DataTable({
                language: {
                    emptyTable: emptyText,
                    zeroRecords: emptyText,
                    info: 'Menampilkan _START_ - _END_ dari _TOTAL_ data',
                    infoEmpty: 'Tidak ada data',
                    search: 'Cari:',
                    paginate: {
                        first: 'Pertama',
                        last: 'Terakhir',
                        next: 'Selanjutnya',
                        previous: 'Sebelumnya',
                    },
                },
            });

            $('#table-image').DataTable({
                language: {
                    emptyTable: emptyText,
                    zeroRecords: emptyText,
                    info: 'Menampilkan _START_ - _END_ dari _TOTAL_ data',
                    infoEmpty: 'Tidak ada data',
                    search: 'Cari:',
                    paginate: {
                        first: 'Pertama',
                        last: 'Terakhir',
                        next: 'Selanjutnya',
                        previous: 'Sebelumnya',
                    },
                },
            });

            $('#table-size').DataTable({
                language: {
                    emptyTable: emptyText,
                    zeroRecords: emptyText,
                    info: 'Menampilkan _START_ - _END_ dari _TOTAL_ data',
                    infoEmpty: 'Tidak ada data',
                    search: 'Cari:',
                    paginate: {
                        first: 'Pertama',
                        last: 'Terakhir',
                        next: 'Selanjutnya',
                        previous: 'Sebelumnya',
                    },
                },
            });
        });
    </script>
    @endpush
</x-app-layout>