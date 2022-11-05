<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Drink::all();
        return view('admin.drinks.index', compact('drinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.drinks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'type' => 'required|max:255',
            'level' => 'nullable|numeric',
            'liter' => 'nullable|string',
        ]);

        Drink::create($request->all());

        return redirect()->route('admin.drinks.index')
            ->with('success', 'Drink created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $drink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function edit(Drink $drink)
    {
        return view('admin.drinks.edit', compact('drink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drink $drink)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'type' => 'required|max:255',
            'level' => 'nullable|numeric',
            'liter' => 'nullable|string',
        ]);

        $drink->update($request->all());

        return redirect()->route('admin.drinks.index')
            ->with('success', 'Drink updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $drink)
    {
        //
    }

    public function delete($id)
    {
        $drink = Drink::find($id);
        $drink->delete();

        return redirect()->route('admin.drinks.index')
            ->with('success', 'Drink deleted successfully');
    }
}
