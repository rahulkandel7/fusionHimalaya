<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lunch;
use Illuminate\Http\Request;

class LunchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lunches = Lunch::all();
        return view('admin.lunches.index', compact('lunches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lunches.create');
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
            'day' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        Lunch::create($request->all());

        return redirect()->route('admin.lunches.index')
            ->with('success', 'Lunch created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lunch  $lunch
     * @return \Illuminate\Http\Response
     */
    public function show(Lunch $lunch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lunch  $lunch
     * @return \Illuminate\Http\Response
     */
    public function edit(Lunch $lunch)
    {
        return view('admin.lunches.edit', compact('lunch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lunch  $lunch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lunch $lunch)
    {
        $request->validate([
            'day' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $lunch->update($request->all());

        return redirect()->route('admin.lunches.index')
            ->with('success', 'Lunch updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lunch  $lunch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lunch $lunch)
    {
        //
    }

    public function delete(Request $request)
    {
        Lunch::find($request->dataid)->delete();

        return redirect()->route('admin.lunches.index')
            ->with('success', 'Lunch deleted successfully');
    }
}
