<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Əvvəlcə admin user seeder-i çağır
        $this->call(AdminUserSeeder::class);

        // Əlavə olaraq adi user factory-lə yarada bilərsən
        // \App\Models\User::factory(10)->create();
    }
}
