<x-app-layout title="Detail {!! $product->no_item !!}">
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                  <h1 class="text-center flex items-center justify-center font-bold text-7xl mt-5 mb-10">
                    {{ $product->no_item }}
                  </h1>


                  {{-- testing input group --}}
                      <form method="post" action="{{  route('products.store') }}" enctype="multipart/form-data" class="py-5 disabled text-lg items-center justify-center">
                          @csrf
                          <a href="{{ asset('image/'.$product->image ?? 'tidak ada gambar')}}">
                            <img xpreview="{{ asset('image/'.$product->image ?? 'tidak ada gambar')}}" src="{{ asset('image/'.$product->image ?? 'tidak ada gambar')}}" alt="{{ $product->no_item }} tidak memiliki gambar" height="250" width="250" class="text-center xzoom-gallery py-2 hover:cursor-pointer mx-auto rounded-md" title="{{ $product->no_item }}"/>
                          </a>
                          <h1 class="text-xl mt-10 mb-5 font-bold">Data &nbsp;<span class="font-semibold px-3 bg-rose-500/20 rounded-lg text-rose-500 border border-rose-500 text-sm">wajib diisi</span></h1>
                          <div class="mb-6 flex">
                              <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                  No. Item
                                </span>
                              <input disabled type="text" name="no_item" class="cursor-not-allowed rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $product->no_item }}">
                          </div>
                          <div class="mb-6 flex">
                              <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                  Category
                                </span>
                              <select disabled name="id_kategori" class="cursor-not-allowed rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="666">
                                  <option>
                                      {{ $product->category->nama_kategori }}
                                  </option>      
                              <select>
                          </div> 
                    

                          {{-- keterangan --}}
                          <h1 class="text-xl mt-10 mb-5 font-bold">Keterangan tambahan &nbsp;<span class="font-semibold px-3 bg-yellow-500/20 rounded-lg text-yellow-500 border border-yellow-500 text-sm">optional</span></h1>
                          <div class="grid gap-6 mb-6 md:grid-cols-2">
                                  <div class="flex">
                                      <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        Qty Stone
                                      </span>
                                      <input disabled type="text" name="qty_stone" class="cursor-not-allowed rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                        @if ($product->qty_stone != null ) 
                                          value="{{ $product->qty_stone }}"
                                        @else
                                          value="-"
                                        @endif
                                      >
                                  </div>
                                  <div class="flex">
                                      <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                          Size Stone
                                      </span>
                                      <input disabled type="text" name="size_stone" class="cursor-not-allowed rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        @if ($product->size_stone != null ) 
                                          value="{{ $product->size_stone }}"
                                        @else
                                          value="-"
                                        @endif 
                                      >
                                  </div>
                                  <div class="flex">
                                      <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                          Size
                                      </span>
                                      <input disabled type="text" name="size" class="cursor-not-allowed rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        @if ($product->size != null ) 
                                          value="{{ $product->size }}"
                                        @else
                                          value="-"
                                        @endif
                                      >
                                  </div>
                              </div>
                          <a href="{{ url()->previous() }}" type="submit" class="bg-blue-800/30 text-center hover:bg-blue-400/10 mx-auto mt-10 font-bold text-indigo-500 px-5 py-1 border border-blue-800 rounded-md">
                            Back   
                          </a>
                      </form>
                  {{-- end of testing --}}
              </div>
          </div>
      </div>
  </div>
</x-app-layout>