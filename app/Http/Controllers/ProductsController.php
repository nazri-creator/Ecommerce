<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\Support\ResultReflection;
use ReturnTypeWillChange;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = [
            'brand_id' => $request->input('brand_id'),
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'base_price' => $request->input('base_price'),
            'is_active' => $request->input('is_active')

        ];

        Products::create($data);

        return redirect()
            ->route('product.index');
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
