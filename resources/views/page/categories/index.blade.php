<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('categories.create') }}">Add Categories</a>
                </div>
                <div class="table-responsive">
                    <table class="datatable display">
                        <thead>
                            <tr>
                                <th class="w-10 text-center">No</th>
                                <th class="w-20 text-center">Categories</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @forelse($data as $i)
                            <tr>
                                <td class="text-center">{{$no++}}</td>
                                <td class="text-wrap">{{ $i->name }}</td>
                                <td class="text-end">
                                    <button type="button" class="flex inline-flex rounded-full bg-amber-200 hover:bg-amber-700 hover:bg-amber-500 text-amber-600 hover:text-white" data-id="{{$i->id}}"
                                        data-modal-target="sourceModal" data-name="{{ $i->name }}"
                                        onclick="editSourceModal(this)">
                                        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-amber-100 text-amber-600">
                                            <i class="text-sm fas fa-edit"></i>
                                        </div>
                                        <div>
                                            <div
                                                class="flex items-center justify-between py-2 pl-2 pr-6 text-xs font-medium transition-all duration-300 rounded-full">
                                                <span>Edit</span>
                                            </div>
                                        </div>
                                    </button>

                                    <button type="button" class="flex inline-flex text-red-600 bg-red-200 rounded-full hover:bg-red-700 hover:bg-red-500 hover:text-white" onclick="return categoriesDelete('{{$i->id}}','{{$i->name}}')">
                                        <div class="flex items-center justify-center w-8 h-8 text-red-600 bg-red-100 rounded-full">
                                            <i class="text-sm fas fa-trash"></i>
                                        </div>
                                        <div>
                                            <div
                                                class="flex items-center justify-between py-2 pl-2 pr-6 text-xs font-medium transition-all duration-300 rounded-full">
                                                <span>Hapus</span>
                                            </div>
                                        </div>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <div class="p-3 mb-3 text-white bg-gray-500 rounded shadow-sm">
                                Data Belum Tersedia!
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
