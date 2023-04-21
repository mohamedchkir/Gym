<x-dashboard-layout>

    @if (session()->has('danger'))
    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
        role="alert">
        <span class="font-medium"></span> {{ session()->get('danger') }}
    </div>
@endif
@if (session()->has('success'))
    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
        role="alert">
        <span class="font-medium"></span> {{ session()->get('success') }}
    </div>
@endif
@if (session()->has('warning'))
    <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
        role="alert">
        <span class="font-medium"></span> {{ session()->get('warning') }}
    </div>
@endif
   {{-- THE HEAD OF THE TABLE  --}}

   <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full mb-1">
        <div class="mb-4">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All comments</h1>
        </div>
        <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
            <div class="flex items-center mb-4 sm:mb-0">
                <form class="sm:pr-3" action="#" method="GET">
                    <label for="products-search" class="sr-only">Search</label>
                    <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                        <input type="text" name="email" id="search-input" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for comments">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table  id="comments-table"  class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Comment
                </th>
                <th scope="col" class="px-6 py-3">
                    user name
                </th>
                <th scope="col" class="px-6 py-3">
                    user email
                </th>
                <th scope="col" class="px-6 py-3">
                    user phone
                </th>
                <th scope="col" class="px-6 py-3">
                    product name
                </th>
                <th scope="col" class="px-6 py-3">
                    adding time
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commentsData as $comment)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    {{ $comment['comment'] }}
                </td>
                <td class="px-6 py-4">
                    {{ $comment['user_name'] }}
                </td>
                <td class="px-6 py-4">
                    {{ $comment['user_email'] }}
                </td>
                <td class="px-6 py-4">
                    {{ $comment['user_phone'] }}
                </td>

                <td class="px-6 py-4">
                    {{ $comment['created_at'] }}
                </td>
                <td class="p-4 space-x-2 whitespace-nowrap">

                    <form action="{{ route('comment.destroy', $comment['id']) }}"
                        class="inline-flex items-center  "
                        method="POST" onsubmit="return confirm('are You sur?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="inline-flex items-center p-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>

                        </button>

                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>


    </table>
</div>

</x-dashboard-layout>
