<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::all();
        return view('sales.sales', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'produk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);

        Sales::create($request->only(['produk', 'harga']));

        return redirect()->route('sales.index')->with('success', 'Sale created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sales = Sales::findOrFail($id);
        return view('sales.update', compact('sales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'produk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);
        
        $sales = Sales::findorfail($id);
        $sales->update($request->only(['produk', 'harga']));

        return redirect()->route('sales.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sales = Sales::findorfail($id);
        $sales->delete();
        return redirect()->route('sales.index')->with('success', 'Data berhasil diperbarui!');
    }
}
