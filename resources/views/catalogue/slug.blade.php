<x-app-layout title="Catalogue">
    <section class="container space-x-5 flex mx-auto justify-bertween py-10 px-10">

        {{-- Side bar category --}}
        <div class="bg-white dark:bg-gray-800 shadow-sm h-full w-1/3 px-7 py-5 text-left rounded-lg">
            <table>
                <thead class="text-5xl font-extrabold">
                    <tr>
                        <th class="pb-5 py-7">
                            Category
                        <th>
                    </tr>
                </thead>
                <tbody class="pt-10 mt-10">
                    @foreach($categorys as $category)
                    <tr class="">
                        <td class="px-2 rounded-lg">
                            <h3 class="text-xl py-1 uppercase">
                                {{ $no++ }}.
                                <a class="border-b-2 hover:border-sky-900 hover:text-sky-900 border-dotted border-gray-700" href="{{ route('catalogue.index') }}/category/{{ $category->id }}">
                                    {{ $category->nama_kategori }}
                                </a>
                            </h3>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- End --}}

        {{-- Card category result --}}
        <div class="bg-white shadow-sm space-x-4 px-5  w-2/3 mx-auto justify-center text-center py-10 rounded-lg items-center">
            <div class="border-b-2 mb-10 py-2 border-dotted mx-auto justify-center w-2/4 border-blue-600">
                <h1 class="text-6xl text-center font-extrabold">Catalogue.</h1>
            </div>
            @if($products->count() > 0)
                @foreach($products as $product)
                <div class="border-2 grayscale hover:grayscale-0 hover:border-indigo-500 transform transition duration-500 hover:scale-110 hover:shadow-lg border-gray-600 float-right text-center content-center items-center justify-center hover:cursor-pointer mx-auto p-3 my-3 rounded-lg">
                    <img width="200" class="object-cover rounded-lg" src="https://raw.githubusercontent.com/yuxxeun/yuxxeun/master/assets/bsmnt.jpeg" />
                    <h3 class="my-5 text-xl uppercase font-extrabold">
                        {{ $product->no_item }}
                    </h3>
                    <button class="px-2 py-1 flex mx-auto justify-center rounded-lg bg-blue-800/30 text-blue-500 border ease-in-out hover:bg-blue-800/10 border-blue-800 text-md">
                        Detail
                    </button>
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
        {{-- End card --}}
    <section>
</x-app-layout>