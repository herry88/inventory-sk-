<?php

namespace App\Http\Controllers;

use App\Models\ProductIn;
use App\Models\Product;
use App\Models\Mitra;
use Illuminate\Http\Request;

class ProductInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produk-masuk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::orderBy('name_product', 'ASC')->get()->pluck('name_product', 'id');
        $mitra = Mitra::orderBy('mitra_name', 'ASC')->get()->pluck('mitra_name', 'id');
        return view('produk-masuk.form', compact('product', 'mitra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductIn  $productIn
     * @return \Illuminate\Http\Response
     */
    public function show(ProductIn $productIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductIn  $productIn
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductIn $productIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductIn  $productIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductIn $productIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductIn  $productIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductIn $productIn)
    {
        //
    }
}
