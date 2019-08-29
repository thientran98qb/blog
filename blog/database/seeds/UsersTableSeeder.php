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
        $dataInsert = [
            [
                'name' => 'Nguyen Van A',
                'email' => 'nguyenvana@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
            'name' => 'Tran Thi B',
            'email' => 'tranthib@gmail.com',
            'password' => bcrypt('123456'),
             ]
        ];
        DB::table('users')->insert($dataInsert);
    }
}
