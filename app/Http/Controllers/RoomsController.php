<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    //
    public function checkAvailableRooms()
    {
        return view('rooms/checkAvailableRooms');
    }
}
