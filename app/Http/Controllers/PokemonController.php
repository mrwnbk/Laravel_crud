<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Http\Requests\StorePokemonRequest;
use App\Http\Requests\UpdatePokemonRequest;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createpokemons');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->only(['nom', 'type', 'niveau']));

        $pokemon = new Pokemon();
        $pokemon->nom = $request->nom;
        $pokemon->type = $request->type;
        $pokemon->niveau = $request->niveau;
        $pokemon->save();
        return redirect('/pokemons');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePokemonRequest $request, Pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->delete();
        return redirect('/pokemons');
    }
}
