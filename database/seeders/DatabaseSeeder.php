<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        $this->call([
            RolePermissionSeeder::class,
        ]);

        $users = User::create(
            [
                'name' => 'anandamw',
                'email' => 'anandamw@gmail.com',
                'password' => bcrypt('123'),
            ],
        );
        $users2 = User::create(
            [
                'name' => 'rahman',
                'email' => 'rahman@gmail.com',
                'password' => bcrypt('123'),
            ]
        );

        $users->assignRole('admin');
        $users2->assignRole('peserta');
    }
}
