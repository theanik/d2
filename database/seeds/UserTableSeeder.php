<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Azhar",
            'email' => 'azharraihan6969@gmail.com',
            'role' => 1,
            'password' => Hash::make('azharraihan6969')
        ]);
    }
}
