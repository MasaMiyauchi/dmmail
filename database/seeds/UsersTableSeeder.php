<?php

use Illuminate\Database\Seeder;

use App\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //一括削除
        User::truncate();

        $faker = Faker::create('ja_JP');
        factory(User::class, 50)->create();
    }
}
