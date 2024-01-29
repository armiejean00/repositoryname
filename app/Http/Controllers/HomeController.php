<?php

namespace App\Http\Controllers;

use App\Models\Desk;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $desks = Desk::all();

        return view('home')->with('desks', $desks);
    }
    public function adminHome()
    {
        $users = User::all();
        $admins = User::where('is_admin', 1)->get(); 
        $desks = Desk::all();
         $booking = Booking::all();

        return view('admin-home')->with('data', ['users' => $users, 'admins' => $admins, 'desks' => $desks,'booking' => $booking]);
    }
}
