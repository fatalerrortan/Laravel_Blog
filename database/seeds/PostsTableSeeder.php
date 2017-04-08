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
                'title' => 'test saddsddfsd as22assdasdpodsst',
                'autor' => 'Xulin Tan',
                'category' => 'php',
                'article' => 'dklsfjlsdkfjsdlkfjsldkjf sdklfjsdlkfj sdfkljsdlkfj sdlfkjsdl kfjlsdkfjsldkfjsdlfkjsdlkj',
                'segment' => 'asdasdasdas jslkdja asd ',
                'keywords' => 'ubuntu,jquery,test,ios',
                'comments' => 'asdasdasdas',
                'reading_amount' => '132'
            ]
        );
    }
}
