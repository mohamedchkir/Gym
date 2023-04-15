<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Material;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materials = Material::all();
        return view('materials.material', compact('materials'));
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
     * @param  \App\Http\Requests\StoreMaterialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterialRequest $request)
    {
        //image upload
        // $material_image = $request->file('image');
        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($material_image->getClientOriginalExtension());
        // $img_name = $name_gen . '.' . $img_ext;
        // $location = 'assets/images/materials/';
        // $last_img = $location . $img_name;
        // $material_image->move($location, $img_name);
        $name = '';
        $file = $request->image;
        $name = $file->getClientOriginalName();
        $file->move(public_path('assets/images/materials'), $name);

        //store data
        Material::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'image' => 'assets/images/materials/' . $name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Material Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material=Material::find($id);
        // return json response to ajax
        return response()->json($material);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialRequest  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaterialRequest $request, Material $material)
    {
        //image upload
        $image = $material->image;

        //check if image is not null and update data
        // if ($request->file('image')) {
        //     Storage::delete($material->image);
        //     $image = $request->file('image')->move('assets/images/materials');
        //     $material->name = $request->name;
        //     $material->price = $request->price;
        //     $material->quantity = $request->quantity;
        //     $material->image = $request->$image;
        //     $material->description = $request->description;
        //     $material->save();
        //     return redirect()->route('admin.materials.index')->with('warning', 'Update successfully');
        // } else {
        //     $material->name = $request->name;
        //     $material->price = $request->price;
        //     $material->quantity = $request->quantity;
        //     $material->description = $request->description;
        //     $material->save();
        //     return redirect()->route('admin.materials.index')->with('warning', 'Update successfully');
        // }
        if ($request->hasFile('image')) {
            $file = $request->image;
            $image = $file->getClientOriginalName();
            $file->move(public_path('assets/images/products'), $image);
            $image='assets/images/products/'.$image;
                }
        $material->name = $request->name;
        $material->image = $image;
            $material->price = $request->price;
            $material->quantity = $request->quantity;
            $material->description = $request->description;
            $material->save();
            return redirect()->back()->with('warning', 'Update successfully');



    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {

        $material->delete();
        return redirect()->back()->with('danger','Material deleted successfully');
    }

    public function statistiques()
    {

        // get number of materials
        $materials_count = Material::count();

        // get sum of materials price
        $materials_price = Material::sum('price');

        // get max price of material
        $max_price = Material::max('price');

        // get min price of material
        $min_price = Material::min('price');

        // return view with data
        return view('maindash', compact('materials', 'materials_count', 'materials_price', 'max_price', 'min_price'));




    }
}
