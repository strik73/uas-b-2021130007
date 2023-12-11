<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|numeric|digits:16',
            'nama' => 'required|string',
            'harga' => 'required|numeric|gt:0',
            'stok' => 'required|numeric|gt:0',
        ]);

        $item = Item::create([
            'id' => $validated['id'],
            'nama' => $validated['nama'],
            'harga' => $validated['harga'],
            'stok' => $validated['stok'],
        ]);

        return redirect()->route('items.index')->with('success', 'Item added.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('items.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view ('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'id' => 'required|numeric|digits:16',
            'nama' => 'required|string',
            'harga' => 'required|numeric|gt:0',
            'stok' => 'required|numeric|gt:0',
        ]);

        $item->update([
            'id' => $validated['id'],
            'nama' => $validated['nama'],
            'harga' => $validated['harga'],
            'stok' => $validated['stok'],
        ]);

        return redirect()->route('items.index')->with('success', 'Item updated.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Item deleted.');
    }
}
