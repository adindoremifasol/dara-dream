<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class PeranSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::factory()->create([
            'name' => 'Ahmad Fauzi',
            'email' => 'ahmad@polbeng.ac.id',
        ]);

        $admin->role = 'admin';
        $admin->save();

        User::factory()->create([
            'name' => 'Bella Anggraini',
            'email' => 'bella@polbeng.ac.id',
        ]);
    }
}