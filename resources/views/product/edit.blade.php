<x-app-layout title="Update {!! $product->no_item !!}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg drop-shadow-xl sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center flex items-center justify-center font-bold text-7xl mt-5 mb-10">
                        {{ $product->no_item }}
                    </h1>  
                                        <form method="post" action="{{  route('products.update', $product->id) }}" enctype="multipart/form-data" class="py-5 text-lg items-center justify-center">
                                            @csrf
                                            @method('PUT')
                                            <img src="/image/{{ $product->image }}" width="250" class="shadow-md text-center mx-auto mb-5 max-w-full rounded-lg" alt="Belum ada gambar." />
                                            <h1 class="text-xl mt-10 mb-5 font-bold">Data &nbsp;<span class="font-semibold px-3 bg-rose-500/20 rounded-lg text-rose-500 border border-rose-500 text-sm">wajib diisi</span></h1>
                                            <div class="mb-6 flex">
                                                <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                    No. Item
                                                  </span>
                                                <input type="text" name="no_item" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $product->no_item }}">
                                            </div>
                                            <div class="mb-6 flex">
                                                <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                    Category
                                                  </span>
                                                <select name="id_kategori" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option value="{{ $product->category->id }}">
                                                        {{ $product->category->nama_kategori }}
                                                    </option>
                                                    @foreach ($categorys as $category)
                                                        <option value="{{ $category->id }}" {{ old('id_kategori') == $category->id ? 'selected' : null }}>
                                                            {{ $category->nama_kategori }}
                                                        </option>
                                                    @endforeach
                                                <select>
                                            </div> 
                
                                            <div class="mb-6 flex">
                                                <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                    Gambar
                                                  </span>
                                                    <input
                                                        value="{{ $product->image }}"
                                                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        name="image"
                                                        type="file"
                                                        id="formFile" />
                                                </div> 
                
                                            
                                            {{-- keterangan --}}
                                            <h1 class="text-xl mt-10 mb-5 font-bold">Keterangan tambahan &nbsp;<span class="font-semibold px-3 bg-yellow-500/20 rounded-lg text-yellow-500 border border-yellow-500 text-sm">optional</span></h1>
                                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                    <div class="flex">
                                                        <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                          Qty Stone
                                                        </span>
                                                        <input type="text" name="qty_stone" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $product->qty_stone }}">
                                                    </div>
                                                    <div class="flex">
                                                        <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                            Size stone
                                                        </span>
                                                        <input type="text" name="size_stone" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $product->size_stone }}">
                                                    </div>
                                                    <div class="flex">
                                                        <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                                            Size
                                                        </span>
                                                        <input type="text" name="size" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $product->size }}">
                                                    </div>
                                                </div>
                                            <button type="submit" class="bg-blue-800/30 text-center hover:bg-blue-400/10 mx-auto mt-10 font-bold text-indigo-500 px-5 py-1 border border-blue-800 rounded-md">
                                                Lets update!
                                            </button>
                                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>