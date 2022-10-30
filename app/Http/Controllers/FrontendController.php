<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Lunch;
use App\Models\Popular;
use App\Models\Reservation;
use App\Models\Slideshow;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $galleries = Gallery::take(6)->latest()->get();
        $slideshows = Slideshow::all()->sortBy('priority');
        $lunches = Lunch::all();
        $populars = Popular::all();
        $cartes = Carte::all();
        $categories = Category::all();
        return view('welcome', compact('galleries', 'slideshows', 'lunches', 'populars', 'cartes', 'categories'));
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        return view('gallery', compact('galleries'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function reservation()
    {
        return view('reservation');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function makeReservation(Request $request)
    {
        $data = $request->validate([
            'date' => 'string',
            'time' => 'string',
            'party' => 'string',
            'name' => 'string',
            'email' => 'email',
            'phone' => 'string',
            'message' => 'nullable|string',
        ]);

        Reservation::create($data);

        return redirect()->back()->with('success', 'Reservation made successfully');
    }

    public function fetchReservations()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function confirm($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'confirmed';
        $reservation->save();
        return redirect()->back()->with('success', 'Reservation confirmed successfully');
    }

    public function cancel($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'cancelled';
        $reservation->save();
        return redirect()->back()->with('success', 'Reservation Cancelled successfully');
    }

    public function fetchPending()
    {
        $reservations = Reservation::where('status', 'pending')->get();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function fetchConfirm()
    {
        $reservations = Reservation::where('status', 'confirmed')->get();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function fetchCancel()
    {
        $reservations = Reservation::where('status', 'cancelled')->get();
        return view('admin.reservations.index', compact('reservations'));
    }
}
