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
        $user = $request->user();

        return view('profile', compact('user'));
    }

    public function material(Request $request){
        return view('material');
    }

    public function post(Request $request, $id=null){
        return view('post');
    }
}
