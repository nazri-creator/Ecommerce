<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tambah Varian') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-2xl sm:px-6 lg:px-8">

            <div class="mb-4">
                <a href="{{ route('product.show', $product->id) }}"
                    class="inline-flex items-center gap-1.5 text-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition-colors">
                    ← Kembali ke Detail Produk
                </a>
            </div>

            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-xl">
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-base font-semibold text-gray-700 dark:text-gray-200">Form Tambah Varian</h3>
                </div>

                <div class="p-6">
                    <form action="{{ route('productvariant.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="space-y-5">

                            <div>
                                <label class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">Produk</label>
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="text" value="{{ $product->name }}"
                                    class="bg-gray-100 border border-gray-200 text-gray-600 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400 cursor-not-allowed"
                                    readonly>
                            </div>

                            <div>
                                <label for="color_name" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Nama Warna <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="color_name" name="color_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow"
                                    placeholder="Contoh: RED, BLUE, BLACK..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>

                            <div>
                                <label for="color_code" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Kode Warna <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="color_code" name="color_code"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow"
                                    placeholder="Contoh: #FF0000"
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>

                        </div>

                        <div class="flex items-center gap-3 mt-7 pt-5 border-t border-gray-200 dark:border-gray-700">
                            <button type="submit"
                                class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                                Simpan Varian
                            </button>
                            <a href="{{ route('product.show', $product->id) }}"
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
