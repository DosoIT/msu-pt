<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('UsersTableSeeder');
        $this->command->info('User Table Seed..');
    }
}

class UsersTableSeeder extends Seeder
{
    /**
     *
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'std_id'=>'5601111',
            'user_name'=>'555555',
            'password'=>'ppppp',
            'name'=>'xxxx',
            'lastname'=>'kkkk',
            'britday'=>'2559-11-10',
            'sex'=>'1',
            'email'=>'nnn@gamil.com',
            'tel'=>'0865214',
            'address'=>'svfvdxbgfbgfbgcbgc',
            'facebook'=>'noom',
            'status'=>'1'
        ]);
    }
}
