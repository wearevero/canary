<x-app-layout title="Add products">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center flex items-center justify-center font-bold text-7xl mt-5 mb-10">
                         Add Products ✨
                    </h1>


                    {{-- testing input group --}}
                        <form method="post" action="{{  route('products.store') }}" enctype="multipart/form-data" class="py-5 text-lg items-center justify-center">
                            @csrf
                            <div class="mb-6 flex">
                                <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    No. Item
                                  </span>
                                <input type="text" name="no_item" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="666">
                            </div>
                            <div class="mb-6 flex">
                                <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Category
                                  </span>
                                <select name="id_kategori" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="666">
                                    <option value="">
                                        Pilih Kategori
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
                                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="image"
                                        type="file"
                                        id="formFile" />
                                </div> 

                            

                            {{-- keterangan --}}
                            <h1 class="text-xl mt-10 mb-5 font-bold">Keterangan tambahan</h1>
                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div class="flex">
                                        <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                          Qty Stone
                                        </span>
                                        <input type="text" name="qty_stone" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="666">
                                    </div>
                                    <div class="flex">
                                        <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                            Size stone
                                        </span>
                                        <input type="text" name="size_stone" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="666">
                                    </div>
                                    <div class="flex">
                                        <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                            Size doang wkwk
                                        </span>
                                        <input type="text" name="size" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="666">
                                    </div>
                                </div>
                            <button type="submit" class="bg-blue-800/30 text-center hover:bg-blue-400/10 mx-auto mt-10 font-bold text-indigo-500 px-5 py-1 border border-blue-800 rounded-md">
                                Lets submit!
                            </button>
                        </form>
                    {{-- end of testing --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>