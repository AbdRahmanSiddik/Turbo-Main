<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use App\Models\Kegiatan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RolePermissionSeeder;

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
        $users3 = User::create(
            [
                'name' => 'muqtafi',
                'email' => 'muqtafi@gmail.com',
                'password' => bcrypt('123'),
            ]
        );

        $users->assignRole('admin');
        $users2->assignRole('peserta');
        $users3->assignRole('admin');

        User::create(
            [
                'name' => 'septa',
                'email' => 'septa@gmail.com',
                'password' => bcrypt('123'),
            ]
        )->assignRole('peserta');
        User::create(
            [
                'name' => 'jacky',
                'email' => 'jacky@gmail.com',
                'password' => bcrypt('123'),
            ]
        )->assignRole('peserta');
        User::create(
            [
                'name' => 'berry',
                'email' => 'berry@gmail.com',
                'password' => bcrypt('123'),
            ]
        )->assignRole('mentor');
        User::create(
            [
                'name' => 'rafi',
                'email' => 'rafi@gmail.com',
                'password' => bcrypt('123'),
            ]
        )->assignRole('mentor');

        Kegiatan::factory(2)->create();
        Team::factory(2)->create();
    }
}
