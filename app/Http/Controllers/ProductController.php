<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('products.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //

        //image upload
        // $product_image = $request->file('image');
        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($product_image->getClientOriginalExtension());
        // $img_name = $name_gen . '.' . $img_ext;
        // $location = 'img/products/';
        // $last_img = $location . $img_name;
        // $product_image->move($location, $img_name);
        // dd($request->all());
        $name = '';
        $file = $request->image;
        $name = $file->getClientOriginalName();
        $file->move(public_path('images'), $name);

        // $product = new Product();
        // $product->name = $request->name;
        // $product->quantity = $request->quantity;
        // $product->price = $request->price;
        // $product->image = 'images/' . $name;
        // $product->description = $request->description;
        // $product->save();

        Product::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'image' => 'images/' . $name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        // return json response to ajax
        return response()->json($product);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //image upload
        $image = $product->image;



        //check if image is not null and update data
        if ($request->file('image')) {
            Storage::delete($product->image);
            $image = $request->file('image')->move('public/products');
            $product->name = $request->name;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->image = $request->$image;
            $product->description = $request->description;
            $product->save();
            return redirect()->route('admin.products.index')->with('warning', 'Update successfully');
        } else {
            $product->name = $request->name;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->description = $request->description;
            $product->save();
            return redirect()->route('admin.products.index')->with('warning', 'Update successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
    }
}
