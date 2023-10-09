<x-app-layout title="Add products">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center flex items-center justify-center font-bold text-7xl mt-5 mb-10">
                        Add Products ✨
                    </h1>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{$message}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <img class="mb-3" src="image/{{ Session::get('image') }}" style="width: 250px;">
                    @endif

                    <form method="post" action="{{  route('products.store') }}" enctype="multipart/form-data" class="py-5 text-lg items-center justify-center">
                        @csrf
                        <h1 class="text-xl mt-10 mb-5 font-bold">Detail Data &nbsp;<span class="font-semibold px-3 bg-rose-500/20 rounded-lg text-rose-500 border border-rose-500 text-sm">wajib diisi</span></h1>
                        <div class="mb-6 flex">
                            <span class="inline-flex dark:text-slate-100 items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                No. Item
                            </span>
                            <input type="text" name="no_item" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="VERONIQUE-24K G">
                        </div>

                        <div class="grid gap-6 md:grid-cols-2">
                            <!-- master category field -->
                            <div class="mb-6 flex">
                                <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-slate-100 dark:border-gray-600">
                                    Main Category
                                </span>
                                <select name="id_main_category" id="main_category" class="uppercase rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="666">
                                    <option value="">
                                        Pilih Main Kategori
                                    </option>
                                    @foreach ($main_categorys as $main_category)
                                    <option value="{{ $main_category->id }}" {{ old('id') == $main_category->id ? 'selected=true' : ''}}>
                                        {{ $main_category->nama_category }}
                                    </option>
                                    @endforeach
                                    <select>
                            </div>
                            <!-- end of master category field -->

                            <div class="mb-6 flex">
                                <span class="inline-flex dark:text-slate-100 items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Sub Category
                                </span>
                                <select name="id_sub_category" id="sub_category" class="uppercase rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="666">
                                    <option value="0">
                                        Tidak Diketahui
                                    </option>
                                    @if(old('id_main_category') > 0)
                                    @foreach ($categorys as $category)
                                    <option value="{{ $category->id_master_category }}">
                                        {{ $category->nama_kategori }}
                                    </option>
                                    @endforeach
                                    @endif
                                    <select>
                                        @error('id_main_category')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                            </div>
                            <!-- closing main & sub category -->
                        </div>

                        <div class="mb-6 justify-center flex">
                            <span class="inline-flex dark:text-slate-100 items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                Gambar
                            </span>
                            <input class="flex items-center justify-center px-7 rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 border-gray-300 p-12 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="image" type="file" onchange="previewImage(event)" id="image" />
                            <div class="border ml-3 items-center text-center border-violet-500 w-fit rounded-lg p-5">
                                <div class="">
                                    <img id="preview" src="{{ old('preview_image') }}" alt="Preview Image" class="flex items-center justify-center" width="200" height="100" />
                                </div>
                            </div>
                        </div>


                        {{-- keterangan --}}
                        <h1 class="text-xl mt-10 mb-5 font-bold">Keterangan tambahan &nbsp;<span class="font-semibold px-3 bg-yellow-500/20 rounded-lg text-yellow-500 border border-yellow-500 text-sm">optional</span></h1>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div class="flex">
                                <span class="inline-flex dark:text-slate-100 items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Qty Stone
                                </span>
                                <input type="text" name="qty_stone" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="—">
                            </div>
                            <div class="flex">
                                <span class="inline-flex dark:text-slate-100 items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Size Stone
                                </span>
                                <input type="text" name="size_stone" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="—">
                            </div>
                            <div class="flex">
                                <span class="inline-flex dark:text-slate-100 items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Size
                                </span>
                                <input type="text" name="size" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="—">
                            </div>
                        </div>
                        <button type="submit" class="bg-blue-800/30 text-center hover:bg-blue-400/10 mx-auto mt-10 font-bold text-indigo-500 px-5 py-1 border border-blue-800 rounded-md">
                            Lets submit!
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>