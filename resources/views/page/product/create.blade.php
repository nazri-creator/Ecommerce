<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data"
                        id="productsForm">
                        @csrf
                        <div class="p-1 rounded-xl">
                            <div class="mb-4">
                                <label for="brand_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand id
                                    <span class="text-red-500">*</span></label>
                                <select id="brand_id" name="brand_id" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Pilih Brand</option>
                                    @foreach ($brands as $b)
                                    <option value="{{ $b->id }}">{{ $b->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="category_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category id<span class="text-red-500">*</span></label>
                                <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Pilih Category</option>
                                    @foreach ($category as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name<span class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan Name disini ..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>
                            <div class="mb-4">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">description<span class="text-red-500">*</span></label>
                                <input type="text" id="description" name="description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan description id disini ..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>
                            <div class="mb-4">
                                <label for="base_price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Base Price<span class="text-red-500">*</span></label>
                                <input type="text" id="base_price" name="base_price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan Base Price disini ..."
                                    oninput="this.value = this.value.toUpperCase();" />
                            </div>
                            <div class="mb-4">
                                <label for="is_active"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Is Active<span class="text-red-500">*</span></label>
                                <select name="is_active" id="is_active" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="ACTIVE">Active</option>
                                    <option value="NON ACTIVE">Non Active</option>
                                </select>
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