<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use App\Models\Profile;
use App\Models\Kegiatan;
use Illuminate\Support\Str;
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

        $users = User::create([
            'name' => 'anandamw',
            'email' => 'anandamw@gmail.com',
            'password' => bcrypt('123'),
        ]);
        $this->createProfile($users);

        $users2 = User::create([
            'name' => 'rahman',
            'email' => 'rahman@gmail.com',
            'password' => bcrypt('123'),
        ]);
        $this->createProfile($users2);

        $users3 = User::create([
            'name' => 'muqtafi',
            'email' => 'muqtafi@gmail.com',
            'password' => bcrypt('123'),
        ]);
        $this->createProfile($users3);

        $users->assignRole('admin');
        $users2->assignRole('peserta');
        $users3->assignRole('admin');

        $user_septa = User::create([
            'name' => 'septa',
            'email' => 'septa@gmail.com',
            'password' => bcrypt('123'),
        ]);
        $user_septa->assignRole('peserta');
        $this->createProfile($user_septa);

        $user_jacky = User::create([
            'name' => 'jacky',
            'email' => 'jacky@gmail.com',
            'password' => bcrypt('123'),
        ]);
        $user_jacky->assignRole('peserta');
        $this->createProfile($user_jacky);

        $user_berry = User::create([
            'name' => 'berry',
            'email' => 'berry@gmail.com',
            'password' => bcrypt('123'),
        ]);
        $user_berry->assignRole('mentor');
        $this->createProfile($user_berry);

        $user_rafi = User::create([
            'name' => 'rafi',
            'email' => 'rafi@gmail.com',
            'password' => bcrypt('123'),
        ]);
        $user_rafi->assignRole('mentor');
        $this->createProfile($user_rafi);

        Kegiatan::factory(2)->create();
        Team::factory(2)->create();
    }

    private function createProfile($user)
    {
        Profile::create([
            'user_id' => $user->id,
            'token_user' => Str::random(16),
            'foto' => 'default.png'
        ]);
    }
}
