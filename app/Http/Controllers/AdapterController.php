<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Material;
use App\Models\User;
use App\Models\Room;

class AdapterController extends Controller
{
    public function class(Request $request){
        $user = $request->user();
        $room = $user->room;
        $praetorian = $room->praetorian();

        return view('class', compact('user','room','praetorian'));
    }

    public function profile(Request $request){
        //
    }
}
