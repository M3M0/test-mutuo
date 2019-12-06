<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class test_user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_users')->insert([
            'name' => 'TestUser',
            'email' => 'test.user@mail.com',
            'password' => 'password',
            'token' => '3480c940bd99',
            'created_at' => Carbon::parse('2019-11-01'),
            'updated_at' => Carbon::parse('2019-11-01')
        ]);
    }
}
