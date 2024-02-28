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
            ['name' => '一郎',
             'email' => 'ichiro@gmail.com',
             'pass' => 123456789,
             'bio' => '2001-01-01'],
            ['name' => '二郎',
             'email' => 'jiro@gmail.com',
              'pass' => 987654321,
              'bio' => '2001-02-02']

        ]);
    }
}
