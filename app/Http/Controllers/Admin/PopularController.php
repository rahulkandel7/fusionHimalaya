<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Popular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PopularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $populars = Popular::all();
        return view('admin.populars.index', compact('populars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.populars.create');
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
            'photopath' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'price' => 'required|numeric',
        ]);

        if ($request->has('photopath')) {
            $fname = Str::random(20);
            $fexe = $request->file('photopath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath')->move(public_path() . '/public/populars', $fpath);

            $data['photopath'] = 'populars/' . $fpath;
        }

        Popular::create($data);

        return redirect()->route('admin.populars.index')->with('success', 'Popular added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function show(Popular $popular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function edit(Popular $popular)
    {
        return view('admin.populars.edit', compact('popular'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Popular $popular)
    {
        $data = $request->validate([
            'photopath' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'price' => 'required|numeric',
        ]);

        if ($request->has('photopath')) {
            $fname = Str::random(20);
            $fexe = $request->file('photopath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath')->move(public_path() . '/public/populars', $fpath);

            if ($popular->photopath) {
                File::delete(public_path() . '/public/' . $popular->photopath);
            }

            $data['photopath'] = 'populars/' . $fpath;
        }

        $popular->update($data);

        return redirect()->route('admin.populars.index')->with('success', 'Popular updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function destroy(Popular $popular)
    {
        //
    }

    public function delete(Request $request)
    {
        $p = Popular::find($request->dataid);
        File::delete(public_path() . '/public/' . $p->photopath);
        $p->delete();

        return redirect()->route('admin.populars.index')->with('success', 'Popular deleted sucessfully');
    }
}
