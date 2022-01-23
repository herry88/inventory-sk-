<?php

namespace App\Http\Controllers;

use App\Models\ProductOut;
use Illuminate\Http\Request;

class ProductOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productout = ProductOut::all();
        return view('produk-keluar.index', compact('productout'));
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
        //
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
