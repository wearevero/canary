<x-app-layout title="Products">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-9xl uppercase tracking-tight text-center mt-10 mb-20 font-extrabold">Products</h1>
                    <div class="my-6 flex space-x-5 align-middle justify-between items-center">
                        <div class="space-x-5">
                            @if (auth()->user()->role_id == 1)
                            <a href="{{ route('products.create') }}" class="px-3 py-2 hover:bg-green-300/10 border rounded-lg bg-green-500/10 text-green-500 border-green-800">
                                Add product +
                            </a>
                            <a href="#" class="px-3 py-2 hover:bg-indigo-300/10 border rounded-lg bg-indigo-500/10 cursor-not-allowed text-indigo-500 border-indigo-800">
                                Import (development)
                            </a>
                            @endif
                            <a href="{{ route('products.export') }}" class="px-3 py-2 hover:bg-yellow-300/10 border rounded-lg bg-yellow-500/10 text-yellow-500 border-yellow-800">
                                Export
                            </a>
                        </div>
                        <x-alert />
                        <form method="get">
                            <input type="text" name="keyword" value="{{ request('keyword') }}" class="px-3 py-2 border-2 rounded-lg dark:bg-transparent border-sky-800" placeholder="No. Item" />
                            <button type="submit" class="bg-sky-800/10 border border-sky-800 text-sky-500 py-2 px-3 rounded-lg hover:bg-sky-300/20">
                                Search
                            </button>
                            @if(request('keyword'))
                            <button type="submit" name="keyword" class="bg-rose-800/10 border border-rose-800 text-rose-500 py-2 px-3 rounded-lg hover:bg-rose-300/20">
                                Reset
                            </button>
                            @endif
                        </form>
                    </div>
                    <table class="min-w-full mt-10 text-lg">
                        <thead class="border-b justify-between font-bold dark:border-neutral-500">
                            <tr class="text-2xl">
                                <th scope="col" class="px-6 py-4">No</th>
                                <th scope="col" class="px-6 py-4">No. Item</th>
                                <th scope="col" class="px-6 py-4">Main Category</th>
                                <th scope="col" class="px-6 py-4">Picture</th>
                                <th scope="col" class="px-6 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($products as $product)
                            <tr class="border-b font-semibold dark:border-neutral-500">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $no++ }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $product->no_item }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $product->main_category->nama_category }}</td>
                                <td>
                                    <a data-fancybox="gallery" data-caption="{{ $product->no_item }}" href="{{ asset('image/'.$product->image ?? 'tidak ada gambar')}}">
                                        <img id="fancy" is-draggable data-selectable src="{{ asset('image/'.$product->image ?? 'tidak ada gambar') }}" alt="{{ $product->no_item }} tidak memiliki gambar" height="80" width="100" id="zoom-image" class="zoom py-2 hover:cursor-pointer mx-auto rounded-md xzoom-gallery" title="{{ $product->no_item }}" />
                                    </a>
                                </td>
                                <td class="whitespace-nowrap flex space-x-2 my-20 items-center">
                                    <a href="{{ route('products.show', $product->id) }}" title="Detail" class="bg-sky-500/20 border border-sky-500 rounded-lg py-2 px-3">
                                        <x-feathericon-info class="text-sky-500 hover:text-sky-400" />
                                    </a>
                                    @if (auth()->user()->role_id == 1)
                                    <a href="{{ route('products.edit', $product->id) }}" title="Edit" class="bg-green-500/20 border border-green-500 rounded-lg py-2 px-3">
                                        <x-feathericon-edit class="text-green-500 hover:text-green-400" />
                                    </a>
                                    <form action="{{ route('products.delete', $product->id) }}" class="flex" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" value="DELETE" title="Delete" class="bg-rose-500/20 border border-rose-500 rounded-lg py-2 px-3">
                                            <x-feathericon-trash class="show_confirmDelete text-rose-500 hover:text-rose-400" />
                                        </button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-5 justify-between">
                        {{ $products->appends($_GET)->links() }}
                        <x-render-time />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $host = $('[mag-thumb="drag"]');
    $host.mag({
        position: 'drag',
        toggle: false
    });
</script>