<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slideshow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slideshows = Slideshow::all();
        return view('admin.slideshows.index', compact('slideshows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slideshows.create');
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
            'photopath' => 'required|image|mimes:png,jpg',
            'priority' => 'required|numeric',
        ]);

        if ($request->has('photopath')) {
            $fname = Str::random(20);
            $fexe = $request->file('photopath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath')->move(public_path() . '/public/slideshows', $fpath);

            $data['photopath'] = 'slideshows/' . $fpath;
        }

        Slideshow::create($data);

        return redirect(route('admin.slideshows.index'))->with('success', 'Slideshow added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function show(Slideshow $slideshow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function edit(Slideshow $slideshow)
    {
        return view('admin.slideshows.edit', compact('slideshow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slideshow $slideshow)
    {
        $data = $request->validate([
            'priority' => 'required',
            'photopath' => 'nullable|image|mimes:png,jpg'
        ]);

        if ($request->has('photopath')) {
            $fname = Str::random(20);
            $fexe = $request->file('photopath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath')->move(public_path() . '/public/slideshows', $fpath);

            if ($slideshow->photopath) {
                File::delete('public/' . $slideshow->photopath);
            }

            $data['photopath'] = 'slideshows/' . $fpath;
        }

        $slideshow->update($data);

        return redirect(route('admin.slideshows.index'))->with('success', 'Slideshow updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slideshow $slideshow)
    {
        //
    }
    public function delete(Request $request)
    {
        $s = Slideshow::find($request->dataid);
        File::delete('public/' . $s->photopath);
        $s->delete();
        return redirect(route('admin.slideshows.index'))->with('success', 'Slideshow Deleted Sucessfully');
    }
}
