<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['material_type', 'embed', 'session', 'session_name', 'session_date', 'content', 'room_id'];

    public function room(){
        return $this->belongsTo(App\Models\Room::class);
    }

    public function formated_content(){
        return Str::of($this->content)->markdown();
    }

    public function formated_SessionDate(){
        return Carbon::createFromFormat('Y-m-d', $this->session_date)->format('l, d F, Y');
    }
}
