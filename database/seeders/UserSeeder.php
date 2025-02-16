<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            "name" => "User",
            "email" => "user@example.com",
        ])->assignRole(RoleEnum::User->value);

        User::factory()->create([
            "name" => "Vendor",
            "email" => "vendor@example.com",
        ])->assignRole(RoleEnum::Vendor->value);
        User::factory()->create([
            "name" => "Admin",
            "email" => "admin@example.com",
        ])->assignRole(RoleEnum::Admin->value);
    }
}
