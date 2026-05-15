<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tambah Gambar Produk') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-2xl sm:px-6 lg:px-8">

            {{-- Back Button --}}
            <div class="mb-4">
                <a href="{{ route('product.show', $variant->product_id) }}"
                    class="inline-flex items-center gap-1.5 text-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition-colors">
                    ← Kembali ke Detail Produk
                </a>
            </div>

            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-xl">
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-base font-semibold text-gray-700 dark:text-gray-200">Form Tambah Gambar</h3>
                </div>

                <div class="p-6">
                    <form action="{{ route('productimage.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="space-y-5">

                            <div>
                                <label class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">Produk</label>
                                <input type="hidden" name="variant_id" value="{{ $variant->id }}">
                                <input type="text" value="{{ $variant->product->name }}"
                                    class="bg-gray-100 border border-gray-200 text-gray-600 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400 cursor-not-allowed"
                                    readonly>
                            </div>

                            <div>
                                <label for="image_url" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    URL Gambar <span class="text-red-500">*</span>
                                </label>
                                <input type="url" id="image_url" name="image_url"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow"
                                    placeholder="https://example.com/gambar.jpg" />
                            </div>

                            {{-- Image Preview --}}
                            <div id="imagePreviewBox" class="hidden">
                                <label class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">Preview Gambar</label>
                                <div class="rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 w-full max-w-xs">
                                    <img id="imagePreview" src="" alt="Preview" class="w-full h-48 object-cover"
                                        onerror="this.onerror=null;this.src='https://placehold.co/400x200?text=Gambar+tidak+valid';">
                                </div>
                            </div>

                            <div>
                                <label for="is_primary" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Gambar Utama (Primary) <span class="text-red-500">*</span>
                                </label>
                                <select id="is_primary" name="is_primary"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow">
                                    <option value="0">Bukan Primary</option>
                                    <option value="1">Primary</option>
                                </select>
                            </div>

                        </div>

                        <div class="flex items-center gap-3 mt-7 pt-5 border-t border-gray-200 dark:border-gray-700">
                            <button type="submit"
                                class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                                Simpan Gambar
                            </button>
                            <a href="{{ route('product.show', $variant->product_id) }}"
                                class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600">
                                Batal
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('image_url').addEventListener('input', function() {
            const val = this.value.trim();
            const box = document.getElementById('imagePreviewBox');
            const img = document.getElementById('imagePreview');
            if (val) {
                img.src = val;
                box.classList.remove('hidden');
            } else {
                box.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>
