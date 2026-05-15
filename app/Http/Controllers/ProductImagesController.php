<?php

namespace App\Http\Controllers;

use App\Models\ProductImages;
use App\Models\ProductVariants;
use Illuminate\Http\Request;

class ProductImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->route('product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $product_id = $request->query('product_id');

        $variant = ProductVariants::where('product_id', $product_id)->firstOrFail();

        return view('page.detail.image', compact('variant', 'product_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'variant_id' => $request->input('variant_id'),
            'image_url'  => $request->input('image_url'),
            'is_primary' => (bool) $request->input('is_primary', 0),
        ];

        ProductImages::create($data);

        $variant = ProductVariants::findOrFail($request->variant_id);

        return redirect()->route('product.show', $variant->product_id);
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
