<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 100 ; $i++) { 
            DB::table('posts')->insert([
                'title' => str_random(20),
                'description' => str_random(250),
                'status' => '1',
                'author' => str_random(15),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        
    }
}
