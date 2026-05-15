<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tambah Brand') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-2xl sm:px-6 lg:px-8">

            <div class="mb-4">
                <a href="{{ route('brands.index') }}"
                    class="inline-flex items-center gap-1.5 text-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition-colors">
                    ← Kembali ke Daftar Brand
                </a>
            </div>

            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-xl">
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-base font-semibold text-gray-700 dark:text-gray-200">Form Tambah Brand</h3>
                </div>

                <div class="p-6">
                    <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data" id="brandsForm">
                        @csrf

                        <div class="space-y-5">

                            <div>
                                <label for="name" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Nama <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="name" name="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow"
                                    placeholder="Masukkan nama brand..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>

                            <div>
                                <label for="description" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Deskripsi <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="description" name="description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white transition-shadow"
                                    placeholder="Masukkan deskripsi brand..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>

                            <div>
                                <label for="logo" class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Logo <span class="text-red-500">*</span>
                                </label>
                                <input type="file" id="logo" name="logo" accept="image/*"
                                    class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                           file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </div>

                        </div>

                        <div class="flex items-center gap-3 mt-7 pt-5 border-t border-gray-200 dark:border-gray-700">
                            <button type="submit"
                                class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                                Simpan Brand
                            </button>
                            <a href="{{ route('brands.index') }}"
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
