<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert ([

             ['id' => 2,
             'name' => '二郎',
             'email' => 'jiro@gmail.com',
              'password' => bcrypt('987654321'),
              'bio' => '2001-02-02'],

        ]);
    }
}
