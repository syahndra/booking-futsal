<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Lapangan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        // $bookings =DB::table('bookings')
        // ->select('users.*', 'contacts.phone', 'orders.price')
        // ->get();
        // @dd($bookings);
        $bookings = Booking::with(['users', 'lapangan'])->get();
                
        return view('booking.index', compact('bookings'));
    }

    public function tambah()
    {
        $users = User::all();
        $lapangans = Lapangan::all();
        return view('booking.tambah', compact('users', 'lapangans'));
    }

    public function proses_tambah(Request $request)
    {
        $request->validate([
            'users_id' => 'required',
            'lapangan_id' => 'required',
            'waktu_booking' => 'required|date',
            'jam_booking' => 'required|integer|min:1',
            'bayar' => 'required|numeric',
        ]);

        $lapangan = Lapangan::findOrFail($request->lapangan_id);
        $total = $request->jam_booking * $lapangan->harga_perjam;

        Booking::create(array_merge($request->all(), ['total' => $total]));

        return redirect('/booking')->with('success', 'Booking created successfully.');
    }

    public function edit(string $id)
    {
        $booking = booking::findOrFail($id);
        $users = User::all();
        $lapangans = Lapangan::all();
        return view('booking.edit', compact('booking', 'users', 'lapangans'));
    }

    public function update(Request $request, string $id)
    {
        // @dd($request);
        $booking = Booking::findOrFail($id);
        $request->validate([
            'users_id' => 'required',
            'lapangan_id' => 'required',
            'waktu_booking' => 'required|date',
            'jam_booking' => 'required|integer|min:1',
            'bayar' => 'required|numeric',
        ]);

        $lapangan = Lapangan::findOrFail($request->lapangan_id);
        $total = $request->jam_booking * $lapangan->harga_perjam;
        $booking->update(array_merge($request->all(), ['total' => $total]));

        return redirect('/booking')->with('success', 'Booking updated successfully.');
    }

    public function hapus(string $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect('/booking')->with('success', 'Booking deleted successfully.');
    }
}
