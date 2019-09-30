<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
        	'title' => 'Kum',
        	'year' => 1985,
        	'rating' => 8.5,
        	'country' => 'Croatia'
        ]);
    }
}
