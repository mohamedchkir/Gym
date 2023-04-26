
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-j0S7G7jBGAfz8IjupFvsZxDBB738FJaioo/AK8C/xD4z4U4M4b8v1d8f6xrDf6p/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <!-- Font Awesome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Coach Users</title>
</head>

<body class=" ">

<x-navbar/>

<div class="container mx-auto p-6 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @forelse ($users as $user )
        <div class="col-span-1 flex flex-col justify-between p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#" class="flex justify-center">
                <img class="rounded-t-lg h-60"  src="{{asset('assets/images/users/'.$user->image)}}" alt="user image" />
            </a>
            <div class="p-5 flex justify-center">
                <div>
                        <h5 class="text-xl justify-center font-semibold tracking-tight text-gray-900 dark:text-white">{{$user->name}}</h5>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-1 flex flex-col justify-between p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h1>
                No users found !!!
            </h1>
        </div>
    @endforelse
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://kit.fontawesome.com/6eccfa85ff.js" crossorigin="anonymous"></script>
</html>

