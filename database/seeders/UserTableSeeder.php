<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
                      'name'=>'Adhi',
                      'email'=>'adhi@gmail.com',
                      'mobile'=>'9744111359'
        ]);
        User::create([
            'name'=>'Anu',
            'email'=>'anu@gmail.com',
            'mobile'=>'9744112228'
]);
User::create([
    'name'=>'Surya',
    'email'=>'surya@gmail.com',
    'mobile'=>'9744254769'
]);
User::create([
    'name'=>'Manu',
    'email'=>'manu@gmail.com',
    'mobile'=>'9744112456'
]);
User::create([
    'name'=>'Sathya',
    'email'=>'sathya@gmail.com',
    'mobile'=>'8924111359'
]);
    }
}
