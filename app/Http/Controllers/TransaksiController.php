<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.transaksi',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|min:10|max:100',
            'email' => 'required|email',
            'no_hp' => 'required|min:10|max:13'
        ]);

        Transaksi::create($request->only(['nama', 'email','no_hp']));

        return redirect()->route('transaksi.index')->with('success', 'Transaksi created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.update',compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|min:10|max:100',
            'email' => 'required|email',
            'no_hp' => 'required|min:10|max:13'
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->only(['nama', 'email','no_hp']));

        return redirect()->route('transaksi.index')->with('success', 'Transaksi update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail('$id');
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi delete successfully!');
    }
}
