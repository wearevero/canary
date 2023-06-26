<x-app-layout title="Dashboard">
    <x-slot name="header">
        <h2 class="p-3 border rounded-lg max-w-5xl mx-auto font-semibold bg-indigo-500 content-center text-center items-center justify-center text-white text-xl dark:text-gray-200 leading-tight">
            {!! \Illuminate\Foundation\Inspiring::quote() !!}
        </h2>
    </x-slot>

    <div class="py-12">
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
    </div>
</x-app-layout>
