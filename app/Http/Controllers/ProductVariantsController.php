<?php

namespace App\Http\Controllers;

use App\Models\ProductVariants;
use Illuminate\Http\Request;

class ProductVariantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProductVariants::all();
        return view('page.product.detail')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
               $data = [
            'product_id' => $request->input('product_id'),
            'color_name' => $request->input('color_name'),
            'color_code' => $request->input('color_code')
        ];

        ProductVariants::create($data);

        return redirect()
            ->route('product.detail');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
