<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            'name'=>'Pyae Phyoe Naing',
            'email'=>'pyaephyoenaing@gmail.com',
            'password'=>Hash::make('password'),
        ]);
    }
}
