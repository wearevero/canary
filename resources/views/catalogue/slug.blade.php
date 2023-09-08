<x-app-layout title="Catalogue">
    <section class="container space-x-5 flex mx-auto justify-bertween py-10 px-10">

        {{-- Side bar category --}}
        <div class="bg-white dark:bg-gray-800 dark:text-slate-100 shadow-sm h-full w-1/3 px-7 py-5 text-left rounded-lg">
            <table>
                <thead class="text-5xl font-extrabold">
                    <tr>
                        <th class="pb-5 py-7">
                            Category's
                        <th>
                    </tr>
                </thead>
                <tbody class="pt-10 mt-10">
                    @foreach($categorys as $category)
                    <tr class="">
                        <td class="px-2 rounded-lg">
                            <h3 class="text-xl py-1 uppercase">
                                {{ $no++ }}.
                                <a href="{{ route('catalogue.category', $category->id) }}" @if (url()->current() == route('catalogue.category', $category->id))
                                    @class(['active', 'text-rose-500 border-b-2 hover:border-rose-500 hover:text-black dark:hover:text-slate-100 dark:border-dotted border-rose-500 hover:border-slate-100' => true])
                                    @endif
                                    class="hover:border-sky-900 hover:border-b hover:text-rose-500 dark:hover:border-rose-500">
                                    {{ $category->nama_kategori }}
                                </a>
                            </h3>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-5 justify-between">
                <x-render-time />
            </div>
        </div>
        {{-- End --}}

        {{-- Card category result --}}
        <div class="bg-white items-center content-center dark:bg-gray-800 dark:text-slate-100 shadow-sm space-x-4 px-7 w-2/3 mx-auto justify-center items-center text-center py-10 rounded-lg items-center">
            <div class="mb-10 py-2 mx-auto justify-center w-2/4">
                <h1 class="text-6xl text-center font-extrabold">This is Catalogue!</h1>
            </div>
            @if($products->count() > 0)
            @foreach($products as $product)
            <div class="border-2 grayscale hover:grayscale-0 hover:border-indigo-500 transform transition duration-500 hover:scale-110 hover:shadow-lg border-gray-600 float-right text-center content-center items-center justify-center hover:cursor-pointer mx-auto p-3 my-3 rounded-lg">
                <img width="190" class="object-center mx-auto border-2 border-gray-800 text-center justify-center rounded-lg" src="{{ asset('image/'.$product->image ?? 'tidak ada gambar') }}" />
                <h3 class="my-5 text-md uppercase font-bold">
                    {{ $product->no_item }}
                </h3>
                <a href="{{ route('products.show', $product->id) }}" class="px-2 py-1 flex mx-auto justify-center rounded-lg bg-blue-800/30 text-blue-500 border ease-in-out hover:bg-blue-800/10 border-blue-800 text-md">
                    Detail
                </a>
            </div>
            @endforeach
            @else
            <div class="mx-auto text-center py-5">
                <img width="200" class="object-cover mx-auto rounded-lg" width="100" height="100" src="{{ asset('404.svg') }}" />
                <h3 class="mt-8 text-gray-500 dark:text-slate-100 text-4xl font-extrabold">
                    Ooops
                    <br>
                    Tidak ada data.
                </h3>
            </div>
            @endif
        </div>
        {{-- End card --}}
        <section>
</x-app-layout>