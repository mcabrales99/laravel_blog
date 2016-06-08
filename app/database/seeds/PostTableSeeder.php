<?php  

class PostTableSeeder extends Seeder {

    public function run()
    {
       $post =new Post();
       $post->title  = 'Why software development?';
       $post->content = 'Software development is challenging due to the abundance of choices to pursue in programming.  The multiple languages available to use have made codeup a very interesting experience. After running through most of the program, I am very confindent and comfortable that I can learn and excell in the field.';
       $post->user_id = User::first()->id;
       $post->save();

       $post =new Post();
       $post->title  = 'Javascript and PHP';
       $post->content = 'Javascript was the first dynamic language that we learned adding functionality to a website. exciting and the development added by php and laravel offered more experience. Even though they were different languages they had similarites in syntax and the methods used.';
       $post->user_id = User::first()->id;
       $post->save();

       $post =new Post();
       $post->title  = 'seeder posts happening now post!!';
       $post->content = 'objected oriented programming with php is awesome!!!';
       $post->user_id = User::first()->id;
       $post->save();

       $post =new Post();
       $post->title  = 'This is the database is great!!';
       $post->content = 'objected oriented programming with php is super!!!';
       $post->user_id = User::first()->id;
       $post->save();
    }

}