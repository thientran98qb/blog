<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
              'name' =>'Nguyen Thi Lon'
          ]  ,
            [
                'name' =>'Tran Van Heo'
            ]
        ];
        DB::table('categories')->insert($dataInsert);
    }
}
