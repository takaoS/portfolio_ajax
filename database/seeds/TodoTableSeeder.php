<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'Title1',
        ];
        DB::table('todos')->insert($param);

        $param = [
            'title' => 'Title2',
        ];
        DB::table('todos')->insert($param);

        $param = [
            'title' => 'Title3',
        ];
        DB::table('todos')->insert($param);
    }
}
