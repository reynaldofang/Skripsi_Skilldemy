<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'      =>  'admin',
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('password'),
            'isEmp'     =>  0,
        ]);

        Admin::create([
            'name'      =>  'Employee',
            'email'     =>  'employee@emp.com',
            'password'  =>  bcrypt('password'),
            'isEmp'     =>  1,
        ]);
    }
}
