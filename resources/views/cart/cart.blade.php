<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CartShop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

</body>
</html>
<x-navbar/>

    <!-- component -->
<!-- Create By Joker Banny -->
<style>
    @layer utilities {
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  }
</style>

<body>

    <div class="h-screen bg-gray-100 pt-20">

        @if (session('cart'))



        <h1 class="mb-10 text-center text-2xl font-bold"> Cart Items</h1>
        <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
            <div class="rounded-lg md:w-2/3">
                @foreach(session('cart') as $id => $item)
        <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
          <img src="{{ asset( $item['image']) }}"  alt="product-image" class="w-full rounded-lg sm:w-40" />
          <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
            <div class="mt-5 sm:mt-0">
              <h2 class="text-lg font-bold text-gray-900">{{ $item['name'] }}</h2>
              <p class="mt-1 text-xs text-gray-700">{{ $item['quantity'] }}</p>
            </div>
            <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
              <div class="flex items-center border-gray-100">
                <form action="{{ route('update.cart', $id) }}" class="d-flex gap-5 gap-md-2" method="POST">
                    @csrf
                    @method('PUT')
                    @php
                        // Get the available quantity for the item
                        foreach ($products as $product) {
                          if($product->id == $item['item_id'])
                          {
                            $availableQuantity = $product->quantity;
                          }
                        }
                        $cartQuantity = $item['quantity'];
                        $cartQuantity = $cartQuantity > $availableQuantity ? $availableQuantity : $cartQuantity;
                    @endphp
                    <input type="hidden" name="availableQuantity" value="{{ $availableQuantity }}">
                    <input type="hidden" name="cartQuantity" value="{{ $cartQuantity }}">
                    <button type="submit" class="bg-gray-100 text-gray-700 h-8 w-8 border rounded-l focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </button>
                </form>
              </div>
              <div class="flex items-center space-x-4">
                <p class="text-sm">{{ $item['price'] }} DH</p>


                    <form action="{{ route('cart.destroy', $id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg></button>
                      </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <h1 class="mb-10 text-center text-2xl font-bold"> Cart is Empty</h1>
        @endif
      </div>

      <!-- Sub total -->
      <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
        <div class="mb-2 flex justify-between">
          <p class="text-gray-700">Subtotal</p>
          @php $total = 0 @endphp
                        @if(session('cart'))
                          @foreach(session('cart') as $id => $item)

                              @php $total += $item['price'] * $item['quantity'] @endphp
                          @endforeach
                        @endif
          <p class="text-gray-700">{{$total}} DH</p>
        </div>
        <div class="flex justify-between">
            @php $Donnation = 1 @endphp
                        @if(session('cart'))
                          @foreach(session('cart') as $id => $item)

                              @php $total=$total + $Donnation @endphp
                          @endforeach
                        @endif
          <p class="text-gray-700">Donnation</p>
          <p class="text-gray-700">{{$Donnation}} DH</p>
        </div>
        <hr class="my-4" />
        <div class="flex justify-between">
          <p class="text-lg font-bold">Total</p>
          <div class="">
            <p class="mb-1 text-lg font-bold">{{$total}} MAD</p>
          </div>
        </div>
        <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check out</button>
      </div>
    </div>
  </div>
</body>
