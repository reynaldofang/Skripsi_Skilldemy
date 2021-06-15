<?php

use Illuminate\Database\Seeder;
use App\Models\Instructor;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instructor::create([
            'name'      =>  'admin',
            'email'     =>  'reynaldfang@hotmail.com',
            'gender'    =>  'Male',
            'password'  =>  bcrypt('password'),
            'phone'     =>  '087768987818',
            'about'     =>  'I Love Computer',
            'category_id'     =>  '1',
            'experience'=>  'Make More Laravel',
        ]);
        Instructor::create([
            'name'      =>  'Andrea',
            'email'     =>  'andrea@hotmail.com',
            'gender'    =>  'Male',
            'password'  =>  bcrypt('password'),
            'phone'     =>  '087768987818',
            'about'     =>  'I Love Computer',
            'category_id'     =>  '1',
            'experience'=>  'Make More Laravel',
        ]);
    }
}
