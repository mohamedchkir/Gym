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
        $cart = session()->get('cart');

        // If the cart does not exist, create an empty cart
        if (!$cart) {
            $cart = [
                'items' => [],
                'total' => 0
            ];
        }

        return view('cart.cart', compact('cart'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart');
        if(!$cart) {
            $cart = [
                $id => [
                    "item_id"   => $product->id,
                    "name" => $product->name,
                    "product" => $product->price,
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
    }

    public function updateCart(Request $request, $id)
    {
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

    public function deleteFromCart($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }


}
