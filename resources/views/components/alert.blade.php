                        {{-- alert testing --}}
                        @if ($message = Session::get('create'))
                        <div>
                            <div class="max-w-xs bg-blue-100 border border-blue-200 text-sm text-blue-500 rounded-md shadow-md" role="alert">
                              <div class="flex py-2 px-4">
                                {{ $message }}
                              </div>
                            </div>
                          </div>
                        @endif

                        @if ($message = Session::get('update'))
                        <div>
                            <div class="max-w-xs bg-green-100 border border-green-200 text-sm text-green-500 rounded-md shadow-md" role="alert">
                              <div class="flex py-2 px-4">
                                {{ $message }}
                              </div>
                            </div>
                          </div>
                        @endif

                        @if ($message = Session::get('destroy'))
                        <div>
                            <div class="max-w-xs bg-red-100 border border-red-200 text-sm text-red-500 rounded-md shadow-md" role="alert">
                              <div class="flex py-2 px-4">
                                {{ $message }}
                              </div>
                            </div>
                          </div>
                        @endif
                        {{-- end --}}