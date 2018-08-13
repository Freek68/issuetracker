<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {

        User::create(array(
            'name' => 'Master',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$n.AQuUv0CWUJgbAwiRKOGe9bQGXdQ7wlJQyFZ28N7fif88OpoL2yS',
            'role' => 'admin',
        ));
    }
}