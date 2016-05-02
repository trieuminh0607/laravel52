<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evo_user')->insert(
            array(
                array(
                    'name'     => 'Phan Minh Trieu',
                    'username' => 'trieuminh0607',
                    'password' => bcrypt('123456'),
                    'email'    => 'trieuminh0607@gmail.com',
                    'level'    => 1,
                    'created_at' => new DateTime(),
                ),
                array(
                    'name'     => 'Phan Minh Trieu',
                    'username' => 'admin',
                    'password' => bcrypt('123456'),
                    'email'    => 'trieu0607@gmail.com',
                    'level'    => 1,
                    'created_at' => new DateTime(),
                ),
                array(
                    'name'     => 'Phan Minh Khang',
                    'username' => 'minhkhang2310',
                    'password' => bcrypt('123456'),
                    'email'    => 'minhkhang2310@gmail.com',
                    'level'    => 2,
                    'created_at' => new DateTime(),
                ),
            )
        );
    }
}
