<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User;
        $user->name = 'Steven Enriquez';
        $user->email = 'steven@gmail.com';
        $user->password = '1q2w3e4r';
        $user->save();

       /* $users = [
            [
                'name' => 'Camila Quintero',
                'email' => 'camila@gmail.com',
                'password' => bcrypt('12341234') 
                
            ],
        ];
        DB::table('users')->insert($users);*/
    }
}
