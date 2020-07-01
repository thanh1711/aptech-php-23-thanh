<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

$faker = Faker\Factory::create();
for($i=0; $i<5; $i++){
        DB::table('article')->insert([
            'title'=>$faker->bs,
            'description'=>$faker->text(30),
            'content'=>$faker->paragraphs(2,10)
        ]);
    }
}
}
