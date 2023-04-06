<x-app-layout title="{{ $product->kode_barang }}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center flex items-center justify-center text-5xl font-bold py-5">
                      Detail {{ $product->no_item }}
                    </h1>
                    <a href="{{ route('products.index') }}" class="px-3 bg-sky-800/30 text-sky-500 border rounded-lg border-sky-800 py-2">
                        Back
                    </a>
                    <table class="min-w-full mt-5 text-lg text-center font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                          <tr>
                            <th scope="col" class="px-6 py-4">ID</th>
                            <th scope="col" class="px-6 py-4">No. Item</th>
                            <th scope="col" class="px-6 py-4">Kode Barang</th>
                            <th scope="col" class="px-6 py-4">Gambar</th>
                            <th scope="col" class="px-6 py-4">Created</th>
                          </tr>
                        </thead>
                        <tbody>
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $product->id }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $product->no_item }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $product->kode_barang }}</td>
                                    <td>
                                      <img src="{{ asset('image/'.$product->image) }}" alt="gambar {{$product->no_item}}" width="100" height="100"/>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $product->created_at }}</td>
                                </tr>
                        </tbody>
                      </table>
                      <x-render-time />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
