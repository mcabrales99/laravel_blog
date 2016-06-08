<?php  

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

       $user =new User();
       $user->email  = 'mcabrales99@gmail.com';
       $user->password = $_ENV['USER_PASSWORD'];
       $user->save();

       $user =new User();
       $user->email  = 'yipeee@yahoo.com';
       $user->password = $_ENV['USER_PASSWORD'];
       $user->save();

       $user =new User();
       $user->email  = 'blah@yahoo.com';
       $user->password = $_ENV['USER_PASSWORD'];
       $user->save();

       $user =new User();
       $user->email  = 'weight@yahoo.com';
       $user->password = $_ENV['USER_PASSWORD'];
       $user->save();

       $user =new User();
       $user->email  = 'whoknows@yahoo.com';
       $user->password = $_ENV['USER_PASSWORD'];
       $user->save();
    }

}