<?php

namespace App\Http\Controllers;

use App\Models\Woman;
use Illuminate\Http\Request;

class WomanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $women = Woman::all();
        return view('women.index', compact('women'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('women.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'field_of_work' => 'required',
            'image_url' => 'required',
            'birth_date' => 'required|date',
        ]);

        Woman::create($validatedData);

        return redirect()->route('women.index')->with('success', 'Woman created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Woman $woman)
    {
        return view('women.show', compact('woman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Woman $woman)
    {
        return view('women.edit', compact('woman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Woman $woman)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'field_of_work' => 'required',
            'image_url' => 'required',
            'birth_date' => 'required|date',
        ]);

        $woman->update($validatedData);

        return redirect()->route('women.index')->with('success', 'Woman updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Woman $woman)
    {
        $woman->delete();

        return redirect()->route('women.index')->with('success', 'Woman deleted successfully.');
    }
}