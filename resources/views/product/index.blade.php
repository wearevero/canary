<x-app-layout title="Products">
    <x-slot name="header">
        <h2 class="p-3 text-center border rounded-lg max-w-md font-semibold bg-indigo-400 text-xl text-white dark:text-gray-200 leading-tight">
            sitemap: {{ Request::url() }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-7xl text-center mt-10 mb-20 font-extrabold">List All Products.</h1>
                    <div class="my-6 flex space-x-5 align-middle justify-between items-center">
                        <div class="space-x-5">
                            <a href="{{ route('products.create') }}" class="px-3 py-2 hover:bg-green-300/10 border rounded-lg bg-green-500/10 text-green-500 border-green-800">
                                Add product +
                            </a>

                            <a href="{{ route('products.export') }}" class="px-3 py-2 hover:bg-yellow-300/10 border rounded-lg bg-yellow-500/10 text-yellow-500 border-yellow-800">
                                Export
                            </a>

                            <a href="{{ route('products.import') }}" class="px-3 py-2 hover:bg-indigo-300/10 border rounded-lg bg-indigo-500/10 text-indigo-500 border-indigo-800">
                                Import
                            </a>
                        </div>
                        <x-alert/>
                        <form method="get">
                            <input type="text" name="keyword" class="px-3 py-2 border rounded-lg border-slate-500" placeholder="Cari no. item" placeholder="{{ old('keyword') }}" />
                            <button type="submit" class="bg-sky-800/10 border border-sky-800 text-sky-500 py-2 px-3 rounded-lg hover:bg-sky-300/20">
                                Search
                            </button>
                        </form>
                    </div>
                    <table class="min-w-full mt-5 text-lg text-center font-light">
                        <thead class="border-b font-bold dark:border-neutral-500">
                          <tr>
                            <th scope="col" class="px-6 py-4">ID</th>
                            <th scope="col" class="px-6 py-4">No. Item</th>
                            <th scope="col" class="px-6 py-4">Category</th>
                            <th scope="col" class="px-6 py-4">Picture</th>
                            <th scope="col" class="px-6 py-4">Action</th>
                          </tr>
                        </thead>
                        <tbody class="">
                            @foreach($products as $product)
                                <tr class="border-b font-semibold dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $no++ }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $product->no_item }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $product->category->nama_kategori }}</td>
                                    <td>
                                        <div class="xzoom-thumbs">
                                        <a href="{{ asset('image/'.$product->image ?? 'tidak ada gambar')}}">
                                            <img xpreview="{{ asset('image/'.$product->image ?? 'tidak ada gambar')}}" src="{{ asset('image/'.$product->image ?? 'tidak ada gambar')}}" alt="{{ $product->no_item }} tidak memiliki gambar" height="80" width="80" class="xzoom-gallery py-2 hover:cursor-pointer mx-auto rounded-md" title="{{ $product->no_item }}"/>
                                        </a>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap flex align-middle justify-center space-x-5 py-12 items-center">
                                        <a href="{{ route('products.show', $product->id) }}" title="Detail" class="bg-sky-500/20 border border-sky-500 rounded-lg py-2 px-3">
                                            <x-feathericon-info class="text-sky-500 hover:text-sky-400" />
                                        </a>
                                        @if ( auth()->user()->id == 1 )
                                            <a href="{{ route('products.edit', $product->id) }}" title="Edit" class="bg-green-500/20 border border-green-500 rounded-lg py-2 px-3">
                                                <x-feathericon-edit class="text-green-500 hover:text-green-400" />
                                            </a>
                                            <form action="{{ route('products.delete', $product->id) }}" class="flex" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" title="Delete" class="bg-rose-500/20 border border-rose-500 rounded-lg py-2 px-3">
                                                    <x-feathericon-trash class="text-rose-500 hover:text-rose-400" />
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <div class="mt-5 justify-between">
                        {{ $products->links() }}
                        <x-render-time />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>