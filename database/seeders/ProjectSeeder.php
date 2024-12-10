<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();
        $text = $faker->paragraph();
        $images = ['pexels-lagosfoodbank-9823010.jpg', 'pexels-unique-digitals-154779423-11153566.jpg', 'pexels-joseph-aduratomi-8100269-14457073.jpg', 'pexels-lagosfoodbank-9090820.jpg', 'pexels-roman-odintsov-11025058.jpg', 'pexels-rdne-8337501.jpg'];
        for ($i = 0; $i < count($images); $i++) {
            Project::create([
                'image' => $images[$i],
                'title' => $faker->sentence(rand(3, 6)),
                'text' => $text,
            ]);
        }

    }
}
