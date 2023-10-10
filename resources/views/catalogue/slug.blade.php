<x-app-layout title="Catalogue">
    <section class="container space-x-5 flex mx-auto justify-bertween py-10 px-10">

        {{-- Side bar category --}}
        <div class="bg-white dark:bg-gray-800 dark:text-slate-100 shadow-sm h-full w-1/3 px-7 py-5 text-left rounded-lg">


            <!-- Accordion slug section -->
            <div class="max-w-screen-xl min-h-sceen">
                <div class="flex flex-col items-center">
                    <h2 class="font-bold text-6xl mt-5 tracking-tight">
                        Category
                    </h2>
                    <p class="text-neutral-500 text-xl mt-3">
                        Main category & Sub category
                    </p>
                </div>
                <div class="grid divide-y px-2 divide-neutral-200 max-w-xl mx-auto mt-8">
                    @foreach($main_categorys as $main_category)
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
                                            <a href="{{ route('catalogue.category', $sub_category->id) }}" @if (url()->current() == route('catalogue.category', $sub_category->id))
                                                @class(['active', 'text-rose-500 border-b-2 hover:border-rose-500 hover:text-black dark:hover:text-slate-100 dark:border-dotted border-rose-500 hover:border-slate-100' => true])
                                                @endif
                                                class="hover:border-sky-900 hover:border-b hover:text-rose-500 dark:hover:border-rose-500">
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
            <!-- End of accordion section -->
            <div class="mt-5 justify-between">
                <x-render-time />
            </div>
        </div>
        {{-- End --}}

        {{-- Card category result --}}
        <div class="bg-white items-center content-center dark:bg-gray-800 dark:text-slate-100 shadow-sm space-x-4 px-7 w-2/3 mx-auto justify-center items-center text-center py-10 rounded-lg items-center">
            <div class="mb-10 py-2 mx-auto justify-center w-2/4">
                <h1 class="text-6xl text-center font-extrabold">Catalogue</h1>
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