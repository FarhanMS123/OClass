<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['material_type', 'embed', 'session', 'session_name', 'session_date', 'content', 'room_id'];

    public function room(){
        return $this->belongsTo(App\Models\Room::class);
    }
}
