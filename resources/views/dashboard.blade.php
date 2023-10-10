<x-app-layout title="Dashboard">


    <x-slot name="header">
        <h2 class="p-3 border rounded-lg max-w-5xl mx-auto font-semibold bg-indigo-500 content-center text-center items-center justify-center text-white text-xl dark:text-gray-200 leading-tight">
            {!! \Illuminate\Foundation\Inspiring::quote() !!}

        </h2>
    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900 dark:text-gray-100">
                    <h1 class="text-left flex items-center justify-center text-5xl font-bold py-5">
                        We Believe...
                        <br>
                        Every Piece of Jewelry Tells a Radiant Story.
                    </h1>
                </div>
            </div>
        </div>
    </div> -->

    <div class="my-10 container-fluid bg-gradient-to-r from-violet-500 to-fuchsia-500 px-10 align-middle w-5/6 justify-center content-center mx-auto rounded-lg py-10">
        <div class="flex shadow-sm space-x-5 dark:text-slate-100 text-center items-center mx-auto justify-center">
            <div class="bg-slate-500 rounded-md text-black backdrop-filter dark:bg-slate-100/30 backdrop-blur-xl w-1/3 p-5">
                <img class="object-cover mx-auto rounded-lg fill-white" width="70" src="{{ asset('product.png') }}" alt="Jumlah Product" />
                <h2 class="font-bold text-2xl mt-3">Product <span>{{ $products->count() }}</span></h2>
            </div>

            <!-- master category chart -->
            <div class="bg-rose-500 rounded-md text-black backdrop-filter dark:bg-slate-100/30 backdrop-blur-xl w-1/3 p-5">
                <img class="object-cover mx-auto rounded-lg" width="70" src="{{ asset('categories.png') }}" alt="Jumlah Product" />
                <h2 class="font-bold text-2xl mt-3">Main Category <span>{{ $main_categorys->count() }}</span></h2>
            </div>
            <!-- end of master category chart -->

            <!-- category chart -->
            <div class="bg-slate-500 rounded-md text-black backdrop-filter dark:bg-slate-100/30 backdrop-blur-xl w-1/3 p-5">
                <img class="object-cover mx-auto rounded-lg fill-white" width="70" src="{{ asset('category.png') }}" alt="Jumlah Product" />
                <h2 class="font-bold text-2xl mt-3">Sub Category <span>{{ $categorys->count() }}</span></h2>
            </div>
            <!-- end of category chart -->
        </div>
    </div>
</x-app-layout>