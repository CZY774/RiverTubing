<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Initial User
        User::create([
            'username' => 'admin1munculrivertubing',
            'password' => Hash::make('adminsatumunculrivertubing'),
            'last_login' => null
        ]);

        // Cornelius Yoga
        User::create([
            'username' => 'corneliusyoga',
            'password' => Hash::make('corneliusyoga774'),
            'last_login' => null
        ]);
    }
}
