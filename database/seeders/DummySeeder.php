<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        $flashcard_icons = ['airplane.png', 'astronaut.png', 'bycicle.png', 'car.png', 'cat.png', 'chef.png', 'chicken.png', 'cow.png', 'doctor.png', 'elephant.png', 'fish.png', 'goat.png', 'horse.png', 'lawyer.png', 'motorbike.png', 'pilot.png', 'police.png', 'rabbit.png', 'rocket.png', 'ship.png', 'soldier.png', 'submarine.png', 'teacher.png', 'train.png', 'truck.png', 'turtle.png'];

        $category_thumbnail = ['astronaut_home.jpg', 'car_home.jpg', 'horse_home.jpg'];

        $flashcard_audio = ['astronot.mp3', 'ayam.mp3', 'dokter.mp3', 'gajah.mp3', 'guru.mp3', 'ikan.mp3', 'kambing.mp3', 'kapal.mp3', 'kelinci.mp3', 'kereta.mp3', 'koki.mp3', 'kucing.mp3', 'kuda.mp3', 'mobil.mp3', 'motor.mp3', 'pengacara.mp3', 'pesawat.mp3', 'pilot.mp3', 'polisi.mp3', 'roket.mp3', 'sapi.mp3', 'sepeda.mp3', 'tentara.mp3', 'tricl.mp3'];

        $material_bg = ['astronot.png', 'ayam.png', 'car.png', 'dokter.png', 'gajah.png', 'guru.png', 'ikan.png', 'kambing.png', 'kapal.png', 'kelinci.png', 'kereta.png', 'koki.png', 'kucing.png', 'kuda.png', 'motor.png', 'pengacara.png', 'pesawat.png', 'pilot.png', 'polisi.png', 'roket.png', 'sapi.png', 'sepeda.png', 'tentara.png', 'truk.png'];

        $question_bg = ['astronot.png', 'ayam.png', 'mobil.png', 'dokter.png', 'gajah.png', 'guru.png', 'ikan.png', 'kambing.png', 'kapal.png', 'kelinci.png', 'kereta.png', 'koki.png', 'kucing.png', 'kuda.png', 'motor.png', 'pengacara.png', 'pesawat.png', 'pilot.png', 'polisi.png', 'roket.png', 'sapi.png', 'sepeda.png', 'tentara.png', 'truk.png'];
        for($i = 0; $i < 3; $i++){
            DB::table('categories')->insert([
                'name' => $faker->word(),
                'image' => $category_thumbnail[$i],
            ]);
        }
        foreach(Category::all() as $category){
            for($i = 0; $i < 15; $i++){
                DB::table('questions')->insert([
                    'category_id' => $category->id,
                    'text' => $faker->text(100),
                    'image' => $faker->randomElement($question_bg),
                ]);
            }
        }

        foreach(Question::all() as $question){
            for($i = 0; $i < 3; $i++){
                DB::table('options')->insert([
                    'text' => $faker->text(20),
                    'question_id' => $question->id,
                    'is_correct' => 0,
                ]);
            }
            DB::table('options')->insert([
                'text' => $faker->text(20),
                'question_id' => $question->id,
                'is_correct' => 1,
            ]);
        }
        foreach(Category::all() as $category){
            for($i = 0; $i < 8; $i++){
                DB::table('materials')->insert([
                    'category_id' => $category->id,
                    'text' => $faker->text(1000),
                    'image' => $faker->randomElement($material_bg),
                    'icon' => $faker->randomElement($flashcard_icons),
                    'name' => $faker->word(),
                    'audio' => $faker->randomElement($flashcard_audio),
                ]);
            }
        }
    }
}
