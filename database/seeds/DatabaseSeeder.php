<?php

use App\Models\Grade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('grades')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $grade = new Grade();

        $grade->name = '普通会员';
        $grade->description = '注册会员默认等级';
        $grade->capacity = 5;
        $grade->price = 0.0;

        $grade->save();

    }
}
