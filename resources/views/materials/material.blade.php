<x-dashboard-layout>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-14">

        <div class="sm:flex">
            <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                <button type="button" data-modal-toggle="add-user-modal" class="mb-3 inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add material
                </button>
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantity
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        sell date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materials as $material)


                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-32 p-4">
                        <img src="{{$material->image}}" alt="Apple Watch">
                    </td>
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                       <div class="pl-3">
                            <div class="text-base font-semibold">{{$material->name}}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        {{$material->quantity}}
                    </td>
                    <td class="px-6 py-4">
                        {{$material->price}}
                    </td>
                    <td class="px-6 py-4">
                        {{$material->created_at->diffForHumans()}}
                    </td>
                    <td class="px-6 space-x-2 whitespace-nowrap">
                        <button type="button" data-modal-toggle="edit-user-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                            Edit material
                        </button>
                        <button type="button" data-modal-toggle="delete-user-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            Delete material
                        </button>
                    </td>
                </tr>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

    function addProduct() {
        $('#material_form').attr('method', 'POST');
        $('#material_form').attr('action', '/material');
        $('#material_form').trigger("reset");

        //hide
        document.getElementById('update-material-btn').style.visibility = 'hidden';

        //reveal
        document.getElementById('add-material-btn').style.visibility = 'visible';
    }


    // get material information using ajax
    function editematerial(id) {
        //hide
            document.getElementById('add-material-btn').style.visibility = 'hidden';
        //reveal

            document.getElementById('update-material-btn').style.visibility = 'visible';

        $.ajax({
            url: '/material/' + id,
            type: 'GET',
            dataType: 'json',
            complete: function(data) {
                console.log(data)
            },
            success: function(data) {
                $('#user_id').val(data.id);
                $('#material_form').attr('method', 'PUT');
                $('#material_form').attr('action', '/material/' + data.id);
                $('#name').val(data.name);
                $('#quantity').val(data.quantity);
                $('#price').val(data.price);
                // $('#image').val(data.image);
                $('#description').val(data.description);


            }
        });
    }
</script>

</x-dashboard-layout>
