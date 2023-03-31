<x-app-layout title="Catalogue">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center flex items-center justify-center text-5xl font-bold py-5">
                         ⁙ Catalogue
                    </h1>
                    <div class="px-10 my-5 text-right uppercase">
                        <form class="justify-end space-x-15">
                            <select class="rounded-lg">
                                <option>🔍 Pick by category</option>
                                @foreach ($categorys as $category)
                                    <option value="{{ $category->id }}" {{ old('nama_kategori') == $category->id ? 'selected' : null }}>
                                        {{ $category->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit" class="hover:bg-sky-800/30 hover:text-white ease-in-out px-3 py-2 bg-sky-800/10 border border-sky-800 text-sky-500 rounded-lg">
                                Search
                            </button>
                        </form>
                    </div>
                    <x-catalogue-image />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>