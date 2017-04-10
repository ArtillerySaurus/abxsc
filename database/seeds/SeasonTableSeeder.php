<?php

use App\Models\Season;
use Illuminate\Database\Seeder;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Season::create([
            'id' => 1,
            'number' => 1,
            'name' => 'Name',
            'map' => "Island",
            'databaseVersion' => 0.0
        ]);

        Season::create([
            'id' => 2,
            'number' => 2,
            'name' => 'Name',
            'map' => "Island",
            'databaseVersion' => 0.0
        ]);

        Season::create([
            'id' => 3,
            'number' => 3,
            'name' => 'Name',
            'map' => "The Center",
            'databaseVersion' => 0.0
        ]);

        Season::create([
            'id' => 4,
            'number' => 4,
            'name' => 'Name',
            'map' => "Scorched Earth",
            'databaseVersion' => 0.0
        ]);

        Season::create([
            'id' => 5,
            'number' => 5,
            'name' => 'Name',
            'map' => "Island",
            'databaseVersion' => 0.0
        ]);

    }
}
