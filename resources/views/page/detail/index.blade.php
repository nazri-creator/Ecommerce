<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Detail Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="py-5 mx-auto max-w-7xl sm:px-6 lg:px-8">

            {{-- PRODUCT HEADER --}}
            <div class="mb-5 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-2xl font-bold">
                        {{ $product->name }}
                    </h1>

                    <div class="mt-4 space-y-2">
                        <p><span class="font-semibold">Description :</span> {{ $product->description }}</p>
                        <p><span class="font-semibold">Base Price :</span> Rp. {{ number_format($product->base_price) }}</p>
                        <p><span class="font-semibold">Status :</span> {{ $product->is_active }}</p>
                        <p><span class="font-semibold">Brand :</span> {{ $product->brand->name }}</p>
                        <p><span class="font-semibold">Category :</span> {{ $product->category->name }}</p>
                    </div>

                </div>
            </div>

            {{-- VARIANT --}}
            <div class="my-3 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg p-5">

                <div class="flex items-center justify-between p-3 text-gray-900 dark:text-gray-100">
                    <h2 class="text-lg font-bold">Product Variant</h2>

                    <a href="{{ route('productvariant.create', ['product_id' => $product->id]) }}"
                        class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700">
                        Add Variant
                    </a>
                </div>

                <div class="table-responsive text-white">
                    <table class="datatable display w-full">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Product</th>
                                <th class="text-center">Color Name</th>
                                <th class="text-center">Color Code</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($variants as $variant)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-rigth">{{ $variant->product->name }}</td>
                                <td class="text-rigth">{{ $variant->color_name }}</td>
                                <td class="text-rigth">{{ $variant->color_code }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">No Variant</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Image --}}
            <div class="my-3 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg p-5">

                <div class="flex items-center justify-between p-3 text-gray-900 dark:text-gray-100">
                    <h2 class="text-lg font-bold">Product Image</h2>

                    <a href="{{ route('productimage.create', ['product_id' => $product->id]) }}"
                        class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700">
                        Add Image   
                    </a>
                </div>

                <div class="table-responsive text-white">
                    <table class="datatable display w-full">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Product</th>
                                <th class="text-center">Image URL</th>
                                <th class="text-center">Is Primary</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($images as $image)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>

                                <td class="text-rigth">
                                    {{ $variants->firstWhere('id', $image->variant_id)?->product?->name ?? '-' }}
                                </td>

                                <td class="text-rigth">{{ $image->image_url }}</td>
                                <td class="text-center">{{ $image->is_primary }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">No Image</td>
                                <td class="text-center">-</td>
                                <td class="text-center">-</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- SIZE --}}
            <div class="my-3 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg p-5">

                <div class="flex items-center justify-between p-3 text-gray-900 dark:text-gray-100">
                    <h2 class="text-lg font-bold">Product Sizes</h2>

                    <a href="{{ route('productsize.create', ['product_id' => $product->id]) }}"
                        class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700">
                        Add Size
                    </a>
                </div>

                <div class="table-responsive text-white">
                    <table class="datatable display w-full">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Size</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($sizes as $size)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $size->size_name }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">No Size</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>