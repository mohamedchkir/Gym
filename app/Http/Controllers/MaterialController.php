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
        $material_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($material_image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $location = 'assets/images/materials/';
        $last_img = $location . $img_name;
        $material_image->move($location, $img_name);


        //store data
        $material = new Material();
        $material->name = $request->name;
        $material->price = $request->price;
        $material->quantity = $request->quantity;
        $material->image = $request->$last_img;
        $material->description = $request->description;
        $material->save();

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
        if ($request->file('image')) {
            Storage::delete($material->image);
            $image = $request->file('image')->move('assets/images/materials');
            $material->name = $request->name;
            $material->price = $request->price;
            $material->quantity = $request->quantity;
            $material->image = $request->$image;
            $material->description = $request->description;
            $material->save();
            return redirect()->route('admin.materials.index')->with('warning', 'Update successfully');
        } else {
            $material->name = $request->name;
            $material->price = $request->price;
            $material->quantity = $request->quantity;
            $material->description = $request->description;
            $material->save();
            return redirect()->route('admin.materials.index')->with('warning', 'Update successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {

        Storage::delete($material->image);
        $material->delete();
        return redirect()->back()->with('danger','Material deleted successfully');
    }
}
