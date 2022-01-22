<?php

namespace App\Http\Controllers;

use App\Models\ProductIn;
use App\Models\Product;
use App\Models\Mitra;
use Auth;
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
        $product = Product::orderBy('name_product', 'ASC')->get()->pluck('name_product', 'id');
        $mitra = Mitra::orderBy('mitra_name', 'ASC')->get()->pluck('mitra_name', 'id');
        $productin = ProductIn::all();
        return view('produk-masuk.index', compact('product', 'mitra', 'productin'));
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
        $this->validate($request, [
            'no_invoice' => 'required',
            'product_id' => 'required',
            'mitra_id' => 'required',
            'stock' => 'required'
        ]);

        ProductIn::create($request->all());

        $productin = Product::findOrFail($request->input('product_id'));
        $productin->stock += $request->input('stock');

        $productin->save();
        return redirect()->route('product-masuk.index');
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
