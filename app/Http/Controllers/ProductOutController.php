<?php

namespace App\Http\Controllers;

use App\Models\ProductOut;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Mitra;


class ProductOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('name_product', 'ASC')->get()->pluck('name_product', 'id');
        $mitra = Mitra::orderBy('mitra_name', 'ASC')->get()->pluck('mitra_name', 'id');
        $productout = ProductOut::all();
        return view('produk-keluar.index', compact('productout', 'mitra', 'product'));
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

        return view('produk-keluar.form', compact('product', 'mitra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_invoice' => 'required',
            'product_id' => 'required',
            'mitra_id' => 'required',
            'stock' => 'required'
        ]);

        ProductOut::create($request->all());

        $productin = Product::findOrFail($request->input('product_id'));
        $productin->stock -= $request->input('stock');

        $productin->save();
        return redirect()->route('product-keluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductOut  $productOut
     * @return \Illuminate\Http\Response
     */
    public function show(ProductOut $productOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductOut  $productOut
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductOut $productOut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductOut  $productOut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductOut $productOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductOut  $productOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductOut $productOut)
    {
        //
    }
}
