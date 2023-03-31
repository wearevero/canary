<x-app-layout title="Products">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center flex space-x-4 items-center justify-center text-5xl font-bold py-5">
                        💎 Products
                    </h1>
                    <div class="my-6 flex space-x-5 align-middle justify-between items-center">
                        <a href="{{ route('products.create') }}" class="px-3 py-2 hover:bg-green-300/10 border rounded-lg bg-green-500/10 text-green-500 border-green-800">
                            Add product +
                        </a>
                        <form method="get">
                            <input type="text" name="keyword" class="px-3 py-2 border rounded-lg border-slate-500" placeholder="VR12345" />
                            <button type="submit" class="bg-sky-800/10 border border-sky-800 text-sky-500 py-2 px-3 rounded-lg hover:bg-sky-300/20">
                                Search
                            </button>
                        </form>
                    </div>
                    <table class="min-w-full mt-5 text-lg text-center font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                          <tr>
                            <th scope="col" class="px-6 py-4">ID</th>
                            <th scope="col" class="px-6 py-4">No. Item</th>
                            <th scope="col" class="px-6 py-4">Kode Barang</th>
                            <th scope="col" class="px-6 py-4">Created at</th>
                            <th scope="col" class="px-6 py-4">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $product->id }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $product->no_item }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $product->kode_barang }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $product->created_at }}</td>
                                    <td class="whitespace-nowrap px-6 py-4 flex justify-between items-center">
                                        <a href="{{ route('products.show', $product->id) }}">
                                            <x-feathericon-info class="text-sky-500 hover:text-sky-400" />
                                        </a>
                                        <a href="{{ route('products.edit', $product->id) }}">
                                            <x-feathericon-edit class="text-green-500 hover:text-green-400" />
                                        </a>
                                        <form action="{{ route('products.delete', $product->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit">
                                                <x-feathericon-trash class="text-rose-500 hover:text-rose-400" />
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <x-render-time />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>