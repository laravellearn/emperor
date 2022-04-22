<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
            'name' => "حمید متقی پیشه",
            'email' => "w3persia@gmail.com",
            'email_verified_at' => new \DateTime,
            'mobile' => "09210034734",
            'mobile_verified_at' => new \DateTime,
            'password' => Hash::make("123456789")
        ]);
    }
}
