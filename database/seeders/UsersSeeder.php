<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "username" => "roger",
            "password" => "$2y$10$5s5YlCZr1zRJOgemmAM5KOnN//ppdSDIWQ36kK6E14.gjwFqYLnja",
        ]);
    }
}
