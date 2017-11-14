<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    //

    public function bookRoom()
    {
        return view('reservations/bookRoom');
    }
}
