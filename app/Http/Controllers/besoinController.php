<?php

namespace App\Http\Controllers;

use App\Models\Besoin;
use Illuminate\Http\Request;

class besoinController extends Controller
{
    public function index()
    {
        $besoins = Besoin::all();
        return view('besoins.index', compact('besoins'));
    }

    public function create()
    {
        return view('besoins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required',
        ]);

        Besoin::create([
            'client_id' => auth()->id(), // Assuming the authenticated user is the client
            'titre' => $request->titre,
            'description' => $request->description,
            'status' => $request->status,

        ]);

        return redirect()->route('besoins.index')->with('success', 'Besoin posted successfully.');
    }

    public function show(Besoin $besoin)
    {
        return view('besoins.show', compact('besoin'));
    }

    public function edit(Besoin $besoin)
    {
        return view('besoins.edit', compact('besoin'));
    }

    public function update(Request $request, Besoin $besoin)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required'
        ]);

        $besoin->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'status' => $request->status
        ]);

        return redirect()->route('besoins.index')->with('success', 'Besoin updated successfully.');
    }

    public function destroy(Besoin $besoin)
    {
        $besoin->delete();

        return redirect()->route('besoins.index')->with('success', 'Besoin deleted successfully.');
    }
}
