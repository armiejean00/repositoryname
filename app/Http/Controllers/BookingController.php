<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Desk;


class BookingController extends Controller
{



    //
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function getSelfBookings()
    {
        $self_bookings = Booking::all()->where('user_id', auth()->id());

        return view('booking')->with('bookings', $self_bookings);
    }


    public function store(Request $request)
    {


        $deskNumber = $request->input('desk_number');
        $date = $request->input('date');

        $isHotdeskReserved = Booking::where('desk_number', $deskNumber)->whereDate('date', $date)->exists();
        $desk = Desk::where('desk_number', $deskNumber)->first();
        $hotdeskUnavailable = $desk->isAvailable == 0 ? true : false;

        if ($isHotdeskReserved || $hotdeskUnavailable) {
            return redirect()->back()->with('error', 'Desk is not available.');
        } else {
            $existingBooking = Booking::where('user_id', auth()->id())
                ->whereDate('date', $date)
                ->exists();

            if ($existingBooking) {
                return redirect()->back()->with('error0', 'You already have a reservation for this date.');
            }

            $booking = Booking::create([
                'date' => $date,
                'desk_number' => $deskNumber,
                'user_id' => auth()->id()
            ]);

            return redirect()->back()->with('success', 'Booking created successfully.');
        }

   
}


}
