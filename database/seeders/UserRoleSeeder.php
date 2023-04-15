<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User\UserRole::factory()->create([
            'name' => "Administrador"
        ]);

        \App\Models\User\UserRole::factory()->create([
            'name' => "Gerente"
        ]);

        \App\Models\User\UserRole::factory()->create([
            'name' => "Usuário"
        ]);
    }
}
