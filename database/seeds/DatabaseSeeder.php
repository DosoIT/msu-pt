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
        DB::table('category')->delete();
        DB::table('category')
            ->insert(array(
                array('c_id'=>'1','c_name'=>'Programming'),
                array('c_id'=>'2','c_name'=>'ซ่อมคอม'),
                array('c_id'=>'3','c_name'=>'ตัดต่อวีดีโอ'),
                array('c_id'=>'4','c_name'=>'ตัดต่อรูปภาพ'),
                array('c_id'=>'5','c_name'=>'ช่างภาพ'),
                array('c_id'=>'6','c_name'=>'Event!')
            ));

//        tb_location
        DB::table('tb_locations')->delete();
        DB::table('tb_locations')
            ->insert(array(
                array('id'=>'1','location'=>'แกดำ'),
                array('id'=>'2','location'=>'โกสุมพิสัย'),
                array('id'=>'3','location'=>'บ้านหนองอุ่ม'),
                array('id'=>'4','location'=>'กันทรวิชัย'),
                array('id'=>'5','location'=>'กุดรัง'),
                array('id'=>'6','location'=>'ชื่นชม'),
                array('id'=>'7','location'=>'เชียงยืน'),
                array('id'=>'8','location'=>'นาเชือก'),
                array('id'=>'9','location'=>'นาดูน'),
                array('id'=>'10','location'=>'บรบือ'),
                array('id'=>'11','location'=>'พยัคฆภูมิพิสัย'),
                array('id'=>'12','location'=>'เมืองมหาสารคาม'),
                array('id'=>'13','location'=>'ยางสีสุราช'),
                array('id'=>'14','location'=>'วาปีปทุม')
            ));
    }
}
