<?php

use App\Models\Game;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newGame = new Game();
            $newGame->title = $faker->sentence();
            $newGame->cover = $faker->imageUrl(800, 600);
            $newGame->description = $faker->paragraphs(10, true);
            $newGame->is_available = $faker->boolean(80);
            $newGame->save();
        }
    }
}