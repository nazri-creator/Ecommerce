<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Kategori') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-xl">

                <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-base font-semibold text-gray-700 dark:text-gray-200">Daftar Kategori</h3>
                    <a href="{{ route('categories.create') }}"
                        class="inline-flex items-center gap-1.5 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                        + Tambah Kategori
                    </a>
                </div>

                <div class="p-6 overflow-x-auto text-white">
                    <table class="datatable w-full">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama Kategori</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $i)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="font-medium text-gray-800 dark:text-gray-100">{{ $i->name }}</td>
                                <td class="text-center">
                                    <div class="inline-flex items-center gap-2">
                                        <button type="button"
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-amber-700 bg-amber-50 rounded-lg hover:bg-amber-100 transition-colors border border-amber-200"
                                            data-id="{{ $i->id }}" data-name="{{ $i->name }}"
                                            onclick="editSourceModal(this)">
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-red-700 bg-red-50 rounded-lg hover:bg-red-100 transition-colors border border-red-200"
                                            onclick="return categoriesDelete('{{ $i->id }}','{{ $i->name }}')">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center py-8 text-gray-400 italic">
                                    Belum ada kategori tersedia.
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
