<x-app-layout title="Manager">
    <div class="py-12 max-w-6xl mx-auto">
        <h1 class="mb-12 text-slate-100 text-6xl font-bold flex justify-center mx-auto px-8">
            <x-feathericon-settings class="text-orange-500" />
            Control Panel
        </h1>
        <div class="flex space-x-7 mx-auto sm:px-6 lg:px-8">
            <!-- slide  1 -->
            <div class="bg-white w-2/5 max-w-xl flex space-x-10 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900 dark:text-gray-100">
                    <p class="text-4xl font-bold">
                        Manage
                        <br>
                        Main Category
                    </p>
                    <div class="mt-3 text-lg">
                        <ul>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/create" class="hover:text-green-500">Create new main category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-yellow-500 dark:text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/edit" class="hover:text-yellow-500">Edit main category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-rose-500 dark:text-rose-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/delete" class="hover:text-rose-500">Delete main category</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- slide 2  -->
            <div class="bg-white w-2/5 max-w-xl flex space-x-10 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900 dark:text-gray-100">
                    <p class="text-4xl font-bold">
                        Manage
                        <br>
                        Sub Category
                    </p>
                    <div class="mt-3 text-lg">
                        <ul>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/create" class="hover:text-green-500">Create new sub category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-yellow-500 dark:text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/edit" class="hover:text-yellow-500">Edit sub category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-rose-500 dark:text-rose-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/delete" class="hover:text-rose-500">Delete sub category</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white w-2/5 max-w-xl flex space-x-10 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900 dark:text-gray-100">
                    <p class="text-4xl font-bold">
                        Manage
                        <br>
                        All User Data
                    </p>
                    <div class="mt-3 text-lg">
                        <ul>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/create" class="hover:text-green-500">Create new main category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-yellow-500 dark:text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/edit" class="hover:text-yellow-500">Edit main category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-rose-500 dark:text-rose-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/delete" class="hover:text-rose-500">Delete main category</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of card manager -->
        </div>

        <!-- section 2 -->
        <div class="flex space-x-7 mt-7 mx-auto sm:px-6 lg:px-8">
            <!-- slide  1 -->
            <div class="bg-white w-2/5 max-w-xl flex space-x-10 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900 dark:text-gray-100">
                    <p class="text-4xl font-bold">
                        Manage
                        <br>
                        Main Category
                    </p>
                    <div class="mt-3 text-lg">
                        <ul>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/create" class="hover:text-green-500">Create new main category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-yellow-500 dark:text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/edit" class="hover:text-yellow-500">Edit main category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-rose-500 dark:text-rose-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/delete" class="hover:text-rose-500">Delete main category</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- slide 2  -->
            <div class="bg-white w-2/5 max-w-xl flex space-x-10 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900 dark:text-gray-100">
                    <p class="text-4xl font-bold">
                        Manage
                        <br>
                        Sub Category
                    </p>
                    <div class="mt-3 text-lg">
                        <ul>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/create" class="hover:text-green-500">Create new sub category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-yellow-500 dark:text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/edit" class="hover:text-yellow-500">Edit sub category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-rose-500 dark:text-rose-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/delete" class="hover:text-rose-500">Delete sub category</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white w-2/5 max-w-xl flex space-x-10 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900 dark:text-gray-100">
                    <p class="text-4xl font-bold">
                        Manage
                        <br>
                        All User Data
                    </p>
                    <div class="mt-3 text-lg">
                        <ul>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/create" class="hover:text-green-500">Create new main category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-yellow-500 dark:text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/edit" class="hover:text-yellow-500">Edit main category</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-rose-500 dark:text-rose-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                                &nbsp;
                                <a href="/manage/main_category/delete" class="hover:text-rose-500">Delete main category</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- end of card manager -->
        </div>
    </div>
</x-app-layout>