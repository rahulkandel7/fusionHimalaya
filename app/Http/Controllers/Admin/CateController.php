<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carte;
use App\Models\Category;
use Illuminate\Http\Request;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartes = Carte::all();
        return view('admin.cartes.index', compact('cartes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.cartes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:cartes|max:255',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        Carte::create($data);

        return redirect()->route('admin.cartes.index')
            ->with('success', 'Carte created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Http\Response
     */
    public function show(Carte $carte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Http\Response
     */
    public function edit(Carte $carte)
    {
        $categories = Category::all();
        return view('admin.cartes.edit', compact('carte', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carte $carte)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        $carte->update($data);

        return redirect()->route('admin.cartes.index')
            ->with('success', 'Carte updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carte $carte)
    {
        //
    }

    public function delete(Request $request)
    {
        $carte = Carte::find($request->dataid);
        $carte->delete();

        return redirect()->route('admin.cartes.index')
            ->with('success', 'Carte deleted successfully.');
    }
}
