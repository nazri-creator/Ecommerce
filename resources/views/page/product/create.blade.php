<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-2xl sm:px-6 lg:px-8">

            {{-- Back Button --}}
            <div class="mb-4">
                <a href="{{ route('product.index') }}"
                    class="inline-flex items-center gap-1.5 text-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition-colors">
                    ← Kembali ke Daftar Produk
                </a>
            </div>

            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-xl">
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-base font-semibold text-gray-700 dark:text-gray-200">Form Tambah Produk</h3>
                </div>

                <div class="p-6">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data" id="productsForm">
                        @csrf

                        <div class="space-y-5">

                            <div>
                                <label for="brand_id" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Brand <span class="text-red-500">*</span>
                                </label>
                                <select id="brand_id" name="brand_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow">
                                    <option value="">Pilih Brand</option>
                                    @foreach ($brands as $b)
                                    <option value="{{ $b->id }}">{{ $b->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="category_id" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Kategori <span class="text-red-500">*</span>
                                </label>
                                <select id="category_id" name="category_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($category as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="name" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Nama Produk <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="name" name="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow"
                                    placeholder="Masukkan nama produk..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>

                            <div>
                                <label for="description" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Deskripsi <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="description" name="description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow"
                                    placeholder="Masukkan deskripsi produk..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>

                            <div>
                                <label for="base_price" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Harga Dasar <span class="text-red-500">*</span>
                                </label>
                                <input type="number" id="base_price" name="base_price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow"
                                    placeholder="Contoh: 150000" min="0" />
                            </div>

                            <div>
                                <label for="is_active" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Status <span class="text-red-500">*</span>
                                </label>
                                <select name="is_active" id="is_active"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow">
                                    <option value="ACTIVE">Aktif</option>
                                    <option value="NON ACTIVE">Non Aktif</option>
                                </select>
                            </div>

                        </div>

                        <div class="flex items-center gap-3 mt-7 pt-5 border-t border-gray-200 dark:border-gray-700">
                            <button type="submit"
                                class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                                Simpan Produk
                            </button>
                            <a href="{{ route('product.index') }}"
                                class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600">
                                Batal
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
