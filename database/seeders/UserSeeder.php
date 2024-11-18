<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'João Silva',
            'email' => 'joao.silva@example.com',
            'password' => bcrypt('senha123'),
        ]);

        User::create([
            'name' => 'Maria Oliveira',
            'email' => 'maria.oliveira@example.com',
            'password' => bcrypt('senha123'),
        ]);

        User::create([
            'name' => 'Carlos Almeida',
            'email' => 'carlos.almeida@example.com',
            'password' => bcrypt('senha123'),
        ]);
    }
}
