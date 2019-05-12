<?php

use Illuminate\Database\Seeder;
use App\Models\user;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     User::create([
         'name'=>'Admin',
         'address'=>'Dhaka',
         'email'=>'admin@gmail.com',
         'phone_number'=>'01742018184',
         'password'=>bcrypt('1234567890'),
         'role'=>'admin',
         'email_verified_at'=>now()
     ]);
    }
}
