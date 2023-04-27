<x-app-layout title="Import products">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center flex items-center justify-center font-bold text-7xl mt-5 mb-10">
                         Import Products ✨
                    </h1>


                    @if ($message = Session::get('success'))
                    <div class="">
                    <div>
                        <div class="max-w-xs bg-blue-100 mx-auto text-center justify-center items-center border border-blue-200 text-md text-blue-500 rounded-md shadow-md" role="alert">
                          <div class="flex py-2 px-4">
                            {{ $message }}
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif

                    {{-- testing input group --}}
                        <form method="post" action="{{  route('products.importstore') }}" enctype="multipart/form-data" class="py-5 text-lg items-center justify-center">
                            @csrf
                            <div class="mb-6 flex">
                                <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Upload file excel
                                  </span>
                                    <input
                                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="file"
                                        type="file" />
                                </div> 

                            <button type="submit" class="bg-blue-800/30 text-center hover:bg-blue-400/10 mx-auto mt-10 font-bold text-indigo-500 px-5 py-1 border border-blue-800 rounded-md">
                                Lets import!
                            </button>
                        </form>
                    {{-- end of testing --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>