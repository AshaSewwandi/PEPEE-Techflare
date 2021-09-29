<?php

namespace Database\Seeders;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name'=>'Asha Sewwandi',
            'email'=>'ashaliyanage1997@gmail.com',
            'address'=>'Nugagala road, Hiniduma',
            'mobileNo'=>'0705802042',
            'password'=>Hash::make('password'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name'=>'Samadhi Jayawardhana',
            'email'=>'samadhi1998@gmail.com',
            'address'=>'Kaluthara, Colombo',
            'mobileNo'=>'0705803467',
            'password'=>Hash::make('password'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            
    
        ],
        [
            'name'=>'Lakmini Fernando',
            'email'=>'lakmini1998@gmail.com',
            'address'=>'Panadura, Kaluthara',
            'mobileNo'=>'0707856345',
            'password'=>Hash::make('password'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            
    
        ]
        ]);
    }
}
