<x-app-layout title="List users">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul>
                        <li class="space-x-5 flex justify-center items-center align-middle">
                            @foreach ($users as $user)
                                <x-feathericon-alert-triangle class="text-rose-500 mr-3"/> 
                                {{ $user->name }} - {{ $user->email }}
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>