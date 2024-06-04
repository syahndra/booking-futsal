<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\User;
use App\Models\Lapangan;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $lapangan = Lapangan::all();

        $booking = [
            [
                'users_id' => 2,
                'lapangan_id' => 1,
                'waktu_booking' => now(),
                'jam_booking' => 2,
                'bayar' => 50000,
                'total' => 200000,
            ]
        ];

        DB::table('bookings')->insert($booking);
    }
}
