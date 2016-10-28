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
        DB::table('posts')->insert([
        	'author_id' => 1,
            'body' => 'this is the post body',
            'title' => 'this is the title',
        ]);
    }
}
