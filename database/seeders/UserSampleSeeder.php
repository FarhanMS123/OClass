<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=60; $i++){
            $user_type = $i >= 55 ? 'praetorian' : 'member';
            User::create([
                'name' => ucfirst($user_type) . ' ' . $i,
                'ocm_id' => 'OCM200' . $i,
                'email' => $user_type . $i . '@email.com',
                'password' => Hash::make('TestPass123'),
                'room_id' => fmod($i, 6) + 1,
                'user_type' => $user_type
            ]);
        }
    }
}
