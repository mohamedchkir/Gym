<x-dashboard-layout>



    {{-- THE HEAD OF THE TABLE  --}}

    <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All users</h1>
            </div>
            <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                <div class="flex items-center mb-4 sm:mb-0">
                    <form class="sm:pr-3" action="#" method="GET">
                        <label for="products-search" class="sr-only">Search</label>
                        <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                            <input type="text" name="email" id="products-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for products">
                        </div>
                    </form>

                </div>
                <button id="createProductButton" onclick="adduser()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="user-modal" data-drawer-show="user-modal" aria-controls="user-modal" data-drawer-placement="right">
                    Add new product
                </button>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name & Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Add date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="{{$user->image}}" alt="Jese image">
                        <div class="pl-3">
                            <div class="text-base font-semibold">{{$user->name}}</div>
                            <div class="font-normal text-gray-500">{{$user->email}}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        {{$user->phone}}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Online
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        {{$user->created_at->diffForHumans()}}
                    </td>
                    <td class="p-4 space-x-2 whitespace-nowrap">
                        <button type="button" data-drawer-target="user-modal" onclick="editeUser({{$user->id}})" data-drawer-show="user-modal" aria-controls="user-modal" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-yellow-200 hover:bg-yellow-300 focus:ring-4 focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                            Update
                        </button>
                        <form action="{{ route('user.destroy', $user->id) }}"
                            class="inline-flex items-center  "
                            method="POST" onsubmit="return confirm('are You sur?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                Delete user
                            </button>

                        </form>
                    </td>
                </tr>
                @endforeach


            </tbody>


        </table>
    </div>

     <!-- user Drawer -->
 <div id="user-modal" class=" fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">New Product</h5>
    <button type="button" data-drawer-dismiss="user-modal" aria-controls="user-modal" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form action="#">
        <div class="space-y-4">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="title" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type product name" required="">
            </div>

            <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="$2999" required="">
            </div>
            <div>
                <label for="category-create" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Technology</label>
                <select id="category-create" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected="">Select category</option>
                    <option value="FL">Flowbite</option>
                    <option value="RE">React</option>
                    <option value="AN">Angular</option>
                    <option value="VU">Vue</option>
                </select>
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter event description here"></textarea>
            </div>
            <div>
                <label for="discount-create" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount</label>
                <select id="discount-create" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected="">No</option>
                    <option value="5">5%</option>
                    <option value="10">10%</option>
                    <option value="20">20%</option>
                    <option value="30">30%</option>
                    <option value="40">40%</option>
                    <option value="50">50%</option>
                </select>
            </div>
            <div class="bottom-0 left-0 flex justify-center w-full pb-4 space-x-4 md:px-4 md:absolute">
                <button type="submit" id="add-user-btn" class="text-white w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Add User
                </button>
                <button type="submit"  id="update-user-btn" class="text-white w-full justify-center bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                    Update User
                </button>
                <button type="button" data-drawer-dismiss="user-modal" aria-controls="user-modal" class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    Cancel
                </button>
            </div>
    </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>

   function adduser() {
       $('#user_form').attr('method', 'POST');
       $('#user_form').attr('action', '/user');
       $('#user_form').trigger("reset");

        // hide update button
        //  $("#update-user-btn").show();
         $("#update-user-btn").hide();
        // show add button
        //  $("#add-user-btn").hide();
         $("#add-user-btn").show();
   }


   // get user information using ajax
   function editeUser(id) {
         // show update button
            // $("#update-user-btn").hide();
            $("#update-user-btn").show();
        // hide add button
            // $("#add-user-btn").show();
            $("#add-user-btn").hide();

       $.ajax({
           url: '/user/' + id,
           type: 'GET',
           dataType: 'json',
           complete: function(data) {
               console.log(data)
           },
           success: function(data) {
               $('#user_id').val(data.id);
               $('#user_form').append('@method('PUT')');
               $('#user_form').attr('action', '/user/' + data.id);
               $('#image').attr('src', data.image);
               $('#name').val(data.name);
               $('#email').val(data.quantity);
               $('#phone').val(data.price);
               $('#password').val(data.description);


           }
       });
   }
           </script>
</x-dashboard-layout>
