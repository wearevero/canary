<x-app-layout title="Users">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-center flex items-center justify-center text-5xl font-bold py-5">
                        👤 User
                    </h1>
                    <div>
                        <form method="get" class="justify-end my-5 text-right">
                            <input type="text" name="keyword" class="px-3 py-2 border rounded-lg border-slate-500" placeholder="VR12345" />
                            <button type="submit" class="bg-sky-800/10 border border-sky-800 text-sky-500 py-2 px-3 rounded-lg hover:bg-sky-300/20">
                                Search
                            </button>
                        </form>  
                      </div>
                      <table class="min-w-full text-lg text-center font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                          <tr>
                            <th scope="col" class="px-6 py-4">No</th>
                            <th scope="col" class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Email</th>
                            <th scope="col" class="px-6 py-4">Verified at</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $no++ }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $user->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $user->email }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        @if($user->email_verified_at != null) 
                                            {{ $user->email_verified_at }}
                                        @else 
                                            Not verified
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <x-render-time/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>