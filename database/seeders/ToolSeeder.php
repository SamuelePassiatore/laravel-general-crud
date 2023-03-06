<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $tool = new Tool();
            $tool->name = $faker->company();
            $tool->img_url = "https://picsum.photos/id/" . $faker->numberBetween(1, 50) . "/200";
            $tool->description = $faker->paragraph();
            $tool->category = $faker->word();
            $tool->release_year = $faker->year();
            $tool->latest_version = $faker->randomDigitNotNull();
            $tool->download_link = $faker->url();
            $tool->supported_os = $faker->randomElements(['windows', 'linux', 'ios'], $faker->numberBetween(1, 3));
            $tool->vote = $faker->numberBetween(1, 5);
            $tool->save();
        }
    }
}
