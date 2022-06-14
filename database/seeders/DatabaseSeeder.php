<?php

namespace Database\Seeders;

use App\Models\Association;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActivitySeeder::class);
        $this->call(AssociateSeeder::class);
        $this->call(AssociationSeeder::class);
        $this->call(FamilySeeder::class);
        $this->call(PeriodSeeder::class);
        $this->call(StandSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
