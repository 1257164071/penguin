<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name'  =>  '管理员',
            'phone'      =>  '17362819212',
            'account'    =>  'admin',
            'password'   =>  bcrypt('123456'),
        ]);

    }
}
