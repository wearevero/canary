<x-app-layout title="Edit {{ $product->kode_barang }}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center flex items-center justify-center text-5xl font-bold py-5">
                        Edit product
                    </h1>

                    <form method="post" action="{{  route('products.store') }}" class="py-5 w-3/6 mx-auto items-center text-lg justify-center  text-center">
                        @csrf
                        <div class="flex justify-center">
                            <div class="relative mb-3">
                                <label
                                for="itemNumber"
                                >No. Item
                            </label>
                            <input
                                value="{{ $product->no_item }}"
                                type="text"
                                class="border border-neutral-300 rounded-md"
                                id="itemNumber"
                                name="no_item"
                                placeholder="K0088b03-OV H" />
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <div class="relative mb-3">
                                <label
                                for="kodeBarang"
                                class=""
                                >Kode Barang
                            </label>
                            <input
                                value="{{ $product->kode_barang }}"
                                type="text"
                                class="border border-neutral-300 rounded-md"
                                id="kodeBarang"
                                name="kode_barang"
                                placeholder="K0088b03-OV H" />
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