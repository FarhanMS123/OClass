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
        $user = $request->user();
        $materials = Material::where('room_id', $user->room_id)->get();
        return view('material', compact('user', 'materials'));
    }

    public function post(Request $request, $id=null){
        if($request->user()->user_type == 'member') return back();

        $material = null;
        if($id) $material = Material::findOrFail($id);

        return view('post', compact('id', 'material'));
    }

    public function addPost(Request $request, $id=null){
        if($request->user()->user_type == 'member') return back();

        $request->validate([
            'session' => "required",
            'session_date' => "required",
            'session_name' => "required",
            'content' => "required"
        ]);

        if($id) Material::findOrFail($id)
                    ->update([
                        'embed' => $request->embed,
                        'session' => $request->session,
                        'session_date' => $request->session_date,
                        'session_name' => $request->session_name,
                        'content' => $request->content
                    ]);
        else Material::create([
                'embed' => $request->embed,
                'session' => $request->session,
                'session_date' => $request->session_date,
                'session_name' => $request->session_name,
                'content' => $request->content,
                'room_id' => $request->user()->room->id
            ]);

        return redirect()->route("material");
    }

    public function deletePost(Request $request, $id){
        if($request->user()->user_type == 'member') return back();

        Material::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function showUsers(){
        $users = User::orderBy('room_id', 'asc')->orderBy('user_type', 'desc')->get();

        return view('users', compact('users'));
    }
}
