<x-app-layout title="{{ $product->kode_barang }}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center flex uppercase items-center justify-center text-6xl font-extrabold py-5">
                      {{ $product->no_item }}
                    </h1>
                    <a href="{{ route('products.index') }}" class="px-3 bg-sky-800/30 text-sky-500 border rounded-lg border-sky-800 py-2">
                        Back
                    </a>
                    <table class="min-w-full mt-5 text-lg text-center font-light">
                      <thead class="border-b font-bold dark:border-neutral-500">
                        <tr>
                          <th scope="col" class="px-6 py-4">ID</th>
                          <th scope="col" class="px-6 py-4">No. Item</th>
                          <th scope="col" class="px-6 py-4">Barcode</th>
                          <th scope="col" class="px-6 py-4">Category</th>
                          <th scope="col" class="px-6 py-4">Picture</th>
                          <th scope="col" class="px-6 py-4">Created at</th>
                        </tr>
                      </thead>
                      <tbody class="">
                              <tr class="border-b font-semibold dark:border-neutral-500">
                                  <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $product->id }}</td>
                                  <td class="whitespace-nowrap px-6 py-4">{{ $product->no_item }}</td>
                                  <td class="whitespace-nowrap px-6 py-4">{{ $product->kode_barang }}</td>
                                  <td class="whitespace-nowrap px-6 py-4">{{ $product->category->nama_kategori }}</td>
                                  <td>
                                      <img src="{{ asset('image/'.$product->image ?? 'tidak ada gambar')}}" alt="{{ $product->no_item }} tidak memiliki gambar" height="80" width="80" class="py-2 hover:cursor-pointer mx-auto rounded-md"/>
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
