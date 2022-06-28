<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'name' => 'Tedelyn Mula',
            'email' => 'tedy@yahoo.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt ('mulatedey123')
            ],
            [
            'name' => 'Justine Bieber',
            'email' => 'Justine@yahoo.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt ('justine123')
             ],
        ];

        foreach($users as $user){
            User::create($user);
        }

    }
}
