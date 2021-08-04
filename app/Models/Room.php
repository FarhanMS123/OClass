<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'bg', 'description', 'calendar_embed_link'];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function materials(){
        return $this->hasMany(App\Models\Material::class);
    }

    public function praetorian(){
        $qb = User::where('room_id', $this->id)
                    ->where('user_type', 'praetorian');
        if($qb->count() == 0) return null;
        else return $qb->get();
    }

    public function members(){
        $qb = User::where('room_id', $this->id)
                    ->where('user_type', 'member')->get();
        if($qb->count() == 0) return null;
        else return $qb->get();
    }
}
