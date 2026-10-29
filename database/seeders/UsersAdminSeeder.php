<?php

namespace Database\Seeders;

use App\Models\usersModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'febri', 'email' => 'febri.yohanes@gmail.com', 'role' => 'admin'],
            ['name' => 'test', 'email' => 'febri.yohanes44@gmail.com', 'role' => 'user'],
        ];

        foreach ($users as $user) {
            usersModel::updateOrCreate(
                ['email' => $user['email']],
                $user + ['password' => Hash::make('password')]
            );
        }
    }
}
