<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // check if user has permission 'view-cart'
        if (auth()->user()->hasPermissionTo('view cart')) {

            $cart = session()->get('cart');
            $products = Product::all();
            // If the cart does not exist, create an empty cart
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [

            ];
        }
        // return view('cart.cart')->with('cart', $cart);

        return view('cart.cart', compact('cart', 'products'));

        }else{

            abort(403, 'Unauthorized action.');

    }
}


    public function addToCart(Request $request, $id)
    {
        // check if user has permission 'add-to-cart'
        if (auth()->user()->hasPermissionTo('add to cart')) {

            $product = Product::findOrFail($id);

            $cart = session()->get('cart');
            if(!$cart) {
                $cart = [
                    $id => [
                        "item_id"   => $product->id,
                        "name" => $product->name,
                        "price" => $product->price,
                        "quantity" => 1,
                        "image" => $product->image,
                    ]
                ];
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product quantity updated successfully!');
            }
            $cart[$id] = [
                "item_id"   => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image,
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }else{

                abort(403, 'Unauthorized action.');
        }
}

    public function updateCart(Request $request, $id)
    {
        // check if user has permission 'update-cart'
        if (auth()->user()->hasPermissionTo('update cart')) {

            $cart = session()->get('cart');

            if(isset($cart[$id])) {
                $cart[$id]['quantity'] = $request->input('quantity');

                $product = Product::find($id);
                if ($product->quantity < $cart[$id]['quantity']) {
                    return redirect()->route('cart')->with('error', "La quantité sélectionnée n'est pas disponible en stock !");
                }

                session()->put('cart', $cart);
                return redirect()->route('cart')->with('success', 'Cart updated successfully!');
            }

            return redirect()->route('cart.index')->with('error', 'Invalid cart item!');
    }
    else{

        abort(403, 'Unauthorized action.');}
}

    public function deleteFromCart($id)
    {

        // check if user has permission 'delete-from-cart'
        if (auth()->user()->hasPermissionTo('delete from cart')) {

            $cart = session()->get('cart');

            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }

            return redirect()->back()->with('success', 'Product removed from cart successfully!');
        }else{

                abort(403, 'Unauthorized action.');
        }


}
}


