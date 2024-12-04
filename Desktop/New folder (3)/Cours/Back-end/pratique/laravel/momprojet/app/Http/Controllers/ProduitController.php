<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produits;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function form()
    {
        $produits = produits::all();
        return view('produits.index', [ 'produits' => $produits ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'prix' => 'required'
            ]);
            produits::create($request->post());
            return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return view('produits.show', ['produit' => $produit]);
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
