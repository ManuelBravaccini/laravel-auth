<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newProject = new Project();
            //$newProject->slug = Str::slug($newProject->title);
            $newProject->title = $faker->unique()->sentence(3);
            $newProject->content = $faker->text(200);
            $newProject->project_date = $faker->date();
            $newProject->save();
        }
    }
}