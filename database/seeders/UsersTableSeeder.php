<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'user_name'=>'admin',
            'first_name'=>'sabbir',
            'last_name'=>'ahmmed',
            'password'=>bcrypt('123'),
            'contact_no'=>'0181564',
            'email_address'=>'admin.panel@gmail.com',
            'date_of_birth'=>'1998-09-05',
            'image'=>'image',
            'gender'=>'gender',
            'religion'=>'religion',
            'payment_method'=>'payment_method',
            'transaction_id'=>'transaction_id',
            'role'=>'admin'

        ]);
    }
}
