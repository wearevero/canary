<x-app-layout title="Edit {{ $product->kode_barang }}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center flex items-center justify-center text-5xl font-bold py-5">
                        Edit product
                    </h1>

                    <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" class="py-5 w-3/6 mx-auto items-center text-lg justify-center text-center">
                        @csrf
                        @method('PUT')
                        <div class="mx-auto text-center items-center justify-center">
                            <img src="/image/{{ $product->image }}">
                        </div>
                        <div class="flex justify-center">
                            <div class="relative mb-3">
                                <label
                                for="itemNumber"
                                >No. Item
                            </label>
                            <input
                                type="text"
                                class="border border-neutral-300 rounded-md"
                                id="itemNumber"
                                name="no_item"
                                placeholder="{{  $product->no_item }}" />
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <div class="relative mb-3">
                                <label
                                for="kodeBarang"
                                >Kode Barang
                            </label>
                            <input
                                type="text"
                                class="border border-neutral-300 rounded-md"
                                id="kodeBarang"
                                name="kode_barang"
                                placeholder="{{ $product->kode_barang }}" />
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <div class="mb-3 w-96">
                            <input
                                id="images"
                                value="{{ $product->image }}"
                                name="image"
                                class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding py-[0.32rem] px-3 text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100"
                                type="file"/>
                            </div>
                        </div>

                        <button type="submit" class="bg-blue-800/30 mx-auto mt-10 font-bold text-indigo-500 px-5 py-1 border border-blue-800 rounded-md">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>