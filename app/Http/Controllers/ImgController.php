<?php

namespace App\Http\Controllers;

use App\Models\Img;
use App\Models\Product;
use Illuminate\Http\Request;

class ImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgs = $request->file('imgs');
        
        $imgData[] = '';
        foreach($request->file('imgs') as $file)
        {
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/uploads/', $name);  
            $imgData[] = $name;  
        }

        // dd($imgData);
        foreach ($imgData as $img) {
            $imgs = new Img([
                'name' => $img,
                'product_id' => $request->get('product_id')
            ]);
            $imgs->save();
        }

        return redirect()->route('products.index')->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function show(Img $img)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function edit(Img $img)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Img $img)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function destroy(Img $img)
    {
        //
        $img->delete();

       return redirect()->route('products.index')
                       ->with('success','branche deleted successfully');
    }
}
