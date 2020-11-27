<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flight = User::create([
            'name' => 'Firman Adiyuda',
            'email' => 'firmanadiyuda@gmail.com',
            'password' => Hash::make('violetsareblue123#'),
        ]);

    }
}
