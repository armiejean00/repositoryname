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


public function store(Request $request)
{
    $deskNumber = $request->input('desk_number');
    
    // check if desk number is available
    $isAvailable = Desk::where('desk_number', $deskNumber)->where('isAvailable', '1')->exists();
    
    if ($isAvailable) {
        // check if the user has already booked a desk on the same day
        $existingBooking = Booking::where('desk_number', $deskNumber)
            ->whereDate('date', $request->input('date'))
            ->where('user_id', auth()->id()) // Add this condition to check the user ID
            ->exists();
        
        if ($existingBooking) {
            return redirect()->back()->with('error0', 'Desk is already booked on the specified date.');
        }
        
        // get the current date
        $currentDate = date('Y-m-d');
        
        // check if the booking date has arrived
        if ($request->input('date') <= $currentDate) {
            // update desk status to unavailable
            Desk::where('desk_number', $deskNumber)->update(['isAvailable' => '0']);
        } else {
            // update desk status to available
            Desk::where('desk_number', $deskNumber)->update(['isAvailable' => '1']);
        }
        
        // create booking
        $booking = Booking::create([
            'date' => $request->input('date'),
            'desk_number' => $deskNumber,
            'user_id' => auth()->id(), // Add the user ID to the booking
        ]);
        
        // additional logic or redirect the user as needed
        
        return redirect()->back()->with('success', 'Booking created successfully.');
    } else {
        return redirect()->back()->with('error', 'Desk number is not available.');
    }
}


}