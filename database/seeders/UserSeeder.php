<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        static $password;

        \App\Models\User\User::factory()->create([
            'name' => "Juliano Monteiro",
            'email' => "julianodesenv@gmail.com",
            'password' => $password ?: $password = bcrypt('132456'),
            'remember_token' => \Illuminate\Support\Str::random(10),
            'role_id' => 1
        ]);

        \App\Models\User\User::factory()->create([
            'name' => "Gerente",
            'email' => "gerente@julianomonteiro.com",
            'password' => $password ?: $password = bcrypt('132456'),
            'remember_token' => \Illuminate\Support\Str::random(10),
            'role_id' => 2
        ]);

        \App\Models\User\User::factory()->create([
            'name' => "Usuário",
            'email' => "usuario@julianomonteiro.com",
            'password' => $password ?: $password = bcrypt('132456'),
            'remember_token' => \Illuminate\Support\Str::random(10),
            'role_id' => 3
        ]);
    }
}
