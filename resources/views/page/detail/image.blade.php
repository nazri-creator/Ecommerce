<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Image') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('productimage.store') }}" method="post" enctype="multipart/form-data"
                        id="categoriesForm">
                        @csrf
                        <div class="p-1 rounded-xl">

                             <div class="mb-5">
                                <label for="product_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Product
                                </label>

                                {{-- Hidden input untuk mengirim product_id --}}
                                <input type="hidden" name="variant_id" value="{{ $variant->id }}">

                                {{-- Tampilan nama product --}}
                                <input type="text"
                                value="{{ $variant->product->name }}"
                                class="bg-gray-100 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" readonly>
                            </div>
                            <div class="mb-4">
                                <label for="image_url"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image URL
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="image_url" name="image_url"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan Color Image Url disini ..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>
                            <div class="mb-4">
                                <label for="is_primary"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Is Primary
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="is_primary" name="is_primary"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan Is Primary disini ..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>
                            <button type="submit" class="flex inline-flex rounded-full bg-sky-200 hover:bg-sky-700 hover:bg-sky-500 text-sky-600 hover:text-white">
                                <div>
                                    <div
                                        class="flex items-center justify-between py-2 pl-6 pr-2 text-xs font-medium transition-all duration-300 rounded-full">
                                        <span>Simpan</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-sky-100 text-sky-600">
                                    <i class="mt-1 text-sm fi fi-sr-disk"></i>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>