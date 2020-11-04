<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'firstname' => 'admin',
                'lastname' => 'admin',
                'email' => 'admin@laraveltest.com',
                'phone' => '1234567890',
                'cni' => '123456789',
                'password' => bcrypt('password'),
            ],
        ];

        User::insert($data);
    }
}
