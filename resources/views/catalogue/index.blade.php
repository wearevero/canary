<x-app-layout title="Catalogue">
    <section class="container space-x-5 flex mx-auto justify-bertween py-10 px-10">

        <!-- Sidebar Category Section -->
        <div class="bg-white dark:bg-gray-800 dark:text-slate-100 shadow-sm h-full w-1/3 px-7 py-5 text-left rounded-lg">
            <div class="max-w-screen-xl min-h-sceen">
                <div class="flex flex-col items-center">
                    <h2 class="font-bold text-6xl mt-5 tracking-tight">
                        Category
                    </h2>
                    <p class="text-neutral-500 text-xl mt-3">
                        All category & sub category
                    </p>
                </div>
                <div class="grid divide-y px-2 divide-neutral-200 max-w-xl mx-auto mt-8">
                    @foreach ($main_categorys as $main_category)
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex justify-between uppercase text-xl items-center font-medium cursor-pointer list-none">
                                <span>
                                    {{ $main_category->nama_category }}
                                </span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                            <div class="px-5">
                                @foreach ($main_category->sub_category as $sub_category)
                                <tr class="">
                                    <td class="px-2 rounded-lg">
                                        <h3 class="text-lg py-1 uppercase">
                                            &bull;
                                            <a class="hover:border-b-2 hover:border-sky-900 dark:hover:border-rose-500 hover:text-rose-500 hover:border-dotted hover:border-rose-500" href="{{ route('catalogue.category', $sub_category->id) }}">
                                                {{ $sub_category->nama_kategori }}
                                            </a>
                                        </h3>
                                    </td>
                                </tr>
                                @endforeach
                            </div>
                            </p>
                        </details>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="ml-2">
                <x-render-time />
            </div>
        </div>
        {{-- End --}}

        {{-- Card category result --}}
        <div class="bg-white dark:bg-gray-800 dark:text-slate-100 shadow-sm space-x-4 pr-11 w-2/3 py-10 rounded-lg">
            <div class="mb-10 py-2 mx-auto justify-center w-2/4">
                <h1 class="text-6xl text-center font-extrabold">Catalogue</h1>
            </div>
            @if ($products->count() > 0)
            @foreach($products as $product)
            <div class="border-2 items-center justify-center items-center content-center hover:border-indigo-500 transform transition duration-500 hover:scale-110 hover:shadow-lg float-right border-gray-600 text-center content-center hover:cursor-pointer p-3 inline-block my-3 rounded-lg">
                <img width="175" class="object-center mx-auto text-center justify-center rounded-lg mb-5" src="{{ asset('image/'.$product->image) }}" alt="Tidak ada gambar" />
                <span class="border border-rose-500 rounded-lg bg-rose-800/20 text-rose-500 py-1 text-sm px-2 uppercase font-normal">
                    {{ $product->category->nama_kategori }}
                </span>
                <h3 class="mb-5 mt-2 text-md uppercase font-bold">
                    {{ $product->no_item }}
                </h3>
                <a href="{{ route('products.show', $product->id) }}">
                    <button class="px-3 align-middle py-1 w-full flex mx-auto justify-center rounded-lg bg-sky-800/20 text-sky-500 border ease-in-out hover:bg-blue-800/30 border-blue-500 text-md">
                        Detail
                    </button>
                </a>
            </div>
            @endforeach
            @else
            <div class="mx-auto text-center py-5">
                <img width="200" class="object-cover mx-auto rounded-lg" width="100" height="100" src="{{ asset('404.svg') }}" />
                <h3 class="mt-8 text-gray-500 text-4xl font-extrabold">
                    Ooops
                    <br>
                    Tidak ada data.
                </h3>
            </div>
            @endif
        </div>
        {{-- End --}}
</x-app-layout>