<?php  

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

       $user =new user();
       $user->email  = 'mcabrales99@gmail.com';
       $user->password = $_ENV['USER_PASSWORD'];
       $user->save();

       $user =new user();
       $user->email  = 'yipeee@yahoo.com';
       $user->password = $_ENV['USER_PASSWORD'];
       $user->save();

       $user =new user();
       $user->email  = 'blah@yahoo.com';
       $user->password = $_ENV['USER_PASSWORD'];
       $user->save();

       $user =new user();
       $user->email  = 'weight@yahoo.com';
       $user->password = $_ENV['USER_PASSWORD'];
       $user->save();

       $user =new user();
       $user->email  = 'whoknows@yahoo.com';
       $user->password = $_ENV['USER_PASSWORD'];
       $user->save();
    }

}