<x-app-layout title="Index - Main Category">
    <div class="py-12  mx-auto">
        <h1 class="mb-12 text-slate-100 text-6xl font-bold flex justify-center mx-auto px-8">
            List Main Category
        </h1>
        <div class="flex space-x-7 max-w-xl text-center items-center justify-center mx-auto sm:px-6 lg:px-8">
            @if ($main_categorys->count() > 0)
            @foreach($main_categorys as $product)
            <ul>
                <li>
                    <div class="border-2 items-center justify-center items-center content-center hover:border-indigo-500 transform transition duration-500 hover:scale-110 hover:shadow-lg float-right border-gray-600 text-center content-center hover:cursor-pointer p-3 inline-block my-3 rounded-lg">
                        <img width="175" class="object-center mx-auto text-center justify-center rounded-lg mb-5" src="{{ asset('image/'.$product->image) }}" alt="Tidak ada gambar" />
                        <span class="border border-rose-500 rounded-lg bg-rose-800/20 text-rose-500 py-1 text-sm px-2 uppercase font-normal">
                            {{ $product->nama_category }}
                        </span>
                        <h3 class="mb-5 mt-2 text-md uppercase font-bold">
                            {{ $product->nama_category }}
                        </h3>
                        <a href="{{ route('products.show', $product->id) }}">
                            <button class="px-3 align-middle py-1 w-full flex mx-auto justify-center rounded-lg bg-sky-800/20 text-sky-500 border ease-in-out hover:bg-blue-800/30 border-blue-500 text-md">
                                Detail
                            </button>
                        </a>
                    </div>
                </li>
            </ul>
            @endforeach
            @endif
        </div>
    </div>
</x-app-layout>