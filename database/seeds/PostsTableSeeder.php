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
                'title' => 'test second post',
                'category' => 'php',
                'article' => 'dklsfjlsdkfjsdlkfjsldkjf sdklfjsdlkfj sdfkljsdlkfj sdlfkjsdl kfjlsdkfjsldkfjsdlfkjsdlkj',
                'comments' => 'asdasdasdas',
                'reading_amount' => '132'
            ]
        );
    }
}
